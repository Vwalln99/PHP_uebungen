<?php


is_admin($session->role);

$data['id'] = $id;
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
        $id = $data['id'];
        redirect(DOC_ROOT . "admin/categories/$id", ['success' => 'Category deleted']);
    } catch (PDOException $e) {
        if ($e->errorInfo[1] === 1451) {
            redirect(DOC_ROOT . 'admin/categories', ['error' => 'Category ' . $categoryName . ' can not be removed, there are Articles in the Category']);
        }
    }
}

echo $twig->render('admin/category_delete.html', $data);
