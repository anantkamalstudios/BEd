 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<section class="hero-banner" data-aos="fade-up">
    <img src="<?= base_url('public/front_end/assets/img/' . esc($hero_board_member['hero_image'] ?? '1920x800.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay">
        <div>
            <h1 class="text-light"><?= esc($hero_board_member['hero_title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h1>
            <a href="admission-form.html" class="btn btn-primary">
                <?= esc($hero_board_member['hero_subtitle'] ?? 'Apply Now') ?>
            </a>
        </div>
    </div>
</section>
 <!-- About Section -->
  
  <section class="about_area py-5">
  <div class="container">
    <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">About Our B.Ed. College</h2>
    <div class="text-center mb-4">
      <i class="fas fa-graduation-cap fa-3x text-primary"></i>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <!-- Dynamic image -->
        <img class="img-fluid rounded shadow"
          src="<?= base_url('public/uploads/' . $about['about_image']) ?>" 
          alt="Brahma Valley College Campus" loading="lazy" />
      </div>
      <div class="col-lg-6">
        <div class="card shadow-sm border-0 rounded p-4">
          <h3 class="mb-3">Our Commitment to Excellence</h3>

          <!-- Dynamic overview content -->
          <?= $about['overview'] ?? '' ?>

          <a class="btn btn-primary rounded-pill px-4 py-2" href="<?= base_url('contact') ?>" aria-label="Contact us to learn more">
            Contact Us <i class="fas fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="custom-divider"></div>
  </div>
</section>


  <!-- Faculty Section -->
  <section class="faculty_area py-5">
    <div class="container">
      <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">Our Faculty & Leadership</h2>
      <div class="text-center mb-4">
        <i class="fas fa-users fa-3x text-primary"></i>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($faculty_members as $faculty): ?>
          <div class="col">
            <div class="card shadow-sm border-0 rounded h-100">
              <div class="text-center p-3">
                <img class="img-fluid rounded-circle"
                  src="<?= base_url('public/uploads/' . $faculty['faculty_image']) ?>"
                  alt="<?= esc($faculty['name']) ?>"
                  loading="lazy"
                  style="width: 150px; height: 150px;" />
              </div>
              <div class="card-body text-center">
                <h4 class="card-title mb-2"><?= esc($faculty['name']) ?></h4>
                <p class="card-text text-muted mb-2"><?= esc($faculty['designation']) ?></p>
                <p class="card-text"><?= esc($faculty['department']) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center mt-4">
        <a class="btn btn-primary rounded-pill px-4 py-2" href="faculty.html" aria-label="Meet our team">Meet Our Team
          <i class="fas fa-arrow-right ms-1"></i></a>
      </div>
      <div class="custom-divider"></div>
    </div>
  </section>
   <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>