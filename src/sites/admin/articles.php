<?php
is_admin($session->role);
$data['articles'] = $cms->getArticle()->getAll(null, false);
$data['error']    = filter_input(INPUT_GET, 'error') ?? '';
$data['success']  = filter_input(INPUT_GET, 'success') ?? '';

$data['section'] = '';

echo $twig->render('admin/articles.html', $data);
