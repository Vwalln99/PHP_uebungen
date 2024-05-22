<?php
include_once("Zoo.php");
include_once("header.php");
if (!isset($_GET['name'])) {
    echo "Tier nicht gefunden.";
    exit;
}

$animalName = $_GET['name'];
$animal = null;

foreach ($zoo->getAnimals() as $a) {
    if ($a->name === $animalName) {
        $animal = $a;
        break;
    }
}

if ($animal === null) {
    echo "Tier nicht gefunden.";
    exit;
}
?>

<head>
    <title><?= $animal->name; ?> - Tierdetails</title>
</head>

<main>
    <h1><?= $animal->name; ?></h1>
    <?php if (!$animal instanceof Raubkatze) : ?>
        <p>Jetziges Gewicht</p>
        <progress value="<?= $animal->weight; ?>" max="2500"></progress>
        <p>Mindestgewicht</p>
        <progress value="<?= $animal->minweight; ?>" max="2500"></progress>
        <p>Maximalgewicht</p>
        <progress value="<?= $animal->maxweight; ?>" max="2500"></progress>
        <p> <?= $animal->pet(); ?></p>
    <?php endif; ?>

    <?php if ($animal instanceof Raubkatze) : ?>
        <p>Jetziges Gewicht</p>
        <progress value="<?= $animal->weight; ?>" max="600"></progress>
        <p>Mindestgewicht</p>
        <progress value="<?= $animal->minweight; ?>" max="600"></progress>
        <p>Maximalgewicht</p>
        <progress value="<?= $animal->maxweight; ?>" max="600"></progress>
        <p>Gefahr in %</p>
        <progress value="<?= $animal->getDanger(); ?>" max="100"></progress>
        <p> <?= $animal->pet(); ?></p>
        <p><?= $animal->roar(); ?></p>
    <?php endif; ?>
    <p><a href="index.php">Zurück zur Hauptseite</a></p>
</main>