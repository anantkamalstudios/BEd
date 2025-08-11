<?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<style>
  .hero-banner{
    height: 400px; overflow: hidden; margin-top:100px;
  }
  @media (max-width: 768px) {
      .hero-banner{
  height: 119px;
        overflow: hidden;
        margin-top: 117px;
  }
  }
</style>
<!-- Hero Banner -->
<section class="hero-banner position-relative" style="">
  <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" 
       alt="Brahma Valley Campus" 
       class="img-fluid w-100 h-100" style="object-fit: cover;">

  <!-- Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
    <div class="text-center text-white">
    </div>
  </div>
</section>

<!-- Salient Features Section -->
<div class="container my-5">
  <h3 class="text-center mb-4">Salient Features</h3>
  <div class="card shadow rounded">
    <div class="card-body">
      <?= $desk['overview'] ?? '<p>No data available.</p>' ?>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
