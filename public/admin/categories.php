<?php
require '../includes/db-connect.php';
require '../includes/functions.php';
$navigation = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];
$sql = 'select id, name, navigation from category';
$categories = pdo_execute($pdo, $sql)->fetchAll(PDO::FETCH_ASSOC);
$section = '';

$error = filter_input(INPUT_GET, 'error') ?? '';
$success = filter_input(INPUT_GET, 'success') ?? '';
?>

<?php include '../admin/header.php'; ?>
<main class="container mx-auto flex justify-center flex-col items-center">
    <header class="p-10">
        <?php if ($error) : ?>
            <p class="error text-red-500 bg-red-200 p-5 roundd-md"><?= $error ?></p>
        <?php endif; ?>
        <?php if ($success) : ?>
            <p class="error text-green-500 bg-green-200 p-5 roundd-md"><?= $success ?></p>
        <?php endif; ?>
        <h1 class="text-4xl text-blue-500 mb-8">Categories</h1>
        <button class="text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600"><a href="category.php">Add a new category</a></button>
    </header>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10">
        <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
            <tr>
                <th class="px-6 py-3">Name</th>
                <th class="px-6 py-3">Edit</th>
                <th class="px-6 py-3">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category) : ?>
                <tr class="bg-white border-b dark:bg-gray-800">
                    <td class="px-6 py-4 font-medium text-white whitespace-nowrap"><?php echo e($category['name']) ?></td>
                    <td class="px-6 py-4 font-medium text-pink-600 whitespace-nowrap"><a href="category.php?id=<?php echo $category['id'] ?>">Edit</a></td>
                    <td class="px-6 py-4 font-medium text-blue-600 whitespace-nowrap"><a href="category_delete.php?id=<?php echo $category['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../admin/footer.php'; ?>