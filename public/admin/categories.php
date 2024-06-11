<?php
require '../../src/bootstrap.php';

$data['categories'] = $cms->getCategory()->getAll();

$data['section'] = '';

$data['error'] = filter_input(INPUT_GET, 'error') ?? '';
$data['success'] = filter_input(INPUT_GET, 'success') ?? '';

$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];

echo $twig->render('admin/categories.html', $data);
