  <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 



    <!-- Hero Banner -->
    <section class="hero-banner" data-aos="fade-up">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay">
        <div>
            <h1 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h1>
            <a href="admission-form.html" class="btn btn-primary"><?= esc($hero['subtitle'] ?? 'Apply Now') ?></a>
        </div>
    </div>
    </section>

  <section class="container l-section py-5">
    <div class="row g-4">
        <?php if (!empty($gallery)): ?>
            <?php foreach ($gallery as $item): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm">
                        <img src="<?= base_url('public/uploads/' . esc($item['image'])) ?>"
                             alt="<?= esc($item['name']) ?>"
                             class="facility-img card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title section-title">
                                <i class="fas fa-building me-2"></i><?= esc($item['name']) ?>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center text-muted">No infrastructure items found.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>