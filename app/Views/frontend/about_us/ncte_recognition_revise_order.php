 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

 <!-- Hero Banner -->
<section class="hero-banner position-relative" style="height: 400px; overflow: hidden;">
  <img src="public/uploads/default.jpg" alt="Brahma Valley Campus" 
       class="img-fluid w-100 h-100" style="object-fit: cover;">

  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex  bg-dark bg-opacity-50">
    <div class="text-center text-white">
      <h1 class="text-center text-white">Welcome to Brahma Valley B Ed College</h1>
      <form action="admission-form.html" method="get" class="d-inline">
      </form>
    </div>
  </div>
</section>

  <!-- <section class="hero-banner" data-aos="fade-up" style="position:relative; margin-top: 48px;">
    <img src="<?= base_url('public/uploads/' . ($hero['image'] ?? 'default.jpg')) ?>" alt="Brahma Valley Campus">
    <div class="hero-overlay" style="top:50px">
        <div>
            <h3 class="text-light" style=""><?= esc($hero['title'] ?? 'Welcome to Brahma Valley B Ed College') ?></h3>
        </div>
    </div>
    </section> -->

<!-- Accordion Section -->
<section class="container my-5" data-aos="fade-up">
  <h2 class="mb-4 text-center">NCTE Recognition Revise order</h2>
  <div class="accordion" id="accordionExample">

    <!-- NCTE Recognition PDF -->
    <div class="accordion-item">
      <h4 class="accordion-header" id="headingOne">
        <!-- <a href="<?= base_url('public/front_end/pdf/NCTE B.Ed grant.pdf') ?>" 
           target="_blank" class="accordion-button text-decoration-none">
          NCTE Recognition
        </a> -->
        <?php if (!empty($pdfData['brochure'])): ?>
        <a href="<?= base_url('uploads/pdfs/' . $pdfData['brochure']); ?>" target="_blank">
            NCTE Recognition
        </a>
    
    <?php endif; ?>
        </h4>
    </div>

    <!-- Revise Order PDF -->
    <div class="accordion-item mt-2">
      <h4 class="accordion-header" id="headingTwo">
        <!-- <a href="<?= base_url('public/front_end/pdf/NCTE Revise order.pdf') ?>" 
           target="_blank" class="accordion-button collapsed text-decoration-none">
          Revise Order
        </a> -->
        <?php if (!empty($pdfData['syllabus'])): ?>

        <a href="<?= base_url('uploads/pdfs/' . $pdfData['syllabus']); ?>" target="_blank">
           Revise Order
        </a>
 
<?php endif; ?>
      </h4>
    </div>

  </div>
</section>



     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>