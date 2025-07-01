
  <div class="container-fluid py-1" style="background-color: #ea1f28;">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center text-white gap-2 px-3">
      <!-- Left: Menu Links -->
      <ul class="list-inline mb-0 d-flex flex-wrap gap-2 text-white">
        <li class="list-inline-item"><a class="text-white text-decoration-none small" href="#">Download
            E-Brochures</a>
        </li>
        <li class="list-inline-item"><a class="text-white text-decoration-none small" href="#">Adminssion</a></li>
        <li class="list-inline-item"><a class="text-white text-decoration-none small" href="#" target="_blank">Blogs</a>
        </li>
        <!-- <li class="list-inline-item"><a class="text-white text-decoration-none small" href="#">Alumni</a></li> -->
        <!-- <li class="list-inline-item"><a class="text-white text-decoration-none small" href="#">Contact Us</a></li> -->
        <li class="list-inline-item"><a class="text-white text-decoration-none small" href="#"
            target="_blank">Consultancy Cell</a></li>
      </ul>

      <!-- Right: Social/Action Images -->
      <ul class="list-inline mb-0 d-flex align-items-center gap-2">
        <li><a class="text-white text-decoration-none small" href="#"><span>Get Connected</span></a></li>

        <li class="ml-2">
          <a class="text-white" href="#" target="_blank" aria-label="WhatsApp">
            <img src="<?= base_url() ?>public/front_end/img/whatsapp_icon.png" alt="WhatsApp" width="20" height="20">
          </a>
        </li>
        <li class="ml-2">
          <a class="text-white" href="#" target="_blank" aria-label="360">
            <img src="<?= base_url() ?>public/front_end/img/g360_icon_brahmavalley_social.png" alt="360" width="20" height="20">
          </a>
        </li>
        <li class="ml-2">
          <a class="text-white" href="#" target="_blank">
            <img src="<?= base_url() ?>public/front_end/img/fb_icon.png" alt="Facebook" width="20" height="20">
          </a>
        </li>
        <!-- <li class="ml-2">
          <a class="text-white" href="#" target="_blank" aria-label="Twitter">
            <img src="img/twitter.png" alt="Twitter" width="20" height="20">
          </a>
        </li> -->
        <li class="ml-2">
          <a class="text-white" href="https://in.linkedin.com/" target="_blank">
            <img src="<?= base_url() ?>public/front_end/img/linkedin_icon.png" alt="LinkedIn" width="20" height="20">
          </a>
        </li>
        <!-- <li class="ml-2">
          <a class="text-white" href="https://www.instagram.com/" target="_blank">
            <img src="img/instagram.png" alt="Instagram" width="20" height="20">
          </a>
        </li> -->
        <li class="ml-2">
          <a class="text-white" href="https://www.youtube.com/" target="_blank">
            <img src="<?= base_url() ?>public/front_end/img/youtube_icon.png" alt="YouTube" width="20" height="20">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="<?= base_url('/') ?>"><img src="<?= base_url() ?>public/front_end/img/logo.png" alt="" height="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">HOME</a>
              </li>

              <!-- About Us Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">ABOUT US</a>
                <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('NGSPMS_BVCOE') ?>">NGSPM’S BVCOE (B.Ed.)</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('vision-mission') ?>">OUR VISION AND MISSION</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('president') ?>">PRESIDENT MESSAGE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('general-secretary') ?>">GENERAL SECRETARY MESSAGE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('campus-director') ?>">CAMPUS DIRECTOR MESSAGE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('principal') ?>">PRINCIPAL MESSAGE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('faculty') ?>">FACULTY</a></li>
                  <li><a class="dropdown-item" href="<?= base_url() ?>public/front_end/img/pdf/code_conduct.pdf" target="_blank">CODE OF CONDUCT</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">INSTITUTIONAL
                      DISTINCTIVENESS</a></li>
                  <li><a class="dropdown-item" href="<?= base_url() ?>public/front_end/img/pdf/institutional-best-practices.pdf" target="_blank">BEST PRACTICES</a></li>
                  <li><a class="dropdown-item" href="#">INSTITUTIONAL VALUES AND SOCIAL
                      RESPONSIBILITY</a></li>
                  <li><a class="dropdown-item" href="#">GOALS AND OBJECTIVES</a></li>
                  <li><a class="dropdown-item" href="#">FEES REGULATING AUTHORITY</a></li>
                </ul>
              </li>

              <!-- Governance Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="governanceDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">GOVERNANCE</a>
                <ul class="dropdown-menu" aria-labelledby="governanceDropdown">
                  <li><a class="dropdown-item" href="#">LOCAL DEVELOPMENT COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('internal-quality') ?>">INTERNAL QUALITY ASSURANCE CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('rti') ?>">RIGHT TO INFORMATION</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('equal-cell') ?>">EQUAL OPPORTUNITY CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('stu-dev-com') ?>">STUDENTS DEVELOPMENT COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('grievance-redressal') ?>">GRIEVANCE REDRESSAL CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('divyang-cell') ?>">DIVYANG CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('womens-cell') ?>">VISHAKHA / WOMEN / ANTI SEXUAL HARASSMENT
                      CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('sc-st-cell') ?>">SC/ST GRIEVANCE CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('placement-cell') ?>">PLACEMENT CELL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('student-council') ?>">STUDENT COUNCIL</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('anti-ragging') ?>">ANTI RAGGING CELL</a></li>
                </ul>
              </li>

              <!-- Academics Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="academicsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">ACADEMICS</a>
                <ul class="dropdown-menu" aria-labelledby="academicsDropdown">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">COURSES</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">B.Ed. (AFFILIATED TO SPPU)</a></li>
                      <li><a class="dropdown-item" href="#">SELF STUDY COURSES DIPLOMA IN SCHOOL
                          MANAGEMENT (YCMOU)</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">FEEDBACK</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">FOR STAFF</a></li>
                      <li><a class="dropdown-item" href="#">FOR STUDENTS</a></li>
                      <li><a class="dropdown-item" href="#">FOR STAKEHOLDERS</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">STUDENTS SATISFACTION SURVEY</a></li>
                  <li><a class="dropdown-item" href="#">CO’S & PO’S</a></li>
                </ul>
              </li>

              <!-- Facilities Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="facilitiesDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">FACILITIES</a>
                <ul class="dropdown-menu" aria-labelledby="facilitiesDropdown">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">LIBRARY</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?= base_url('library-nep') ?>">LIBRARY REFERENCE SECTION NEP 2020</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="<?= base_url('infrastructure') ?>">INFRASTRUCTURE</a></li>
                </ul>
              </li>

              <!-- Student Corner Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="studentCornerDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">STUDENT CORNER</a>
                <ul class="dropdown-menu" aria-labelledby="studentCornerDropdown">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">ADMISSION</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">INQUIRY FORM AND ADMISSION FORM</a></li>
                      <li><a class="dropdown-item" href="#">FEES</a></li>
                      <li><a class="dropdown-item" href="#">SCHOLARSHIP</a></li>
                      <li><a class="dropdown-item" href="#">REQUIRED DOCUMENT LIST FOR ADMISSION</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">STUDENTS ACHIEVEMENT</a></li>
                  <li><a class="dropdown-item" href="#">CBCS SYSTEM AND SYLLABUS</a></li>
                  <li><a class="dropdown-item" href="#">ACADEMIC CALENDAR</a></li>
                  <li><a class="dropdown-item" href="#">STUDY MATERIAL</a></li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">LAB</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">ICT LAB</a></li>
                      <li><a class="dropdown-item" href="#">LANGUAGE LAB</a></li>
                      <li><a class="dropdown-item" href="#">PSYCHOLOGY LAB</a></li>
                      <li><a class="dropdown-item" href="#">SCIENCE LAB</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">EXAMINATION AND RESULT</a></li>
                  <li><a class="dropdown-item" href="#">PLACEMENT DRIVE</a></li>
                  <li><a class="dropdown-item" href="#">ALUMNI</a></li>
                  <li><a class="dropdown-item" href="#">MOU’S</a></li>
                </ul>
              </li>

              <!-- News & Events Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="newsEventsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">NEWS & EVENTS</a>
                <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">CULTURAL</a></li>
                  <li><a class="dropdown-item" href="#">SPORTS</a></li>
                  <li><a class="dropdown-item" href="#">FIELD VISIT/ STUDY TOUR</a></li>
                  <li><a class="dropdown-item" href="#">ART AND CRAFT</a></li>
                  <li><a class="dropdown-item" href="#">MUSIC</a></li>
                  <li><a class="dropdown-item" href="#">RESEARCH AND PUBLICATION</a></li>
                  <li><a class="dropdown-item" href="#">INNOVATION PUBLICATIONS</a></li>
                  <li><a class="dropdown-item" href="#">EXTENSION ACTIVITIES</a></li>
                </ul>
              </li>

              <!-- NAAC Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="naacDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">NAAC</a>
                <ul class="dropdown-menu" aria-labelledby="naacDropdown">
                  <li><a class="dropdown-item" href="#">ACCREDITATION</a></li>
                  <li><a class="dropdown-item" href="#">SSR</a></li>
                  <li><a class="dropdown-item" href="#">IQAC CELL</a></li>
                  <li><a class="dropdown-item" href="#">ACADEMIC MONITORING COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('naac-documents') ?>">NAAC DOCUMENTS</a></li>
                </ul>
              </li>

              <!-- Gallery Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">GALLERY</a>
                <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                  <li><a class="dropdown-item" href="#">CULTURAL</a></li>
                  <li><a class="dropdown-item" href="#">SPORTS</a></li>
                  <li><a class="dropdown-item" href="#">FIELD VISIT/ STUDY TOUR</a></li>
                  <li><a class="dropdown-item" href="#">ART AND CRAFT</a></li>
                  <li><a class="dropdown-item" href="#">MUSIC</a></li>
                  <li><a class="dropdown-item" href="#">INNOVATION PUBLICATIONS</a></li>
                  <li><a class="dropdown-item" href="#">EXTENSION ACTIVITIES</a></li>
                </ul>
              </li>

              <!-- Contact -->
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('contact') ?>">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>