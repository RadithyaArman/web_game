<div class="tambah-bagian-atas">
    <h2>Tambah Game</h2>
    <p><a href="<?= BASEURL; ?>/admin">> Kembali</a></p>
</div>

<div class="tambah-game">
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="tambah-info">
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
        </div>
        
        <div class="tambah-genre-game">
            <label>Genre:</label><br>
            <div class="checkbox-genre">
                <?php foreach ($data['genres'] as $genre): ?>
                    <input type="checkbox" name="genres[]" value="<?= $genre['id'] ?>"> <?= $genre['name'] ?><br>
                <?php endforeach; ?><br>
            </div>
        </div>

        <div class="simpan-game">
            <label>Cover Image:</label><br>
            <input type="url" name="cover" placeholder="https://example.com/cover.jpg"><br><br>
            <button type="submit">Simpan</button>
        </div>


        


    </form>
</div>

