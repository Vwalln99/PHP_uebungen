<?php

require '../../src/bootstrap.php';
is_admin($session->role);

$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];

//$data['id'] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$data['id']) {
    redirect('categories', ['error' => 'Category not found (id)']);
}

$data['category'] = $cms->getCategory()->fetch($data['id']);

if (!$data['category']) {
    redirect('categories.php', ['error' => 'Category not found']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $categoryName = $data['category']['name'];
        $cms->getCategory()->delete($data['id']);
        redirect(DOC_ROOT . 'admin/categories', ['success' => 'Category deleted']);
    } catch (PDOException $e) {
        if ($e->errorInfo[1] === 1451) {
            redirect(DOC_ROOT . 'admin/categories', ['error' => 'Category ' . $categoryName . ' can not be removed, there are Articles in the Category']);
        }
    }
}

echo $twig->render('admin/category_delete.html', $data);
