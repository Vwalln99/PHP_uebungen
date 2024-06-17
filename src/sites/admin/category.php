<?php

use EdvGraz\Validation\Validate;

is_admin($session->role);

$data['id'] = $id;
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
$data['section'] = '';

if ($data['id']) {
    $data['category'] = $cms->getCategory()->fetch($data['id']);

    if (!$data['category']) {
        redirect('categories.php', ['error' => 'Category not found']);
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
            if ($data['id']) {
                $bindings['id'] = $data['id'];
                $id = $data['id'];
                $cms->getCategory()->update($bindings);
                redirect(DOC_ROOT . "admin/categories/$id", ['success' => 'Category successfully updated']);
            } else {
                $cms->getCategory()->push($bindings);
                redirect(DOC_ROOT . "admin/categories/$id", ['success' => 'Category successfully saved']);
            }
        } catch (PDOException $e) {
            $errors['issue'] = 'Name already in use';
        }
    } else {
        $errors['issue'] = 'Please correct the following issues: ' . $problems;
    }
}

echo $twig->render('admin/category.html', $data);
