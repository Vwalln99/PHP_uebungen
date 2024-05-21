<section>
    <h1>Alt-Text Bearbeiten</h1>
    <form action="edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?php $_POST['id']; ?>">
        <div>
            <label for="alt">Alt-Text:</label>
            <input type="text" id="alt" name="alt" value="<?php $alt; ?>">
        </div>
        <div>
            <button type="submit" name="save">Speichern</button>
        </div>
    </form>
</section>