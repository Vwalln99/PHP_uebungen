<?php
require '../../src/bootstrap.php';

$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];

$data['id'] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$data['id']) {
    redirect('admin/articles.php', ['error' => 'Article not found (id)']);
}

$sql = "SELECT a.title, a.images_id, i.filename FROM articles a LEFT JOIN images i ON a.images_id = i.id WHERE a.id = :id";
$data['article'] = $cms->getArticle()->fetch($data['id']);
if (!$data['article']) {
    redirect('admin/articles.php', ['error' => 'Article not found']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if ($data['article']['images_id']) {
            $sql = "UPDATE articles SET images_id = NULL WHERE id = :id";
            $cms->getArticle()->update($data['id']);
            $sql = "DELETE FROM images WHERE id = :id";
            $cms->getImage()->delete($data['article']['images_id']);
            unlink(UPLOAD_DIR . $data['article']['filename']);
        }
        $cms->getArticle()->delete($data['id']);
        redirect('articles.php', ['success' => 'Article deleted']);
    } catch (PDOException $e) {
        redirect('articles.php', ['error' => 'Article could not be deleted']);
    }
}

echo $twig->render('admin/article_delete.html', $data);
