 <?= $this->extend('layout/frontend') ?>
<?= $this->section('content') ?>

<?php //print_r($row);die;  ?>
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
</div>


  <!--================ End Home Banner Area =================-->

  <!--================ Start Feature Area =================-->
  <section class="about_area section_gap">
    <div class="container">
      <h3 class="text-center mb-5" style="font-family: 'Poppins', sans-serif; font-size: 2.5rem; font-weight: 600;">
        Admission Information</h3>
      <div class="row h_blog_item align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="h_blog_text">
            <div class="h_blog_text_inner left right">
              <!-- <h4 class="mb-3" style="font-size: 1.8rem; font-weight: 500;">Admission Process</h4> -->

              <!-- Load DB overview content (already contains p, ul, strong, etc.) -->
              <?= $aboutsection['overview'] ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="h_blog_img">
              <?php if (!empty($aboutsection['image'])): ?>
                <div class="text-center my-4">
                  <img src="<?= base_url('front_end/assets/img/' . $aboutsection['image']) ?>" class="img-fluid" alt="Admission Image">
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about_area section_gap" style="padding-top: 20px;">
  <div class="container">
    <h3 class="text-center" style="font-family: 'Poppins'">About Us</h3>
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
            <a class="primary-btn" href="<?= base_url('about-us') ?>">
              Learn More <i class="ti-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="why_join_area">
    <div class="container">
      <h3 class="text-center mb-5 fw-bold">Why Join BVCE (B.Ed)</h3>
      <div class="text-center mb-4">
        <i class="bi bi-mortarboard-fill why_join_icon"></i>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="why_join_card card shadow border-0 rounded">
            <div class="accordion" id="whyJoinAccordion">
              <div class="accordion" id="whyJoinAccordion">
                <?php if (!empty($accordionData)): ?>
                  <?php foreach ($accordionData as $index => $row): ?>
                    <div class="accordion-item border-0">
                      <h4 class="accordion-header">
                        <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?> fw-bold" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordion<?= $index ?>"
                                aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                aria-controls="accordion<?= $index ?>">
                          <?= esc($row['title']) ?>
                        </button>
                      </h4>
                      <div id="accordion<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                          data-bs-parent="#whyJoinAccordion">
                        <div class="accordion-body">
                          <?= $row['overview'] ?> <!-- This includes <p>, <ol>, <li> etc. -->
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p class="text-center">No sections found.</p>
                <?php endif; ?>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="why_join_img">
            <img class="img-fluid rounded shadow"
                src="<?= base_url('front_end/assets/img/' . ($image['image'] ?? 'default.jpg')) ?>"
                alt="Why Choose BVCE"
                loading="lazy" />
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Infrastructure Section -->
 <section class="infrastructure_area py-5">
  <div class="container">
    <h3 class="text-center mb-4 pt-4 fw-bold">Our Infrastructure</h3>
    <div class="text-center mb-4">
      <i class="bi bi-building-fill infra_icon display-4 text-primary"></i>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="visually-hidden">Next</span>
            </button>

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
      <h3 class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">Gallery</h3>
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

      <nav aria-label="Gallery pagination" class="mt-4">
        <ul class="custom-pagination">
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
          </li>
          <li class="page-item"><a class="page-link" href="page-2.html">2</a></li>
          <li class="page-item"><a class="page-link" href="page-3.html">3</a></li>
          <li class="page-item"><a class="page-link" href="page-4.html">4</a></li>
          <li class="page-item">
            <a class="page-link" href="page-2.html" aria-label="Next">
              <span>Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="custom-divider"></div>
    </div>
  </section>
  <?= $this->endsection() ?>

<?= $this->section('custom_script') ?>

<?= $this->endsection() ?>

