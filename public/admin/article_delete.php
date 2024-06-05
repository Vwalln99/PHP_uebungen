<?php
require '../includes/validate.php';
require '../includes/db-connect.php';
require '../includes/functions.php';

$navigation = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];
$section = '';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    redirect('articles.php', ['error' => 'Invalid article ID']);
}

$confirm = filter_input(INPUT_POST, 'confirm');

if ($confirm === 'yes') {
    try {
        $pdo->beginTransaction();

        $sql = 'select images_id from articles where id=:id';
        $stmt = pdo_execute($pdo, $sql, ['id' => $id]);
        $article = $stmt->fetch();

        if ($article) {
            $imageId = $article['images_id'];

            $sql = 'update articles set images_id = null where id=:id';
            pdo_execute($pdo, $sql, ['id' => $id]);

            if ($imagePath && file_exists($imagePath)) {
                unlink($imagePath);
            }

            $sql = 'delete from articles where id = :id';
            pdo_execute($pdo, $sql, ['id' => $id]);
            $pdo->commit();

            redirect('articles.php', ['success' => 'Article successfully deleted']);
        } else {
            echo ('Article not found');
        }
    } catch (Exception $e) {
        $pdo->rollBack();
        $error = 'An error occurred while deleting the article: ' . $e->getMessage();
        redirect('articles.php', ['error' => $error]);
    }
}
?>
<?php include '../admin/header.php'; ?>
<main class="container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5">
    <h2 class="text-3xl text-blue-500 mb-8">Delete Article</h2>
    <p class="text-lg mb-4">You sure you want to delete this article?</p>
    <form method="POST" action="article_delete.php?id=<?= $id ?>">
        <div class="flex space-x-4">
            <button type="submit" name="confirm" value="yes" class="text-white bg-blue-500 p-3 rounded-md hover:bg-red-600">Yes</button>
            <a href="articles.php" class="text-white bg-pink-600 p-3 rounded-md hover:bg-gray-600">No</a>
        </div>
    </form>
</main>
<?php include '../admin/footer.php'; ?>