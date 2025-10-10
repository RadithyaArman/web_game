<div class="edit-bagian-atas">
    <h2>Edit Game</h2>
    <p><a href="<?= BASEURL; ?>/admin">> Kembali</a></p>
</div>

<div class="edit-game">
    <form action="" method="post" autocomplete="off">
        <input type="hidden" name="id" value="<?= $data['games']['id'] ?>">
        <div class="edit-info">
            <label>Title:</label><br>
            <input type="text" name="title" value="<?= htmlspecialchars($data['games']['title']) ?>" required><br><br>

            <label>Deskripsi:</label><br>
            <textarea name="deskripsi" required><?= htmlspecialchars($data['games']['deskripsi']) ?></textarea><br><br>

            <label>Rating:</label><br>
            <input type="text" name="rating" value="<?= htmlspecialchars($data['games']['rating']) ?>"><br><br>

            <label>Release:</label><br>
            <input type="date" name="release" value="<?= htmlspecialchars($data['games']['release']) ?>"><br><br>

            <label>Developer:</label><br>
            <input type="text" name="developer" value="<?= htmlspecialchars($data['games']['developer']) ?>"><br><br>

            <label>Publisher:</label><br>
            <input type="text" name="publisher" value="<?= htmlspecialchars($data['games']['publisher']) ?>"><br><br>
        </div>

        <div class="edit-genre-game">
        <label>Genre:</label><br>
        <div class="checkbox">
            <?php $selected = array_column($data['select_genre'], 'id');
            foreach ($data['genres'] as $genre): 
                $checked = in_array($genre['id'], $selected) ? 'checked' : ''; ?>
                <input type="checkbox" name="genres[]" value="<?= $genre['id'] ?>" <?= $checked ?>> <?= htmlspecialchars($genre['name']) ?><br>
            <?php endforeach; ?><br>
        </div>
        
        </div>

        <div class="simpan-edit">
            <label>Cover Image (URL):</label><br>
            <input type="url" name="cover" value="<?= htmlspecialchars($data['games']['cover']) ?>"><br><br>

            <button type="submit">Update</button>
        </div>
    </form>

</div>

