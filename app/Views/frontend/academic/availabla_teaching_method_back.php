 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

 <!-- Hero Banner -->
<section class="hero-banner position-relative" style="height: 400px; overflow: hidden;">
  <img src="public/uploads/default.jpg" alt="Brahma Valley Campus" 
       class="img-fluid w-100 h-100" style="object-fit: cover;">

  <!-- Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
    <div class="text-center text-white">
      <h1>Welcome to Brahma Valley B Ed College</h1>
      <form action="admission-form.html" method="get" class="d-inline">
      </form>
    </div>
  </div>
</section>

<section class="container my-5" data-aos="fade-up">
  <h2 class="mb-4 text-center">Available Teaching Methods</h2>
  <div class="row text-center">
    <div class="col-md-4 mb-3">Marathi</div>
    <div class="col-md-4 mb-3">Hindi</div>
    <div class="col-md-4 mb-3">English</div>
    <div class="col-md-4 mb-3">Science</div>
    <div class="col-md-4 mb-3">Mathematics</div>
    <div class="col-md-4 mb-3">ICT</div>
    <div class="col-md-4 mb-3">Economics</div>
    <div class="col-md-4 mb-3">History</div>
    <div class="col-md-4 mb-3">Geography</div>
  </div>
</section>





     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>