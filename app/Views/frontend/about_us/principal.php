 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

    <section class="hero-banner" data-aos="fade-up" style="position:relative; margin-top: 48px;">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay" style="margin-top: 50px;">
        <div>
            <h3 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h3>
        </div>
    </div>
</section>

<!-- Principal Message -->
<section class="president-section py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-5" data-aos="fade-up"><?= esc($desk['title'] ?? "Principal's Message") ?></h3>
        <div class="card border-0 shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                <!-- Principal Image and Info -->
                <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center bg-white p-4">
                    <img src="<?= base_url('public/uploads/' . ($desk['image'] ?? 'default.jpg')) ?>" alt="Principal" class="img-fluid rounded shadow mb-3" />
                    <div class="text-center">
                        <p class="mb-1"><strong><?= esc($desk['name'] ?? '') ?></strong></p>
                        <p class="mb-1"><strong>Designation:</strong> <?= esc($desk['designation'] ?? '') ?></p>
                        <p class="mb-0"><strong>Address:</strong><br><?= esc($desk['address'] ?? '') ?></p>
                    </div>
                </div>

                <!-- Principal Message -->
                <div class="col-lg-7">
                    <div class="card-body p-4">
                        <h4 class="card-title"><?= esc($desk['subtitle'] ?? "From The Principal's Desk") ?></h4>
                        <?= $desk['overview'] ?? '<p>Message will be updated soon.</p>' ?>

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