<div class="detail-grid">
    <div class="detail-image">
        <div class="detail-carousel">
            <div class="detail-carousel-track">
              <?php foreach( $data['images'] as $img ) : ?>
                <div class="detail-carousel-item">
                    <img src="<?= $img['file_path'] ?>" alt="">
                </div>
              <?php endforeach; ?>
            </div>
            
            <div class="detail-carousel-btn prev"><</div>
            <div class="detail-carousel-btn next">></div>
        </div>
    </div>

    <div class="detail-info">
        
    </div>

    <div class="detail-deskripsi">
        
    </div>
</div>


