<div class="atas">
    <div class="kiri">
        <h2 class="">Beranda</h2>
    </div>
    <div class="kanan">
        <a href="<?= BASEURL; ?>/katalog">>Temukan semua game</a>
    </div>
</div>
<div class="home-grid">
    <div class="home-left">
        <h3 class="home-title-card">Tag</h3>
        <ul>
            <?php
            foreach( $data['genres'] as $g ) : ?>
            <li class="home-tag">
                <a href=""><?= $g['name']; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="kotak-hitam"></div>
    </div>
    <div class="home-middle">
        <h3 class="home-title-card">Multiple Game Lists</h3>
        <ul>
            <?php
                $count = 0;
                foreach( $data['games'] as $g ) :
                if( $count >= 12 ) break;
                ?>
                <li>
                    <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                        <div class="game-item">
                            <div class="game-card">
                                <img src="<?= $g['cover'] ?>">
                            </div>
                            <div class="game-info">
                                    <span><?= $g['title'] ?></span>
                            </div>
                            
                        </div>
                    </a>
                </li>
            <?php $count++;
             endforeach; ?>
        </ul>
        <div class="kotak-hitam"></div>
    </div>
    <div class="home-right">
        <h3 class="home-title-card">Top game</h3>
        <ul>
            <?php $no = 1; ?>
            <?php foreach( $data['topGames'] as $t ) : ?>
                <li>
                    <a href=" <?= BASEURL; ?>/detail/<?= $t['id'] ?> ">
                        <div class="top-game-item">
                            <div class="top-game-card">
                                <img src="<?= $t['cover'] ?>">
                                <span class="rank-number"><?= $no; ?>.</span>
                            </div>
                            <div class="top-game-info">
                                <span><?= $t['title'] ?></span>
                            </div>
                    </a>
                </li>
            <?php $no++; ?>
            <?php endforeach; ?>
        </ul>
        <div class="kotak-hitam"></div>
    </div>
</div>
