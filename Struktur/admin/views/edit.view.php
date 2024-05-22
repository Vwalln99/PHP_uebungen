<section>
    <h1>Alt-Text Bearbeiten</h1>
    <?php var_dump($image) ?>
    <?php if (!empty($image)) : ?>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $image->id; ?>">

            <div>
                <label for="alt">Alt-Text:</label>
                <input type="text" id="alt" name="alt" value="<?= $image->alt; ?>">

            </div>
            <div>
                <button type="submit" name="save">Speichern</button>
            </div>
        </form>
    <?php else : ?>
        <p>Bild nicht gefunden.</p>
    <?php endif; ?>
</section>