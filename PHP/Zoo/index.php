<?php
include("Zoo.php");
include __DIR__ . '/header.php';
?>

<main>
    <h2>Unsere Tiere</h2>
    <ul>
        <?php foreach ($zoo->getAnimals() as $animal) : ?>
            <li>
                <a href="Tiere.php?name=<?= $animal->name; ?>">
                    <?= $animal->name; ?> - Gewicht: <?= $animal->weight; ?> kg
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</main>