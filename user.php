<?php
require 'includes/db-connect.php';
require 'includes/functions.php';

$cat_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$cat_id) {
    include 'page_not_found.php';
}

$sql = "select forename, surname, joined, profile_pic from user where id = :id;";
$user = pdo_execute($pdo, $sql, ["id" => $cat_id])->fetch(PDO::FETCH_ASSOC);
if (!$user) {
    include 'page_not_found.php';
}
$sql =
    "select a.id, a.title, a.summary, a.category_id, a.user_id, c.name as category,
    concat(u.forename, ' ', u.surname) as author, i.filename as image_file, i.alttext as image_alt
    from articles as a
    join category as c on a.category_id=c.id
    join user as u on a.user_id=u.id
    left join images as i on a.images_id=i.id
    where a.user_id=:id and a.published=1
    order by a.id desc;
    ";
$articles = pdo_execute($pdo, $sql, ['id' => $cat_id])->fetchAll(PDO::FETCH_ASSOC);

$sql = "select id, name from category where navigation = 1;";

$navigation = pdo_execute($pdo, $sql)->fetchAll();

$title = $user['forename'] . ' ' . $user['surname'] . ' - IT-News';
$description = $title;
$section = '';
?>
<?php include './includes/header.php'; ?>
<main class="container mx-auto mt-10 mb-10">
    <section>
        <h1 class="text-3xl text-center"><?= e($user['forename']) ?> <?= e($user['surname']) ?></h1>
        <p class="text-center text-gray-500">Joined: <?= e(format_date($user['joined'])) ?></p>
        <img class="mx-auto" src="uploads/<?= e($user['profile_pic'] ?? 'placeholder.jpg') ?>" alt="<?= e($article['image_file']) ?>">
    </section>
    <section class="flex flex-wrap p-8">
        <?php foreach ($articles as $article) : ?>
            <article class="w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4">
                <a href="article.php?id=<?= $article['id'] ?>">
                    <img src="uploads/<?= e($article['image_file'] ?? 'blank.png') ?>" alt="<?= e($article['image_file']) ?>">
                    <h2 class="text-blue-500 text-2xl pt-3 pb-1.5"><?= e($article['title']) ?></h2>
                    <p class="text-gray-500 pb-2.5"><?= e($article['summary']) ?></p>
                </a>
                <p class="credit-text-xs">
                    Posted in <a class="text-pink-400" href="category.php?id=<?= $article['category_id'] ?>">
                        <?= e($article['category']) ?>
                    </a>
                    by <a class="text-pink-400" href="user.php?id=<?= $article['user_id'] ?>">
                        <?= e($article['author']) ?></a>
                </p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include './includes/footer.php'; ?>