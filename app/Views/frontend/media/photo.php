<?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<style>
  .hero-banner {
    position: relative;
    height: 400px;
    overflow: hidden;
  }
  .hero-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
  }
  .gallery-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
</style>

<!-- Hero Banner -->
<?php if (!empty($hero['image'])): ?>
<section class="hero-banner">
  <img src="<?= base_url('public/uploads/' . $hero['image']) ?>" alt="<?= esc($hero['title']) ?>">
  <div class="hero-overlay">
    <div>
      <h1 class="text-light"><?= esc($hero['title']) ?></h1>
      <?php if (!empty($hero['subtitle'])): ?>
      
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Gallery Section -->
<div class="container my-5">
  <h3 class="text-center mb-4 text-danger fw-bold">Photo Gallery</h3>
  <div class="row g-4">
    <?php foreach ($images as $img): ?>
      <div class="col-md-4">
        <img src="<?= base_url('public/uploads/' . $img['image']) ?>" 
             class="gallery-img img-fluid" 
             alt="Gallery Image">
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->endSection() ?>
