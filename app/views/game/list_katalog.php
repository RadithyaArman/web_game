<ul>
    <?php if( !empty($data['games']) ) : ?>
    <?php foreach( $data['games'] as $g ) : ?>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href=" <?= BASEURL; ?>/detail/<?= $g['id'] ?> ">
                <div class="katalog-game-item">
                    <div class="katalog-game-card">
                        <img src="<?= $g['cover'] ?>">
                    </div>
                    <div class="katalog-game-info">
                        <span><?= $g['title'] ?></span>
                    </div>
                </div>
            </a>
        </li>
    <?php endforeach; ?>
    <?php else: ?>
        <li class="no-data">Game tidak ditemukan.</li>
    <?php endif; ?>
</ul>
