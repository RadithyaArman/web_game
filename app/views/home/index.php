<div class="atas">
    <h2>Rekomendasi</h2>
</div>
<div class="grid">
    <div class="card satu">
        <h3>Kategori</h3>
        <p><a href="">PC</a></p>
        <p><a href="">Action</a></p>
        <p><a href="">Horor</a></p>
    </div>
    <div class="card dua">
        <ul>
            <?php
                $count = 0;
                foreach( $data['games'] as $g ) :
                if( $count >= 9 ) break;
                ?>
                <li>
                    <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                        <div class="game-item">
                            <div class="game-card">
                                <img src="<?= $g['gambar'] ?>">
                            </div>
                            <div class="game-info">
                                <span><?= $g['judul'] ?></span>
                            </div>
                        </div>
                    </a>
                </li>
            <?php $count++;
             endforeach; ?>
        </ul>
    </div>
    <div class="card tiga">
        <h3>Top game</h3>
    </div>
</div>
