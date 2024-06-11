<?php
require '../../src/bootstrap.php';

$data['articles'] = $cms->getArticle()->getAll(null, false);
$data['error']    = filter_input(INPUT_GET, 'error') ?? '';
$data['success']  = filter_input(INPUT_GET, 'success') ?? '';

$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];
$data['section'] = '';

echo $twig->render('admin/articles.html', $data);
