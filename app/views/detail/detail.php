<div class="detail-grid">
    <div class="detail-image">
        <div class="detail-carousel">
            <div class="detail-carousel-track">
              <?php foreach( $data['images'] as $img ) : ?>
                <div class="detail-carousel-item">
                    <img src="<?= $img['file_path']; ?>" alt="">
                </div>
              <?php endforeach; ?>
            </div>
            
            <div class="detail-carousel-btn prev"><</div>
            <div class="detail-carousel-btn next">></div>
        </div>
    </div>

    <div class="detail-info-lengkap">
        <div class="detail-title">
            <h3>Game: <?= $data['games']['title']; ?></h3>
        </div>
        <div class="detail-info">
            <p>Rate: <?= $data['games']['rating'] ?>/10⭐</p>
            <p>Developer: <?= $data['games']['developer'] ?></p>
            <p>Publisher: <?= $data['games']['publisher'] ?></p>
            <p>Release: <?= $data['games']['release'] ?></p>
            <div class="detail-genre-game">
                <ul>
                    <?php foreach($data['genres'] as $g) : ?>
                        <li><?= $g['name']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="detail-deskripsi">
        <div class="title-deskripsi">
            <h3>Info</h3>
        </div>
        <div class="deskripsi">
            <p><strong><?= $data['games']['title']; ?> </strong><?= $data['games']['deskripsi']; ?></p>
        </div>
    </div>
</div>


