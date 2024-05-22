<?php
$title = 'Paris';
include 'includes/header.inc.php';
?>

<p>
    Auf dieser Seite stehen die Inhalte von <?= $title; ?>
</p>
<p>Wählen Sie eine der folgenden Optionen:</p>
<?php
include 'includes/citylist.inc.php';
?>
<?php
include 'includes/footer.inc.php';
?>