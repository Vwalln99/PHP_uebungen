<?php
require '../../src/bootstrap.php';

use EdvGraz\Validation\Validate;

$data['id'] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;
$data['errors'] = [
    'issue' => '',
    'name' => '',
    'description' => '',
];
$data['category'] = [
    'id' => '',
    'name' => '',
    'description' => '',
    'navigation' => false
];
$data['navigation'] = [
    ['name' => 'Categories', 'url' => '../admin/category.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];
$data['section'] = '';

if ($data['id']) {
    $data['category'] = $cms->getCategory()->fetch($data['id']);

    if (!$data['category']) {
        redirect('categories.php', ['error' => 'category not found']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category['name'] = filter_input(INPUT_POST, 'name');
    $category['description'] = filter_input(INPUT_POST, 'description');
    $category['navigation'] = filter_input(INPUT_POST, 'navigation', FILTER_VALIDATE_BOOLEAN);

    $errors['name'] = Validate::is_text($category['name'], 1, 50) && (!empty($category['name'])) ? ''
        : 'Name must be between 1 and 50 characters';
    $errors['description'] = Validate::is_text($category['description'], 1, 254) && (!empty($category['description'])) ? ''
        : 'Description must be between 1 and 254 characters';

    $problems = implode($errors);

    if (!$problems) {
        $bindings = [
            'name' => $category['name'],
            'description' => $category['description'],
            'navigation' => $category['navigation']
        ];
        try {
            if ($id) {
                $bindings['id'] = $id;
                $cms->getCategory()->update($bindings);
                redirect('categories.php', ['success' => 'category successfully saved']);
            } else {
                $cms->getCategory()->push($bindings);
                redirect('categories.php', ['success' => 'category successfully saved']);
            }
        } catch (PDOException $e) {
            $errors['issue'] = 'Name already in use';
        }
    } else {
        $errors['issue'] = 'Please correct the following issues: ' . $problems;
    }
}


echo $twig->render('admin/category.html', $data);
