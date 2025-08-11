<?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<style>
.card-hover-effect {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  border-radius: 20px;
  overflow: hidden;
}
.card-hover-effect:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
  border: 1px solid #0d6efd40;
}
.card-hover-effect img {
  transition: transform 0.4s ease;
}
.card-hover-effect:hover img {
  transform: scale(1.05);
}
.card-hover-effect .card-body {
  transition: color 0.3s ease;
}
.card-hover-effect:hover .card-body {
  color: #0d6efd;
}
</style>

<!-- Hero Banner -->
<section class="hero-banner position-relative" style="height: 400px; overflow: hidden;">
  <?php if (!empty($hero['image'])): ?>
    <img src="<?= base_url('uploads/board/' . $hero['image']) ?>" alt="Board Banner" class="img-fluid w-100 h-100" style="object-fit: cover;">
  <?php else: ?>
    <img src="<?= base_url('public/uploads/default.jpg') ?>" alt="Default Banner" class="img-fluid w-100 h-100" style="object-fit: cover;">
  <?php endif; ?>

  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
    <div class="text-center text-white">
      <h1 class="text-white"><?= esc($hero['title'] ?? 'Board Of Director') ?></h1>
    </div>
  </div>
</section>

<!-- Members Section -->
<div class="container my-5">
  <div class="row g-4">
    <?php if (!empty($members)) : ?>
      <?php foreach ($members as $member): ?>
        <div class="col-md-3">
          <div class="card text-center shadow card-hover-effect h-100">
            <img src="<?= base_url('uploads/board/' . $member['image']) ?>" class="card-img-top img-fluid" alt="<?= esc($member['name']) ?>">
            <div class="card-body">
              <h6 class="fw-bold mb-1"><?= esc($member['name']) ?></h6>
              <p class="text-muted mb-0"><?= esc($member['designation']) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <div class="col-12">
        <p class="text-center">No board members found.</p>
      </div>
    <?php endif; ?>
  </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('custom_script') ?>
<?= $this->endSection() ?>
