<?php

$search_term = filter_input(INPUT_GET, 'search');
$per_page    = filter_input(INPUT_GET, 'per_page', FILTER_VALIDATE_INT) ?? 3;
$offset      = filter_input(INPUT_GET, 'offset', FILTER_VALIDATE_INT) ?? 0;
$articles    = [];
$count       = 0;

if (!empty($search_term)) {
    $count = $cms->getArticle()->count($search_term);
    if ($count > 0) {
        $articles = $cms->getArticle()->limit($search_term, $per_page, $offset);
    }
}
if ($count > $per_page) {
    $total_pages  = ceil($count / $per_page);
    $current_page = ceil($offset / $per_page) + 1;
}

$data['navigation']  = $cms->getCategory()->fetchNavigation();
$data['section']     = '';
$data['title']       = 'Search Results for ' . $search_term;
$data['description'] = 'Search Results for ' . $search_term . ' the IT-News-Blog';
$data['articles'] = $articles;


echo $twig->render('search.html', $data);
