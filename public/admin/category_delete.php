<?php
require '../includes/validate.php';
require '../includes/functions.php';
require '../includes/db-connect.php';

$navigation = [
    ['name' => 'Categories', 'url' => '../admin/category.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];
$section = '';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    redirect('categories.php', ['error' => 'There is no category ID']);
}

$confirm = filter_input(INPUT_POST, 'confirm');

if ($confirm) {
    try {
        $sql = 'select count(*) from articles where category_id = :id';
        $count = pdo_execute($pdo, $sql, ['id' => $id])->fetchColumn();

        if ($count > 0) {
            redirect('categories.php', ['error' => 'Cannot delete category with assigned articles']);
        }

        $sql = 'delete from category where id =:id';
        pdo_execute($pdo, $sql, ['id' => $id]);
        redirect('categories.php', ['success' => 'Category successfully deleted']);
    } catch (PDOException $e) {
        if ($e->errorInfo[1] === '151') {
            $error = 'Can´t delete category it has articles';
        } else {
            $error = 'Another problem ocurred';
        }
        redirect('categories.php', ['error' => $error]);
    }
}
?>

<?php include '../admin/header.php'; ?>
<main class="flex flex-wrap p-8">
    <h2 class="text-3xl text-blue-500 mb-8">Delete category</h2>

    <form class="w-full grid" method="POST" action="category_delete.php?id=<?= $id ?>">
        <p class="text-gray-500">You sure want to delete this category?</p>
        <div class="p-4 text-gray-500">
            <button type="submit" name="confirm" value="yes" class="bg-blue-500 text-white p-2">Yes</button>
            <a href="categories.php">No</a>
        </div>
    </form>
</main>
<?php include '../admin/footer.php'; ?>