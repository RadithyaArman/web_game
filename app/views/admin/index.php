<h2>Daftar Game</h2>
<a href="<?= BASEURL ?>/admin/tambah">+ Tambah Game</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Cover</th>
        <th>Title</th>
        <th>Developer</th>
        <th>Publisher</th>
        <th>Release</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data['games'] as $g): ?>
    <tr>
        <td><img src="<?= $g['cover'] ?>" width="80"></td>
        <td><?= $g['title'] ?></td>
        <td><?= $g['developer'] ?></td>
        <td><?= $g['publisher'] ?></td>
        <td><?= $g['release'] ?></td>
        <td>
            <?php foreach ($g['genre'] as $genre): ?>
                <?= $genre['name'] ?><br>
            <?php endforeach; ?>
        </td>
        <td>
            <a href="<?= BASEURL ?>/admin/edit/<?= $g['id'] ?>">Edit</a> |
            <a href="<?= BASEURL ?>/admin/delete/<?= $g['id'] ?>" onclick="return confirm('Hapus game ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
