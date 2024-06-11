<?php
require '../../src/bootstrap.php';

use EdvGraz\Validation\Validate;

$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? '';
$tmp_path = $_FILES['image_file']['tmp_name'] ?? '';
$save_to = '';

$article = [
    'id' => $id,
    'title' => '',
    'summary' => '',
    'content' => '',
    'published' => false,
    'category_id' => 0,
    'user_id' => 0,
    'image_id' => null,
    'image_file' => '',
    'image_alt' => '',
];

$errors = [
    'issue' => '',
    'title' => '',
    'summary' => '',
    'content' => '',
    'user' => '',
    'category' => '',
    'image_file' => '',
    'image_alt' => '',
];

if ($id) {
    $article = $cms->getArticle()->fetch($id, false);
    if (!$article) {
        redirect('articles.php', ['error' => 'article not found']);
    }
}

$categories = $cms->getCategory()->getAll();
$users = $cms->getUser()->getAll();
$section = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image_file'])) {
        $image = $_FILES['image_file'];
        $errors['filename'] = $image['error'] === 1 ? 'The image is too large ' : '';
        if ($tmp_path && $image['error'] === UPLOAD_ERR_OK) {
            $article['image_alt'] = filter_input(INPUT_POST, 'image_alt');
            $errors['image_alt'] = Validate::is_text($article['image_alt'], 1, 254) ? '' : 'Alt text must be between 1 and 254 characters';
            $typ = mime_content_type($tmp_path);
            $errors['image_file'] .= in_array($typ, MEDIA_TYPES) ? '' : 'The file type is not allowed';
            $extension = pathinfo(strtolower($image['name']), PATHINFO_EXTENSION);
            $errors['image_file'] .= in_array($extension, FILE_EXTENSIONS) ? '' : 'The file extension is not allowed';
            $errors['image_file'] .= $image['size'] > MAX_FILE_SIZE ? 'The image exceeds the maximum upload size' : '';
            if ($errors['image_file'] === '' && $errors['image_alt'] === '') {
                $article['image_file'] = $image['name'];
                $save_to = get_file_path($image['name'], UPLOAD_DIR);
            }
        }
    }
    $article['title'] = filter_input(INPUT_POST, 'title');
    $article['summary'] = filter_input(INPUT_POST, 'summary');
    $article['content'] = filter_input(INPUT_POST, 'content');
    $article['user_id'] = filter_input(INPUT_POST, 'user', FILTER_VALIDATE_INT);
    $article['category_id'] = filter_input(INPUT_POST, 'category', FILTER_VALIDATE_INT);
    $article['published'] = filter_input(INPUT_POST, 'published', FILTER_VALIDATE_BOOLEAN) ? 1 : 0;
    $purifier = new HTMLPurifier();
    $purifier->config->set('HTML.Allowed', 'p,br,strong,em,a[href],i,u,ul,ol,li,img[src|alt]');
    $article['content'] = $purifier->purify($article['content']);
    $errors['title'] = Validate::is_text($article['title']) ? '' : 'Title must be between 1 and 100 characters';
    $errors['summary'] = Validate::is_text($article['summary'], 1, 200) ? '' : 'Summary must be between 1 and 200 characters';
    $errors['content'] = Validate::is_text($article['content'], 1, 10000) ? '' : 'Content must be between 1 and 10,000 characters';
    $errors['user'] = Validate::is_user_id($article['user_id'], $users) ? '' : 'User not found';
    $errors['category'] = Validate::is_category_id($article['category_id'], $categories) ? '' : 'Category not found';

    $problems = implode($errors);

    if (!$problems) {
        $bindings = $article;
        unset($bindings['author'], $bindings['category'], $bindings['created']);
        if ($save_to) {
            scale_and_copy($tmp_path, $save_to);
            $image_id = $cms->getImage()->save($bindings['image_file'], $bindings['image_alt']);
            $bindings['image_id'] = $image_id;
        }
        unset($bindings['image_file'], $bindings['image_alt']);
        if ($id) {
            $cms->getArticle()->update($bindings);
            redirect('articles.php', ['success' => 'Article successfully updated']);
        } else {
            unset($bindings['id']);
            $cms->getArticle()->push($bindings);
            redirect('articles.php', ['success' => 'Article successfully saved']);
        }
    }
}

$data['article'] = $article;
$data['errors'] = $errors;
$data['categories'] = $categories;
$data['users'] = $users;
$data['section'] = $section;
$data['title'] = 'Edit Article';
$data['description'] = 'Edit the details of the selected article';

echo $twig->render('admin/article.html', $data);
