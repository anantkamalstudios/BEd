 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<!-- Hero Banner -->
<section class="hero-banner" data-aos="fade-up" style="position:relative; margin-top: 48px;">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="<?= esc($hero['title'] ?? '') ?>">
    <div class="hero-overlay" style="margin-top: 50px;">
        <div>
            <h3 class="text-light"><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h3>
        </div>
    </div>
</section>

<!-- Vision, Mission, Belief Section -->
<main class="py-5">
    <section class="py-3">
        <div class="container">
            <div class="row g-4">
                <!-- Belief -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="iconbox">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h4>Our Belief</h4>
                        <p><?= ($vision_mission['belief'] ?? '“There is nothing as pure as knowledge”') ?></p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="iconbox">
                        <i class="fas fa-eye"></i>
                        <h4>Our Vision</h4>
                        <p><?= ($vision_mission['vision'] ?? 'Vision content not available.') ?></p>
                    </div>
                </div>

                <!-- Mission -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="iconbox">
                        <i class="fas fa-bullseye"></i>
                        <h4>Our Mission</h4>
                        <p><?= ($vision_mission['mission'] ?? 'Mission content not available.') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>