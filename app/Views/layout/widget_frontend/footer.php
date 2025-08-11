 <style>
.admission_n{
    color: white !important;
}

.custom-tab {
    position: fixed;
    right: 0px;
    /* top: 40%;               */
    top: 25%;
    transform: rotate(270deg) translateY(-50%);
    transform-origin: right center;
    
    margin: 0;
    padding: 0;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    z-index: 9999;          
}


.button-wrapper {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.custom-btn {
    display: inline-block;
    padding: 16px 32px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
    min-width: 200px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.custom-btn span {
    position: relative;
    z-index: 2;
    color: white !important;
}

/* Button styles */
.admission-style {
    background: linear-gradient(135deg, #e63946, #d90429);
    border: 2px solid #fff;
}

.enquire-style {
    background: linear-gradient(135deg, #1a365d, #889d2a);
    border: 2px solid #fff;
}

/* Hover effect */
.custom-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

/* Shine effect */
.admission-style::before,
.enquire-style::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #9be639, #d90429);
    animation: shine 3s infinite;
    z-index: 1;
}

@keyframes shine {
    0% {
        left: -100%;
    }
    20% {
        left: 100%;
    }
    100% {
        left: 100%;
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .custom-tab {
        position: fixed;
        bottom: 450px;
        right: 20px;
        top: auto;
        transform: rotate(270deg) translateY(-50%);
        height: auto;
        z-index: 9999;
        justify-content: center;
    }

    .button-wrapper {
        flex-direction: row; /* keep side by side */
        gap: 10px;
    }

    .custom-btn {
        min-width: auto;
        padding: 12px 20px;
        font-size: 0.9rem;
        border-radius: 30px;
    }
}

</style>
 <footer id="page-footer" class="footer-area l-footer" itemscope itemtype="https://schema.org/WPFooter">
    <section class="l-section color_footer-bottom">
      <div class="container">
        <div class="row g-4">
          <!-- About Us Column -->
          <div class="col-lg-3">
            <h4><strong>About Us</strong></h4>
            <div class="my-3"></div>
            <div class="footlog text-center">
              <img width="279" height="181" src="https://bed.brahmavalley.com/wp-content/uploads/2023/03/whi.png"
                class="img-fluid" alt="Brahma Valley B.Ed. College Logo" decoding="async" loading="lazy">
            </div>
            <p>Brahma Valley College of Education (B.Ed.) aims to impart quality education in a safe, natural
              environment that promotes discipline, motivation, and learning.</p>
          </div>
          <!-- Information Column -->
          <div class="col-lg-3">
            <h4><strong>Information</strong></h4>
            <div class="my-3"></div>
            <div class="w-menu footmen d-flex">
              <!-- <ul id="menu-header-menu" class="menu" style="margin-right: 60px;">
                <li><a href="http://bed.brahmavalley.com/" aria-current="page">Home</a></li>
                <li><a href="https://bed.brahmavalley.com/admission/">Admission</a></li>
                <li><a href="https://bed.brahmavalley.com/principal-desk/">Principal Desk</a></li>
                <li><a href="https://bed.brahmavalley.com/board-members/">Board Members</a></li>
                <li><a href="https://bed.brahmavalley.com/faculty/">Faculty</a></li>
                <li><a href="https://bed.brahmavalley.com/lmc-committee/">LMC Committee</a></li>
                <li><a href="https://bed.brahmavalley.com/about-us/">About Us</a></li>
              </ul>
              <ul id="menu-header-menu" class="menu">
                <li><a href="https://bed.brahmavalley.com/anti-ragging-committee/">Anti-Ragging Committee</a></li>
                <li><a href="https://bed.brahmavalley.com/facilities/">Facilities</a></li>
                <li><a href="https://bed.brahmavalley.com/gallery/">Gallery</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">RTI</a></li>
                <li><a href="https://bed.brahmavalley.com/contact-us/">Contact Us</a></li>
              </ul> -->
                <ul id="menu-header-menu" class="menu" style="margin-right: 60px;">
                <li><a href="<?= base_url('/') ?>" aria-current="page">Home</a></li>
                <li><a href="<?= base_url('bramha_valley_edu') ?>">About Us</a></li>
                <li><a href="president">Management</a></li>
                <li><a href="apply-now">Admission</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                <!-- <li><a href="https://bed.brahmavalley.com/principal-desk/">Principal Desk</a></li>
                <li><a href="https://bed.brahmavalley.com/board-members/">Board Members</a></li>
                <li><a href="https://bed.brahmavalley.com/faculty/">Faculty</a></li>
                <li><a href="https://bed.brahmavalley.com/lmc-committee/">LMC Committee</a></li> -->

              </ul>
              <!-- <ul id="menu-header-menu" class="menu">
              
                <li><a href="https://bed.brahmavalley.com/anti-ragging-committee/">Anti-Ragging Committee</a></li>
                <li><a href="https://bed.brahmavalley.com/facilities/">Facilities</a></li>
                <li><a href="https://bed.brahmavalley.com/gallery/">Gallery</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">RTI</a></li>
            
              </ul> -->
            </div>
          </div>

          <div class="col-lg-3">
            <!-- <h4><strong>ADDITIONAL LINKS</strong></h4> -->
             <h4><strong>Additional Links</strong></h4>
            <div class="my-3"></div>
            <div class="w-menu footmen d-flex">
              <ul id="menu-header-menu" class="menu">
                <li><a href="https://bed.brahmavalley.com/anti-ragging-committee/">Alumni</a></li>
                <li><a href="https://bed.brahmavalley.com/facilities/">IQAC</a></li>
                <li><a href="https://bed.brahmavalley.com/gallery/">Student Corner</a></li>
                <!-- <li><a href="#">Downloads</a></li>
                <li><a href="#">RTI</a></li> -->
              </ul>
            </div>
</div>
          <!-- Contact Us Column -->
          <div class="col-lg-3">
            <h4><strong>Contact Us</strong></h4>
            <div class="my-3"></div>
            <div class="w-contacts">
              <div class="w-contacts-list">
                <div class="w-contacts-item for_address">
                  <i class="fas fa-map-marker-alt"></i>
                  <span class="w-contacts-item-value">Brahma Valley Educational Campus, Trimbak Road, Anjaneri,
                    Nashik-422213.</span>
                </div>
              </div>
            </div>
            <div class="w-contacts">
              <div class="w-contacts-list">
                <div class="w-contacts-item for_address">
                  <i class="fas fa-map-marker-alt"></i>
                  <span class="w-contacts-item-value">Palika Bazar Complex, Near Railway Booking Office,
                    Sharanpur-Trimbak Link Road, Nashik-422002.</span>
                </div>
              </div>
            </div>
            <div class="my-3"></div>
            <div class="w-contacts">
              <div class="w-contacts-list">
                <div class="w-contacts-item for_phone">
                  <i class="fas fa-phone-alt"></i>
                  <!-- <span class="w-contacts-item-value">(0253)2312904</span> -->
                     <span class="w-contacts-item-value">91-8459247477</span>
                </div>
              </div>
            </div>
            <div class="my-3"></div>
            <div class="w-contacts">
              <div class="w-contacts-list">
                <div class="w-contacts-item for_email">
                  <i class="fas fa-envelope"></i>
                  <span class="w-contacts-item-value"><a
                      href="mailto:brahmavalleybed2007@yahoo.in">vinodraut994@gmail.com</a></span>
                </div>
              </div>
            </div>
            <div style="height:10px;"></div>
            <!-- <div class="w-socials color_text shape_square style_default hover_fade">
              <div class="w-socials-list">
                <div class="w-socials-item facebook">
                  <a class="w-socials-item-link" href="https://www.facebook.com/profile.php?id=100091000913073"
                    target="_blank" rel="noopener nofollow" title="Facebook" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </div>
                <div class="w-socials-item twitter">
                  <a class="w-socials-item-link" href="#" target="_blank" rel="noopener nofollow" title="Twitter"
                    aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="w-socials-item instagram">
                  <a class="w-socials-item-link" href="#" target="_blank" rel="noopener nofollow" title="Instagram"
                    aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div class="custom-tab"> 
                    <div class="button-wrapper">
                        <a href="<?= base_url('#') ?>" class="custom-btn text-white admission-style">
                            <span>Admissions 2025-26</span>
                        </a>
                        <a href="<?= base_url('contact') ?>" class="custom-btn text-white enquire-style">
                            <span>Enquire Now</span>
                        </a>
                </div>
              </div> 
            </div> -->


          <div class="d-flex align-items-center gap-3 flex-wrap">
  <!-- Social Icons -->
            <div class="d-flex align-items-center gap-3">
                  <a class="w-socials-item-link" href="https://www.facebook.com/profile.php?id=100091000913073"
                    target="_blank" rel="noopener nofollow" title="Facebook" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a class="w-socials-item-link" href="#" target="_blank" rel="noopener nofollow" title="Twitter"
                    aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a class="w-socials-item-link" href="#" target="_blank" rel="noopener nofollow" title="Instagram"
                    aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
            </div>

  <!-- Buttons -->

          </div>
 <div class="custom-tab"> 
                    <div class="button-wrapper">
                        <a href="<?= base_url('#') ?>" class="custom-btn text-white admission-style">
                            <span>Admissions 2025-26</span>
                        </a>
                        <a href="<?= base_url('contact') ?>" class="custom-btn text-white enquire-style">
                            <span>Enquire Now</span>
                        </a>
                </div>
              </div> 
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="footer-top">
      <div class="container">
        <div class="my-3"></div>
        <p class="text-center">Copyright © 2025 Brahma Valley College of Education (B.Ed.) – All Rights Reserved.</p>
        <div class="my-3"></div>
      </div>
    </section>
  </footer>
  <!--================ End footer Area  =================-->
  <script src="<?= base_url() ?>public/front_end/js/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/popper.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/stellar.js"></script>
  <script src="<?= base_url() ?>public/front_end/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/owl-carousel-thumb.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/jquery.validate.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/mail-script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="<?= base_url() ?>public/front_end/js/gmaps.min.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/contact.js"></script>
  <script src="<?= base_url() ?>public/front_end/js/theme.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/js/lightcase.min.js"
    integrity="sha512-Lk1t/nm+/5z0Ckw1K0ZpxxyhTR+YM3Dy3oIPQCsZTAE3Evu7mR26W2S3S3S3f0W7ybywbNexWV0p9X/9vlNCLww=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    jQuery(document).ready(function ($) {
      $('a[data-rel^=lightcase]').lightcase({
        transition: 'fade',
        showCaption: true,
        showTitle: true,
        maxWidth: 1200,
        maxHeight: 800
      });
    });
  </script>
  <!-- Search Filter Function -->
  <script>
    function filterFunction(input, event) {
      const filter = input.value.toLowerCase();
      const ul = document.getElementById("programmeList");
      const li = ul.getElementsByTagName("li");

      ul.classList.toggle("show", filter.length > 0);

      for (let i = 0; i < li.length; i++) {
        const a = li[i].getElementsByTagName("a")[0];
        const txtValue = a.textContent || a.innerText;
        li[i].style.display = txtValue.toLowerCase().includes(filter) ? "" : "none";
      }
    }

    document.addEventListener("click", function (event) {
      const searchContainer = document.querySelector(".search-home");
      if (!searchContainer.contains(event.target)) {
        document.getElementById("programmeList").classList.remove("show");
        document.querySelector("input[name=search_course]").value = "";
      }
    });
  </script>
</body>

</html>