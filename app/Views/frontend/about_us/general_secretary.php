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

    <!-- General Secretary Message Section -->
    <section class="president-section py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-5" data-aos="fade-up"><?= esc($desk['title'] ?? "General Secretary's Message") ?></h3>
        <div class="card border-0 shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center bg-white p-4">
                    <img src="<?= base_url('public/uploads/' . ($desk['image'] ?? 'default.jpg')) ?>" alt="General Secretary"
                        class="img-fluid rounded shadow mb-3" />
                    <div class="text-center">
                        <p class="mb-1"><strong><?= esc($desk['name'] ?? '') ?></strong></p>
                        <p class="mb-1"><strong><?= esc($desk['designation'] ?? '') ?></strong></p>
                        <p class="mb-0"><?= esc($desk['address'] ?? '') ?></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3"><?= esc($desk['subtitle'] ?? "From The General Secretary's Desk") ?></h4>
                        <?= $desk['overview'] ?? '<p>Message not available.</p>' ?>
                        <p class="fw-bold mt-4">
                            Best Regards,<br>
                            <?= esc($desk['name'] ?? '') ?><br>
                            <?= esc($desk['designation'] ?? '') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>