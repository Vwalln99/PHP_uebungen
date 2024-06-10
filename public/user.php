<?php
require '../src/bootstrap.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    include APP_ROOT . '/public/page_not_found.php';
}

$user = $cms->getUser()->fetch($id);
if (!$user) {
    include APP_ROOT . '/public/page_not_found.php';
}

$articles = $cms->getArticle()->getAll(null, true, $id);
$navigation = $cms->getCategory()->fetchNavigation();
$title = $user['forename'] . ' ' . $user['surname'] . ' - IT-News';
$description = $title;
$section = '';

$data = [
    'user' => $user,
    'articles' => $articles,
    'navigation' => $navigation,
    'title' => $title,
    'description' => $description,
    'section' => $section,
];

echo $twig->render('user.html', $data);
