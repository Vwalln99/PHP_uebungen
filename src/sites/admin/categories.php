<?php
is_admin($session->role);
$data['categories'] = $cms->getCategory()->getAll();

$data['section'] = '';

$data['error'] = filter_input(INPUT_GET, 'error') ?? '';
$data['success'] = filter_input(INPUT_GET, 'success') ?? '';


echo $twig->render('admin/categories.html', $data);
