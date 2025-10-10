<div class="admin-atas">
    <h2>Daftar Game</h2>
    <a href="<?= BASEURL; ?>/admin/tambah">+ Tambah Game</a>
</div>

<div class="admin">
    <?php if( !empty($data['games']) ) : ?>
    <?php foreach( $data['games'] as $g ) : ?>

        <div class="card" style="background-color: black;">
            <img src="<?= $g['cover'] ?>" class="card-img-top" alt="..." style="width: 120px; height: 100%; display: block; margin: 10px auto 0 auto;">
            <div class="card-body">
                <h5 class="card-title" style="margin: 0; color: white; font-size: 1.2rem;"><?= $g['title'] ?></h5>
                <div class="card-body-deskripsi">
                    <p class="card-text" style="color: white;"><strong><?= $g['title'] ?></strong> <?= $g['deskripsi'] ?></p>
                </div>
                <div class="button-aksi">
                    <a href="<?= BASEURL; ?>/detail/<?= $g['id'] ?>"><button type="button" class="btn btn-info">Detail</button></a>
                    <a href="<?= BASEURL; ?>/admin/edit/<?= $g['id'] ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="<?= BASEURL; ?>/admin/delete/<?= $g['id'] ?>" onclick="return confirm('Hapus game ini?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <?php else : ?>
    <p>Game tidak tersedia.</p>
    <?php endif; ?>
</div>
