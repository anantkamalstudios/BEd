  <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?> 
  
  <section class="hero-banner" data-aos="fade-up">
        <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
        <div class="hero-overlay">
            <div>
                <h1 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h1>
                <a href="admission-form.html" class="btn btn-primary"><?= esc($hero['subtitle'] ?? 'Apply Now') ?></a>
            </div>
        </div>
    </section>

    <section class="l-section py-5">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="<?= base_url() ?>public/front_end/img/pdf/NEP-2020-MARATHI.pdf.crdownload" target="_blank" rel="noopener"
                        aria-label="NEP 2020 MARATHI"
                        class="text-decoration-none text-primary d-flex align-items-center">
                        <i class="fas fa-download fa-2x me-3"></i>
                        <h4 class="mb-0">NEP 2020 MARATHI</h4>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="<?= base_url() ?>public/front_end/img/pdf/NEP-2020_English_0.pdf.crdownload" target="_blank" rel="noopener"
                        aria-label="NEP 2020 ENGLISH"
                        class="text-decoration-none text-primary d-flex align-items-center">
                        <i class="fas fa-download fa-2x me-3"></i>
                        <h4 class="mb-0">NEP 2020 ENGLISH</h4>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="<?= base_url() ?>public/front_end/img/pdf/NEP-2020-HINDI_.pdf.crdownload" target="_blank" rel="noopener"
                        aria-label="NEP 2020 HINDI" class="text-decoration-none text-primary d-flex align-items-center">
                        <i class="fas fa-download fa-2x me-3"></i>
                        <h4 class="mb-0">NEP 2020 HINDI</h4>
                    </a>
                </div>
            </div>
        </div>

    </section>
     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>