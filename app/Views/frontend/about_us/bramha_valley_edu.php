<?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<!-- Hero Banner -->
<section class="hero-banner position-relative" style="height: 400px; overflow: hidden;">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" 
         alt="<?= esc($hero['title'] ?? 'Hero Image') ?>" 
         class="img-fluid w-100 h-100" style="object-fit: cover;">

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
        <div class="text-center text-white">
            <h1 class=" text-center text-white"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h1>
           
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="container my-5" data-aos="fade-up">
    <h2 class="text-center mb-4">About Brahma Valley College of Education (B.Ed.)</h2>
    <div style="text-align: justify;">
        <?= $desk['overview'] ?? '' ?>
    </div>
</section>

<?= $this->endSection() ?>
<?= $this->section('custom_script') ?>
<?= $this->endSection() ?>
