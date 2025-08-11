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
  <h2 class="mb-4 text-center">Approvals Affliation</h2>
  <div class="accordion" id="accordionExample">

    <!-- NCTE Recognition -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Approvals Affliation
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
           data-bs-parent="#accordionExample">
        <div class="accordion-body text-justify">
          Brahma Valley College of Education has received formal recognition from the National Council for Teacher Education (NCTE),
          affirming its commitment to delivering quality teacher education. The college fulfills all the norms and standards
          prescribed by NCTE and offers a comprehensive B.Ed. program designed to develop skilled and reflective educators.
        </div>
      </div>
    </div>

  </div>
</section>



     <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>