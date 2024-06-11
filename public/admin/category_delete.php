<?php

require '../../src/bootstrap.php';

$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];

$data['id'] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$data['id']) {
    redirect('categories.php', ['error' => 'Category not found (id)']);
}

$data['category'] = $cms->getCategory()->fetch($data['id']);

if (!$data['category']) {
    redirect('categories.php', ['error' => 'Category not found']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $cms->getCategory()->delete($data['id']);
        redirect('categories.php', ['success' => 'Category deleted']);
    } catch (PDOException $e) {
        if ($e->errorInfo[1] === 1451) {
            redirect('categories.php', ['error' => 'Category ' . $category['name'] . ' can not be removed, there are Articles in the Category']);
        }
    }
}

echo $twig->render('admin/category_delete.html', $data);
