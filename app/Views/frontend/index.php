 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>
<style>
/* .carousel-item img {
    object-fit: cover;
    height: 500vh;
    max-height: 900px;
    padding-top: 100px;
} */



/* You can dynamically set inline background-image in PHP as shown below */



.section-title {
  font-size: 2rem;
  font-weight: 700;
  text-align: center;
  margin-top: 40px;
  margin-bottom: 40px;
  color: #2c2c2c;
}

.method-divider {
  width: 60px;
  height: 3px;
  margin: 0 auto 30px;
  background-color: #00bfff;
}

.methodology-card {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding-top: 70px;
  padding-bottom: 30px;
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  position: relative;
  transition: all 0.3s ease-in-out;
  height:230px;
}

@media only screen and (max-width: 768px) {
  .methodology-card {
    height: auto;
    /* padding: 40px 15px; */
    /* background:black; */
  }

  .methodology-icon {
    width: 90px;
    height: 90px;
    top: -45px;
  }

  .methodology-title {
    font-size: 1rem;
  }

  .methodology-description {
    font-size: 0.85rem;
  }
}




.methodology-card:hover {
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  transform: translateY(-5px);
}

.methodology-icon {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid white;
  position: absolute;
  top: -60px;
  left: 50%;
  transform: translateX(-50%);
  background-color: white;
}

.methodology-title {
  font-weight: 700;
  color: #0000cc;
  font-size: 1.2rem;
  margin-top: 10px;
  margin-bottom: 10px;
}

.methodology-description {
  font-size: 0.95rem;
  color: #333;
}
@media (min-width: 992px) {
    .mb-lg-0 {
        margin-bottom: 0 !important;
        /* margin-left: -200px; */
    }
}
@media (max-width: 768px) {
  .carousel-bg {
    height: 60vh;
  }

  .carousel-bg h2 {
    font-size: 1.5rem;
  }

  .floating-buttons {
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    z-index: 999;
  }

  .floating-buttons a {
    display: block;
    margin-bottom: 10px;
    writing-mode: vertical-rl;
    text-orientation: mixed;
  }
}

.gallery_img{
  height:230px;
}
.main_div{
  margin-top:110px;
}

.carousel-inner {
  height: 90vh;
}

.carousel-background {
  height: 90vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
}

@media (max-width: 768px) {
  .carousel-inner {
  height: 30vh;
}

.carousel-background {
    height: 30vh;
}
}

.carousel-item .carousel-background {
  background-image: none; /* fallback */
}

.carousel-item:nth-child(1) .carousel-background {
  background-image: url('<?= base_url('front_end/assets/img/' . $carouselData[0]['banner_image']) ?>');
}
/* .hero-overlay{
  top:61px !important;
} */
</style>
<?php //print_r($row);die;  ?>
 <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php if (!empty($carouselData)): ?>
          <?php foreach ($carouselData as $index => $row): ?>
              <div class="carousel-item <?= $index === 0 ? 'active' : '' ?> position-relative">
                  <div class="text-overlay text-center py-3 w-100 position-absolute text-white">
                      <h4 class="fw-bold mb-1"><?= esc($row['title']) ?></h4>
                      <h4 class="fw-bold mb-1"><?= esc($row['subtitle']) ?></h4>
                  </div>
                  <img src="<?= base_url('front_end/assets/img/' . $row['banner_image']) ?>" class="d-block w-100" alt="...">
              </div>
          <?php endforeach; ?>
      <?php else: ?>
          <div class="carousel-item active">
              <div class="text-center text-white py-3 position-absolute w-100">
                  <h4 class="fw-bold">No Carousel Data Available</h4>
              </div>
              <img src="<?= base_url('front_end/assets/img/default.jpg') ?>" class="d-block w-100" alt="...">
          </div>
      <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div> -->

<div id="carouselExampleCaptions" class="carousel slide main_div " data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php if (!empty($carouselData)): ?>
      <?php foreach ($carouselData as $index => $row): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
  <div class="carousel-background d-flex align-items-center justify-content-center text-center text-white"
     style="background-image: url('<?= base_url('front_end/assets/img/' . $row['banner_image']) ?>');">

            <div class="carousel-overlay">
              <h4 class="fw-bold mb-2"><?= esc($row['title']) ?></h4>
              <h4 class="fw-bold"><?= esc($row['subtitle']) ?></h4>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="carousel-item active">
        <div class="carousel-background d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('<?= base_url('front_end/assets/img/default.jpg') ?>');">
          <div class="carousel-overlay">
            <h4 class="fw-bold">No Carousel Data Available</h4>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- Navigation Buttons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



  <!--================ End Home Banner Area =================-->

  <!--================ Start Feature Area =================-->
  <!-- <div class="container py-5">
    <h2 class="section-title">Our Unique Methodologies</h2>
    <div class="method-divider"></div>

    <div class="row justify-content-center">
    
      <div class="col-md-4 mb-4">
        <div class="methodology-card">
          <img src="<?= base_url('front_end/assets/img/ELC-2-1-150x150.png') ?>" alt="Experiential Learning" class="methodology-icon" />
          <div class="methodology-title">Practice-Intensive</div>
          <p class="methodology-description">
             Gain real classroom experience through 20 weeks of school internships and micro-teaching sessions, preparing you for practical teaching challenges.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="methodology-card">
          <img src="<?= base_url('front_end/assets/img/cooperative-learning1-1-150x150.png') ?>" alt="Collaborative Learning" class="methodology-icon" />
          <div class="methodology-title">Scholarships</div>
          <p class="methodology-description">
            "Benefit from merit-based scholarships that make teacher education accessible. Focus on building a successful teaching career without financial stress."
          </p>
        </div>
      </div>

     
      <div class="col-md-4 mb-4">
        <div class="methodology-card">
          <img src="<?= base_url('front_end/assets/img/information.png') ?>" alt="ICT Enabled Practices" class="methodology-icon" />
          <div class="methodology-title">Research & Action Projects</div>
          <p class="methodology-description">
             Engage in action research projects and innovative teaching experiments, mentored by experienced faculty for academic excellence.
          </p>
        </div>
      </div>
    </div>
  </div> -->


    <div class="container">
    <h2 class="section-title text-center ">Our Unique Methodologies</h2>
    <!-- <div class="method-divider mb-4 text-center"></div> -->

    <div class="row justify-content-center pt-5">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="methodology-card">
          <img src="<?= base_url('front_end/assets/img/ELC-2-1-150x150.png') ?>" alt="Experiential Learning" class="methodology-icon" />
          <div class="methodology-title">Practice-Intensive</div>
          <p class="methodology-description">
            Gain real classroom experience through 20 weeks of school internships and micro-teaching sessions.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="methodology-card">
          <img src="<?= base_url('front_end/assets/img/cooperative-learning1-1-150x150.png') ?>" alt="Collaborative Learning" class="methodology-icon" />
          <div class="methodology-title">Scholarships</div>
          <p class="methodology-description">
            Benefit from merit-based scholarships that make teacher education accessible.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="methodology-card">
          <img src="<?= base_url('front_end/assets/img/21.png') ?>" alt="ICT Enabled Practices" class="methodology-icon" />
          <div class="methodology-title">Research & Action Projects</div>
          <p class="methodology-description">
            Engage in action research projects and innovative teaching experiments.
          </p>
        </div>
      </div>
    </div>
  </div>

  
  <!--about us-->

  <section class="about_area">
  <div class="container">
    <h3 class=" section-title text-center" style="font-family: 'Poppins'">About Us</h3>
    <div class="row h_blog_item">
      <div class="col-lg-6">
        <div class="h_blog_img">
          <?php if (!empty($about['image'])): ?>
            <img class="img-fluid" src="<?= base_url('front_end/assets/img/' . $about['image']) ?>" alt="About Image" />
          <?php else: ?>
            <img class="img-fluid" src="<?= base_url() ?>public/front_end/img/about.png" alt="Default Image" />
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="h_blog_text">
          <div class="h_blog_text_inner left right">
            <h4 style="font-family: 'Poppins'">Welcome to our Institute</h4>
            <p style="font-family: 'Poppins'">
              <?= !empty($about['overview']) ? $about['overview'] : 'About content will be updated soon.' ?>
            </p>
            <a class="primary-btn" href="<?= base_url('vision-mission') ?>">
              See More <i class="ti-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="why_join_area">
    <div class="container">
      <h3 class="text-center mb-5 fw-bold"></h3>
      <div class="text-center mb-4">
        <i class="bi bi-mortarboard-fill why_join_icon"></i>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-12 col-lg-6 mb-4 mb-lg-0">
          <div class="card shadow border-0 rounded p-4">
            <h4 class="mb-4 fw-bold text-primary text-center">Admission Form</h4>
        
            <form action="#" method="post">
              <!-- Full Name -->
              <div class="mb-3">
                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" required>
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                </div>
              </div>
        
              <!-- Email and Phone -->
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Email Address <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="" required>
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="tel" class="form-control" placeholder="" required>
                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                  </div>
                </div>
              </div>
        
              <!-- Program Selection -->
              <div class="mb-3">
                <label class="form-label">Select Program <span class="text-danger">*</span></label>
                <div class="input-group">
                  <select class="form-select" required>
                    <option selected disabled>Choose a program...</option>
                    <option>B.Ed (English)</option>
                    <option>B.Ed (Marathi)</option>
                    <option>B.Ed (Science)</option>
                    <option>Other</option>
                  </select>
                  <span class="input-group-text"><i class="bi bi-journal-bookmark"></i></span>
                </div>
              </div>
        
              <!-- Agreement -->
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                  I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.
                </label>
              </div>
        
              <!-- Submit -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary fw-bold">
                  <i class="bi bi-send me-1"></i> Submit Application
                </button>
              </div>
        
              <p class="text-muted mt-3 text-center small">
                We'll contact you within 1 business days after submission.
              </p>
            </form>
          </div>
        </div>

        <div class="col-lg-6">
         
        </div>

      </div>
    </div>
  </section>


  <!-- Infrastructure Section -->
 <section class="infrastructure_area py-5">
  <div class="container">
    <h3 class=" section-title text-center  fw-bold">Our Infrastructure</h3>
    <div class="text-center mb-4">
      <i class="bi bi-building-fill infra_icon display-4 text-primary"></i>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" style="row-gap: 33px;">
      <?php if (!empty($infrastructure)): ?>
        <?php foreach ($infrastructure as $row): ?>
          <div class="col">
            <div class="infra_card card h-100 shadow-sm border-0 rounded-4 hover-shadow">
              <img class="card-img-top rounded-top infra_img"
                   src="<?= base_url('front_end/assets/img/' . $row['image']) ?>"
                   alt="<?= esc($row['title']) ?>"
                   loading="lazy" />
              <div class="card-body text-center">
                <h4 class="card-title mb-3"><?= esc($row['title']) ?></h4>
                <p class="card-text"><?= esc($row['subtitle']) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">No infrastructure data available.</p>
      <?php endif; ?>
    </div>

    <div class="custom-divider mt-5"></div>
  </div>
</section>




  <section class="faq_testimonial_area py-5">
    <div class="container">
      <div class="row g-5">
        <!-- FAQ Section -->
      <div class="col-lg-6">
        <div class="text-center">
          <h3 class="mb-4" style="font-family: 'Poppins', sans-serif;">Frequently Asked Questions</h3>
          <i class="bi bi-question-circle-fill fs-1 text-primary mb-3"></i>
        </div>
        <div class="card shadow-sm border-0 rounded">
          <div class="accordion" id="faqAccordion">
            <?php if (!empty($faqs)): ?>
              <?php foreach ($faqs as $index => $faq): ?>
                <div class="accordion-item border-0">
                  <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?> fw-bold" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq<?= $index ?>"
                            aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                            aria-controls="faq<?= $index ?>">
                      <?= esc($faq['question']) ?>
                    </button>
                  </h2>
                  <div id="faq<?= $index ?>"
                      class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                      aria-labelledby="heading<?= $index ?>"
                      data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <?= esc($faq['answer']) ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p class="text-center p-3">No FAQs available at the moment.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>


        <!-- Testimonial Section -->
    <div class="col-lg-6">
          <div class="text-center">
            <h3 class="mb-4" style="font-family: 'Poppins', sans-serif;">What Our Students Say</h3>
            <i class="bi bi-chat-quote-fill fs-1 text-success mb-3"></i>
          </div>

          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" id="carousel">
              <?php if (!empty($testimonials)): ?>
                <?php foreach ($testimonials as $index => $t): ?>
                  <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <div class="card shadow-sm border-0 rounded">
                      <div class="card-body position-relative">
                        <i class="bi bi-quote text-success position-absolute" style="font-size: 3rem; top: 0; left: 0;"></i>
                        <p class="pt-4">“<?= esc($t['content']) ?>”</p>
                        <div>
                          <p class="fw-bold mb-0"><?= esc($t['name']) ?></p>
                          <p class="text-muted mb-0 small"><?= esc($t['designation']) ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>

            <!-- Controls -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="visually-hidden">Next</span>
            </button> -->

            <!-- Indicators -->
            <div class="carousel-indicators mt-3">
              <?php foreach ($testimonials as $index => $t): ?>
                <button type="button"
                        data-bs-target="#testimonialCarousel"
                        data-bs-slide-to="<?= $index ?>"
                        <?= $index === 0 ? 'class="active" aria-current="true"' : '' ?>
                        aria-label="Slide <?= $index + 1 ?>"></button>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="gallery_area">
    <div class="container">
      <h3 class=" section-title text-center " style="font-family: 'Poppins', sans-serif;">Gallery</h3>
      <div class="text-center mb-4">
        <i class="bi bi-camera-fill gallery_icon"></i>
      </div>
     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="gallery">
        <?php if (!empty($gallery)): ?>
            <?php foreach ($gallery as $row): ?>
                <div class="col">
                    <div class="gallery_card card shadow-sm border-0 rounded h-100">
                        <a href="<?= base_url('uploads/gallery/' . $row['image']) ?>" data-rel="lightcase:gallery" title="<?= esc($row['title']) ?>">
                            <img class="card-img-top rounded-top gallery_img"
                                src="<?= base_url('uploads/gallery/' . $row['image']) ?>"
                                alt="<?= esc($row['title']) ?> at BVCE"
                                loading="lazy" />
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title mb-0" style="font-size: 1rem;"><?= esc($row['title']) ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>No gallery images found.</p>
            </div>
        <?php endif; ?>
      </div>

     <div class="text-center mt-4">
  <a href="<?= base_url('photo') ?>" class="btn btn-primary px-4 py-2 rounded-pill" style="font-size: 1rem;">
    See More
  </a>
</div>
      <div class="custom-divider"></div>
    </div>
  </section>
  <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>

