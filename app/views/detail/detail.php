<style>
  /* Semua gambar di carousel seragam tingginya */
  .carousel-item img {
    width: 100%;
    height: 250px;       /* default tinggi untuk mobile */
    object-fit: cover;   /* crop biar tetap proporsional */
  }

  /* Kalau layar >= 768px (tablet / laptop) */
  @media (min-width: 768px) {
    .carousel-item img {
      height: 400px;     /* tinggi seragam di layar besar */
    }
  }
</style>

<div class="container text-center">
  <div class="row g-0">
    <div class="col-sm-8 p-0">
      <div id="carouselExample" class="carousel slide w-100 h-100" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <?php 
          if(!empty($data['images'])):
              $first = true;
              foreach($data['images'] as $image): 
          ?>
            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
              <img src="<?php echo $image['file_path']; ?>" class="d-block" alt="">
            </div>
          <?php 
              $first = false;
              endforeach; 
          endif; 
          ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-sm-4 text-start full-detail">
      <div class="title-detail">
        <h3><?= $data['games']['title'] ?></h3>
      </div>
      <div class="info-detail">

      </div>
      
      <p></p>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-12 text-start">col-sm</div>
  </div>
</div>
