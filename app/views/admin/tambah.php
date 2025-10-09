<h2>Tambah Game</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi" required></textarea><br><br>

    <label>Rating:</label><br>
    <input type="text" name="rating"><br><br>

    <label>Release:</label><br>
    <input type="date" name="release"><br><br>

    <label>Developer:</label><br>
    <input type="text" name="developer"><br><br>

    <label>Publisher:</label><br>
    <input type="text" name="publisher"><br><br>

    <label>Genre:</label><br>
    <?php foreach ($data['genres'] as $genre): ?>
        <input type="checkbox" name="genres[]" value="<?= $genre['id'] ?>"> <?= $genre['name'] ?><br>
    <?php endforeach; ?><br>

    <label>Cover Image:</label><br>
    <input type="url" name="cover" required><br><br>

    <button type="submit">Simpan</button>
</form>
