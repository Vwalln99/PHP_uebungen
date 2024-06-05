<?php
require '../includes/validate.php';
require '../includes/db-connect.php';
require '../includes/functions.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;
$errors = [
    'issue' => '',
    'name' => '',
    'description' => '',
];
$category = [
    'id' => '',
    'name' => '',
    'description' => '',
    'navigation' => false
];
$navigation = [
    ['name' => 'Categories', 'url' => '../admin/category.php'],
    ['name' => 'Articles', 'url' => '../../articles.php'],
];
$section = '';

if ($id) {
    $sql = 'select id, name, description, navigation from category where id=:id';
    $category = pdo_execute($pdo, $sql, ['id' => $id])->fetch();

    if (!$category) {
        redirect('categories.php', ['error' => 'category not found']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category['name'] = filter_input(INPUT_POST, 'name');
    $category['description'] = filter_input(INPUT_POST, 'description');
    $category['navigation'] = filter_input(INPUT_POST, 'navigation', FILTER_VALIDATE_BOOLEAN);

    $errors['name'] = is_text($category['name'], 1, 50) && (!empty($category['name'])) ? '' : 'Name must be between 1 and 50 characters';
    $errors['description'] = is_text($category['description'], 1, 254) && (!empty($category['description'])) ? '' : 'Description must be between 1 and 254 characters';

    $problems = implode(array_filter($errors));

    if (!$problems) {
        $sql = "insert into category (name, description, navigation) values (:name, :description, :navigation)";
        if ($id) {
            $sql = "update category set name = :name, description= :description, navigation = :navigation where id = :id";
        }
        $bindings = [
            'name' => $category['name'],
            'description' => $category['description'],
            'navigation' => $category['navigation']
        ];
        if ($id) {
            $bindings['id'] = $id;
        }

        try {
            pdo_execute($pdo, $sql, $bindings);
            redirect('categories.php', ['success' => 'category sucessfully saved']);
        } catch (PDOException $e) {
            $errors['issue'] = 'There was an issue saving the category';
        }
    } else {
        $errors['issue'] = 'Please correct the following issues: ' . $problems;
    }
}
?>
<?php include '../admin/header.php'; ?>
<main class="container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5">
    <form class="w-full grid" action="category.php?id=<?= $id ?? '' ?>" method="POST">
        <h2 class="text-3xl text-blue-500 mb-8"><?= $id ? 'Edit' : 'New' ?> Category</h2>
        <?php if ($errors['issue']) : ?>
            <p class="error text-red-500 bg-red-200 p-5 rounded-md"><?= $errors['issue'] ?></p>
        <?php endif; ?>
        <div class="p-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="name">Name</label>
            <input class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5' type="text" id="name" name="name" value="<?= e($category['name']) ?>">
            <span class="text-red-500"><?= $errors['name'] ?></span>
        </div>
        <div class="p-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="description">Description</label>
            <textarea class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5' type="text" id="description" name="description"><?= e($category['description']) ?>
            </textarea>
            <span class="text-red-500"><?= $errors['description'] ?></span>
        </div>
        <div class="p-4">
            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600
            " type="checkbox" id="navigation" name="navigation" <?= $category['navigation'] ? 'checked' : '' ?>>
            <label class="ms-2 text-sm font-medium text-gray-900" for="navigation">Navigation</label>
        </div>
        <button type="submit" class="text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600">Save</button>
    </form>

</main>
<?php include '../admin/footer.php'; ?>