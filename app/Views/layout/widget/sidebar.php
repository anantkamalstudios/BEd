<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="<?= base_url() ?>public/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Home</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                 <a href="<?= base_url('courousel_section') ?>">
                                    <span class="sub-item">Carousel Section</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admission_information') ?>">
                                    <span class="sub-item">Admission Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('about_us') ?>">
                                    <span class="sub-item">About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('why_join_bvce') ?>">
                                    <span class="sub-item">Why Join BVCE (B.Ed)</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('our_infrastructure') ?>">
                                    <span class="sub-item">Our Infrastructure</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('frequently_asked_questions') ?>">
                                    <span class="sub-item">Frequently Asked Questions</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('gallery') ?>">
                                    <span class="sub-item">Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>About Us</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('NGSPMSBVCOE') ?>">
                                    <span class="sub-item">NGSPM’S BVCOE (B.Ed.)</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('OUR_VISION_MISSION') ?>">
                                    <span class="sub-item">OUR VISION AND MISSION</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('PRESIDENT_MESSAGE') ?>">
                                    <span class="sub-item">PRESIDENT MESSAGE</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('GENERAL_SECRETARY_MESSAGE') ?>">
                                    <span class="sub-item">GENERAL SECRETARY MESSAGE</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('CAMPUS_DIRECTOR_MESSAGE') ?>">
                                    <span class="sub-item">CAMPUS DIRECTOR MESSAGE</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('PRINCIPAL_MESSAGE') ?>">
                                    <span class="sub-item">PRINCIPAL MESSAGE</span>
                                </a>
                            </li>
                             <li>
                                <a href="<?= base_url('FACULTIES') ?>">
                                    <span class="sub-item">FACULTY</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('CODE_OF_CONDUCT') ?>">
                                    <span class="sub-item">CODE OF CONDUCT</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">INSTITUTIONAL DISTINCTIVENESS</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('BEST_PRACTICES') ?>">
                                    <span class="sub-item">BEST PRACTICES</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">INSTITUTIONAL VALUES AND SOCIAL RESPONSIBILITY</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">GOALS AND OBJECTIVES</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">FEES REGULATING AUTHORITY</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>GOVERNANCE</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">LOCAL DEVELOPMENT COMMITTEE</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('INTERNAL_QUALITY_ASSURANCE_CELL') ?>">
                                    <span class="sub-item">INTERNAL QUALITY ASSURANCE CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('RIGHT_TO_INFORMATION') ?>">
                                    <span class="sub-item">RIGHT TO INFORMATION</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('EQUAL_OPPORTUNITY_CELL') ?>">
                                    <span class="sub-item">EQUAL OPPORTUNITY CELL</span>
                                </a>
                            </li>
                             <li>
                                <a href="<?= base_url('STUDENTS_DEVELOPMENT_COMMITTEE') ?>">
                                    <span class="sub-item">STUDENTS DEVELOPMENT COMMITTEE</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('GRIEVANCE_REDRESSAL_CELL') ?>">
                                    <span class="sub-item">GRIEVANCE REDRESSAL CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('DIVYANG_CELL') ?>">
                                    <span class="sub-item">DIVYANG CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('WOMEN_CELLGRIEVANCE_CELL') ?>">
                                    <span class="sub-item">VISHAKHA / WOMEN / ANTI SEXUAL HARASSMENT CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('GRIEVANCE_CELL') ?>">
                                    <span class="sub-item">SC/ST GRIEVANCE CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('PLACEMENT_CELL') ?>">
                                    <span class="sub-item">PLACEMENT CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('STUDENT_COUNCIL') ?>">
                                    <span class="sub-item">STUDENT COUNCIL</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('ANTI_RAGGING_CELL') ?>">
                                    <span class="sub-item">ANTI RAGGING CELL</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>ACADEMICS</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">COURSES</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">B.Ed. (AFFILIATED TO SPPU)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">SELF STUDY COURSES DIPLOMA IN SCHOOL MANAGEMENT (YCMOU)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">FEEDBACK</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">FOR STAFF</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">FOR STUDENTS</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">FOR STAKEHOLDERS</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">STUDENTS SATISFACTION SURVEY</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">CO’S & PO’S</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenus">
                        <i class="fas fa-bars"></i>
                        <p>FACILITIES</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenus">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">LIBRARY</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="<?= base_url('LIBRARY_REFERENCE') ?>">
                                                <span class="sub-item">LIBRARY REFERENCE SECTION NEP 2020</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="<?= base_url('INFRASTRUCTURES') ?>">
                                    <span class="sub-item">INFRASTRUCTURE</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenues">
                        <i class="fas fa-bars"></i>
                        <p>STUDENT CORNER</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenues">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">ADMISSION</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">INQUIRY FORM AND ADMISSION FORM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">FEES</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">SCHOLARSHIP</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">REQUIRED DOCUMENT LIST FOR ADMISSION</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">STUDENTS ACHIEVEMENT</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">CBCS SYSTEM AND SYLLABUS</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">ACADEMIC CALENDAR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">STUDY MATERIAL</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">LAB</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">ICT LAB</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">LANGUAGE LAB</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">PSYCHOLOGY LAB</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">SCIENCE LAB</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">EXAMINATION AND RESULT</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">PLACEMENT DRIVE</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">ALUMNI</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">MOU’S</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>NEWS & EVENTS</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">CULTURAL</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">SPORTS</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">FIELD VISIT/ STUDY TOUR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">ART AND CRAFT</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">MUSIC</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">RESEARCH AND PUBLICATION</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">INNOVATION PUBLICATIONS</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">EXTENSION ACTIVITIES</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>NAAC</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">ACCREDITATION</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">SSR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">IQAC CELL</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">ACADEMIC MONITORING COMMITTEE</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('NAAC_DOCUMENTS') ?>">
                                    <span class="sub-item">NAAC DOCUMENTS</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#chartes">
                        <i class="far fa-chart-bar"></i>
                        <p>GALLERY</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="chartes">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">CULTURAL</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">SPORTS</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">FIELD VISIT/ STUDY TOUR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">ART AND CRAFT</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">MUSIC</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">INNOVATION PUBLICATIONS</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">EXTENSION ACTIVITIES</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('contacts') ?>">
                        <i class="fas fa-desktop"></i>
                        <p>CONTACT</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>