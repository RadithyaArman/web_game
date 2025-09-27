<div class="home-top">
    <div class="home">
        <h2 class=""><a href="<?= BASEURL; ?>">Beranda</a></h2>
    </div>
    <div class="to-katalog">
        <a href="<?= BASEURL; ?>/katalog">>Temukan semua game</a>
    </div>
</div>
<div class="home-grid">
    <div class="home-left">
        <h3 class="home-title-card">Tag</h3>
        <ul>
            <?php foreach( $data['genres'] as $g ) : ?>
            <li>
                <a href="<?= BASEURL; ?>/home/genre/<?= $g['id'] ?>">
                    <div class="home-tag">
                        <p><?= $g['name']; ?></p>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="kotak-hitam"></div>
    </div>
    <div class="home-middle">

        <h3 class="home-title-card"><?= $data['titleMiddle']; ?></h3>
        <ul>
            <?php if( !empty($data['games']) ) : ?>
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
                                <span class="title"><?= $g['title'] ?></span>
                            </div>       
                        </div>
                    </a>
                </li>
                
            <?php $count++;
             endforeach; ?>
             <?php else : ?>
                <li>Game tidak tersedia.</li>
            <?php endif; ?>
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
                                <div class="title">
                                    <p class="game-title"><?= $t['title'] ?></p>
                                </div>
                                <div class="info">
                                    <p class="rating"><?= $t['rating'] ?>/10⭐</p>
                                    <p>Developer: <?= $t['developer'] ?></p>
                                    <p>Publisher: <?= $t['publisher'] ?></p>
                                </div>
                                <div class="genre">
                                    <ul>
                                        <?php foreach($t['genre'] as $genre): ?>
                                            <li><?= $genre['name']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            <?php $no++; ?>
            <?php endforeach; ?>
        </ul>
        <div class="kotak-hitam"></div>
    </div>
</div>
