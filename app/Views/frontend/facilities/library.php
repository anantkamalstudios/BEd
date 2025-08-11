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
</style>

<!-- Hero Banner -->
<section class="hero-banner">
    <img src="<?= base_url('public/uploads/' . esc($hero['image'] ?? 'default.jpg')) ?>" alt="<?= esc($hero['title'] ?? 'Library Banner') ?>">
    <div class="hero-overlay">
        <div>
            <h3 class="text-light"><?= esc($hero['title'] ?? 'Library') ?></h3>
        </div>
    </div>
</section>

<!-- Library Content -->
<div class="container my-5">
    <div class="card shadow-lg p-4 bg-white rounded">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="<?= base_url('public/uploads/' . esc($desk['image'] ?? 'default.jpg')) ?>" alt="Library Facilities" class="img-fluid rounded">
            </div>

            <!-- Right Content -->
            <div class="col-md-6">
                <?= $desk['overview'] ?? '' ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
