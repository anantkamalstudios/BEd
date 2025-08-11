<style>
.navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl {
    display: flex
;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
    margin-left: 80px;
}


</style>
  <div class="container-fluid py-1" style="background-color: #ea1f28;">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center text-white gap-2 px-3">
      <ul class="list-inline mb-0 d-flex flex-wrap gap-2 text-white">
        <li class="list-inline-item"><a class="text-white text-decoration-none small" target="_blank" href="<?= base_url('public/front_end/pdf/file-sample.pdf') ?>">Download
            E-Brochures</a>
        </li>
        <li class="list-inline-item"><a class="text-white text-decoration-none small" href="apply-now">Admission</a>
        </li>
        <!--<li class="list-inline-item"><a class="text-white text-decoration-none small" href="#" target="_blank">Blogs</a>-->
        <!--</li>-->
        <!--<li class="list-inline-item"><a class="text-white text-decoration-none small" href="#"-->
        <!--    target="_blank">Consultancy Cell</a></li>-->
      </ul>
      <ul class="list-inline mb-0 d-flex align-items-center gap-2">
        <li><a class="text-white text-decoration-none small" href="#">Get Connected</a></li>
        <li class="ms-2"><a class="text-white" href="#" target="_blank" aria-label="WhatsApp"><img
              src="<?= base_url() ?>public/front_end/img/wt.png" alt="WhatsApp" width="20" height="20"></a></li>
        <li class="ms-2"><a class="text-white" href="#" target="_blank" aria-label="360"><img
              src="<?= base_url() ?>public/front_end/img/360.png" alt="360" width="20" height="20"></a></li>
        <li class="ms-2"><a class="text-white" href="#" target="_blank"><img src="<?= base_url() ?>public/front_end/img/fb.png" alt="Facebook"
              width="20" height="20"></a></li>
        <li class="ms-2"><a class="text-white" href="https://in.linkedin.com/" target="_blank"><img
              src="<?= base_url() ?>public/front_end/img/id.png" alt="LinkedIn" width="20" height="20"></a></li>
        <li class="ms-2"><a class="text-white" href="https://www.youtube.com/" target="_blank"><img
              src="<?= base_url() ?>public/front_end/img/yt.png" alt="YouTube" width="20" height="20"></a></li>
      </ul>
    </div>
  </div>
  <!-- Institute Info Banner -->
  <div class="bg-gradient text-white py-3 border-bottom" style="background-color: #003366;">
    <div class="container text-center">
      <h6 class="text-uppercase fw-bold mb-1 text-white" style="letter-spacing: 1px;">
        NASHIK GRAMIN SHIKSHAN PRASARAK MANDAL’s
      </h6>
     <h4 class="fw-bold mb-2 text-white" style="font-size: 1.5rem;">
       BRAHMA VALLEY COLLEGE OF EDUCATION (B.Ed.)
      </h4>
      <p class="mb-0 small">
        <strong>Id. No PU/NS/B.ED/104/2007</strong>
      </p>
    </div>
  </div>

 
  <header class="header_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
      <div class="container">
  
        <a class="navbar-brand d-lg-block" href="<?= base_url('/') ?>">
          <img src="<?= base_url() ?>public/front_end/img/logo.png" alt="College Logo" height="80">
        </a>

       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

     
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!-- <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">HOME</a>
            </li>

           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" data-bs-toggle="dropdown"
                      aria-expanded="false">MANAGEMENT</a>
                    <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                      <li><a class="dropdown-item" href="president">PRESIDENT MESSAGE</a></li>
                      <li><a class="dropdown-item" href="general-secretary">GENERAL SECRETARY MESSAGE</a></li>
                      <li><a class="dropdown-item" href="campus-director">VICE PRESSISENT DESK</a></li>
                      <li><a class="dropdown-item" href="board_director">Board OF Director</a></li>
                    </ul>
                </li>

           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">ABOUT US</a>
                    <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                        <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/organamism.pdf') ?>">ORGANOGRAM</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('bramha_valley_edu') ?>">BRAHMA VALLEY OF EDUCATION(BED)</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('principal') ?>">PRINCIPAL MESSAGE</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('vision-mission') ?>">VISION & MISSION</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('silent_feature') ?>">SILENT FEATURES</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('faculty') ?>">FACULTY</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('#') ?>">COMMITTEES</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('ncte_recognition_revise_order') ?>">NCTE RECOGNITTON & REVISE ORDER</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('government_permission') ?>">GOVERNMENT PERMISSION</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('award_received') ?>">AWARD RECEIVED</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('approvals_affliation') ?>">APPROVALS & AFFILIATION</a></li>
                    </ul>
                </li>

            
             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="governanceDropdown" data-bs-toggle="dropdown"
                      aria-expanded="false">GOVERNANCE</a>
                    <ul class="dropdown-menu" aria-labelledby="governanceDropdown">
                      <li><a class="dropdown-item" href="#">LOCAL DEVELOPMENT COMMITTEE</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('internal-quality') ?>">INTERNAL QUALITY ASSURANCE CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('rti') ?>">RIGHT TO INFORMATION</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('equal-cell') ?>">EQUAL OPPORTUNITY CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('stu-dev-com') ?>">COLLEGE DEVELOPMENT COMMITTEE</a></li>
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

             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="academicsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ACADEMICS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="academicsDropdown">
                      
                        <li class="dropdown-submenu position-relative">
                        <a class="dropdown-item dropdown-toggle" href="#">BED COURSES</a>
                        <ul class="dropdown-menu">
                
                            
                            <li class="dropdown-submenu position-relative">
                              <a class="dropdown-item dropdown-toggle" href="#">ANNUAL PLAN</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">First Year (FY)</a></li>
                                <li><a class="dropdown-item" href="#">Second Year (SY)</a></li>
                              </ul>
                            </li>
                
                            <li class="dropdown-submenu position-relative">
                              <a class="dropdown-item dropdown-toggle" href="#">FEEDBACK</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">STUDENT FEEDBACK</a></li>
                                <li><a class="dropdown-item" href="#">INTERNSHIP FEEDBACK</a></li>
                                <li><a class="dropdown-item" href="#">TEACHER FEEDBACK</a></li>
                              </ul>
                            </li>
                        </ul>
                      </li>

                    <li><a class="dropdown-item" href="availabla_teaching_method">AVAILABLE TEACHING METHOD</a></li>
                     <li class="dropdown-submenu position-relative">
                          <a class="dropdown-item dropdown-toggle" href="#">SYLLABUS</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PLO & CLO</a></li>
                          </ul>
                      </li>
                    <li><a class="dropdown-item" href="#">STUDENT ELIGIBILITY</a></li>
                     <li class="dropdown-submenu position-relative">
                          <a class="dropdown-item dropdown-toggle" href="#">LESSON DEPARTMENT</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">LIST OF SCHOOL</a></li>
                             <li><a class="dropdown-item" href="#">FY</a></li>
                              <li><a class="dropdown-item" href="#">SY</a></li>
                          </ul>
                        </li>
                         <li><a class="dropdown-item" href="#">BED CET INTER-SC-MERIT</a></li>
                          <li><a class="dropdown-item" href="#">ROUND MERIT LIST</a></li>
                
                  </ul>
                </li>
                
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="newsEventsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">ADMISSION</a>
                <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">COURSE DETAILS & ELIGIBILITY</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Admission Form.pdf') ?>">ADMISSION FORM</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Central State Gov Reservation policy 1.3 (1).pdf') ?>">RESERVATION POLICY</a></li>
                  <li><a class="dropdown-item" href="#">FEES STRUCTURE</a></li>
                   <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/List of Scholarship Schemes.pdf') ?>">SCOLARSHIP</a></li>
                   <li><a class="dropdown-item" href="required_document">REQUIRED DOCUMENT</a></li>
                   <li><a class="dropdown-item" href="#">I-CARD FORM</a></li>
                   <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/ENQUIRY FORM.pdf') ?>">ENQUIRY FORM</a></li>
                </ul>
              </li>

           
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="facilitiesDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">FACILITIES</a>
                <ul class="dropdown-menu" aria-labelledby="facilitiesDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('infrastructure') ?>">INFRASTRUCTURE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('library') ?>">LIBRARY</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('laboratary') ?>">LABORATARY</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('gymnasium_sport') ?>">GYMNASIUM & SPORT</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('transport') ?>">TRANSPORT</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">AUDIO & VIDEO</a></li>
                </ul>
              </li>

             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="studentCornerDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">STUDENT CORNER</a>
                <ul class="dropdown-menu" aria-labelledby="studentCornerDropdown">
                  <li><a class="dropdown-item" href="#">STUDENTS ACHIEVEMENT</a></li>
                  <li><a class="dropdown-item" href="#">STUDY MATERIAL</a></li>
                  <li><a class="dropdown-item" href="#">MOU’S</a></li>
                </ul>
              </li>
              
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">EXAMINATION</a>
                <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">EXAM TIME TABLE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">EXAMINATION OFFICER</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">RESULT</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Academic Calenders year2025-26 (1).pdf') ?>">ACADEMIC CALENDER</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">ACHIEVEMENT</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Evaluation_Examination_Policy_of_B_Ed.pdf') ?>">EXAMINATION POLICY</a></li>
                   <li><a class="dropdown-item" href="<?= base_url('#') ?>">UNIVERSITY LINKS</a></li>
                </ul>
              </li>

            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="newsEventsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">TRAINING & PLACEMENT</a>
                <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">CULTURAL</a></li>
                  <li><a class="dropdown-item" href="#">SPORTS</a></li>
                  <li><a class="dropdown-item" href="#">FIELD VISIT/ STUDY TOUR</a></li>
                  <li><a class="dropdown-item" href="#">ART AND CRAFT</a></li>
                  <li><a class="dropdown-item" href="#">MUSIC</a></li>
                  <li><a class="dropdown-item" href="#">RESEARCH AND PUBLICATION</a></li>
                  <li><a class="dropdown-item" href="#">INNOVATION PUBLICATIONS</a></li>
                  <li><a class="dropdown-item" href="#">EXTENSION ACTIVITIES</a></li>
                  <li><a class="dropdown-item" href="#">SUCCESS STORIES</a></li>
                  <li><a class="dropdown-item" href="#">PLACEMENT CELL</a></li>
                </ul>
              </li>
              
          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="newsEventsDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">ALUMNI</a>
                <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">REGISTRATION FORM</a></li>
                  <li><a class="dropdown-item" href="#">COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="#">CERTIFICATE</a></li>
                  <li><a class="dropdown-item" href="#">ACHIEVEMENT</a></li>
                </ul>
              </li>

             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="naacDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">IQAC</a>
                <ul class="dropdown-menu" aria-labelledby="naacDropdown">
                  <li><a class="dropdown-item" href="#">ACCREDITATION</a></li>
                  <li><a class="dropdown-item" href="#">SSR</a></li>
                  <li><a class="dropdown-item" href="#">IQAC CELL</a></li>
                  <li><a class="dropdown-item" href="#">ACADEMIC MONITORING COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('naac-documents') ?>">NAAC DOCUMENTS</a></li>
                </ul>
              </li>

          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="naacDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">MEDIA</a>
                <ul class="dropdown-menu" aria-labelledby="naacDropdown">
                  <li><a class="dropdown-item" href="photo">PHOTO</a></li>
                  <li><a class="dropdown-item" href="vidio">VIDIO</a></li>
                </ul>
              </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contact') ?>">CONTACT</a>
          </li>
          </ul> -->

          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
  <!-- Show first 8 menu items directly -->
  <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">HOME</a></li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">MANAGEMENT</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="president">PRESIDENT MESSAGE</a></li>
      <li><a class="dropdown-item" href="general-secretary">GENERAL SECRETARY MESSAGE</a></li>
      <li><a class="dropdown-item" href="vice_president">VICE PRESIDENT DESK</a></li>
      <!-- <li><a class="dropdown-item" href="board_director">Board OF Director</a></li> -->
      <li><a class="dropdown-item" href="board_director">BOARD OF DIRECTOR</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">ABOUT US</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/organamism.pdf') ?>">ORGANOGRAM</a></li>
      <li><a class="dropdown-item" href="<?= base_url('bramha_valley_edu') ?>">BRAHMA VALLEY OF EDUCATION(BED)</a></li>
      <li><a class="dropdown-item" href="<?= base_url('principal') ?>">PRINCIPAL MESSAGE</a></li>
      <!-- Truncated for brevity -->
       <li><a class="dropdown-item" href="<?= base_url('vision-mission') ?>">VISION & MISSION</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('silent_feature') ?>">SILENT FEATURES</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('faculty') ?>">FACULTY</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('#') ?>">COMMITTEES</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('ncte_recognition_revise_order') ?>">NCTE RECOGNITTON & REVISE ORDER</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('government_permission') ?>">GOVERNMENT PERMISSION</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('award_received') ?>">AWARD RECEIVED</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('approvals_affliation') ?>">APPROVALS & AFFILIATION</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">GOVERNANCE</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">LOCAL DEVELOPMENT COMMITTEE</a></li>
      <li><a class="dropdown-item" href="<?= base_url('internal-quality') ?>">INTERNAL QUALITY ASSURANCE CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('rti') ?>">RIGHT TO INFORMATION</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('equal-cell') ?>">EQUAL OPPORTUNITY CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('stu-dev-com') ?>">COLLEGE DEVELOPMENT COMMITTEE</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('grievance-redressal') ?>">GRIEVANCE REDRESSAL CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('divyang-cell') ?>">DIVYANG CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('womens-cell') ?>">VISHAKHA / WOMEN / ANTI SEXUAL HARASSMENT
                          CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('sc-st-cell') ?>">SC/ST GRIEVANCE CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('placement-cell') ?>">PLACEMENT CELL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('student-council') ?>">STUDENT COUNCIL</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('anti-ragging') ?>">ANTI RAGGING CELL</a></li>
      <!-- More items... -->
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">ACADEMICS</a>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu position-relative">
        <a class="dropdown-item dropdown-toggle" href="#">BED COURSES</a>
                             <ul class="dropdown-menu">
                
                            
                            <li class="dropdown-submenu position-relative">
                              <a class="dropdown-item dropdown-toggle" href="#">ANNUAL PLAN</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">First Year (FY)</a></li>
                                <li><a class="dropdown-item" href="#">Second Year (SY)</a></li>
                              </ul>
                            </li>
                
                            <li class="dropdown-submenu position-relative">
                              <a class="dropdown-item dropdown-toggle" href="#">FEEDBACK</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">STUDENT FEEDBACK</a></li>
                                <li><a class="dropdown-item" href="#">INTERNSHIP FEEDBACK</a></li>
                                <li><a class="dropdown-item" href="#">TEACHER FEEDBACK</a></li>
                              </ul>
                            </li>
                        </ul>
          </li>
                          <li><a class="dropdown-item" href="availabla_teaching_method">AVAILABLE TEACHING METHOD</a></li>
                                               <li class="dropdown-submenu position-relative">
                          <a class="dropdown-item dropdown-toggle" href="#">SYLLABUS</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PLO & CLO</a></li>
                          </ul>
                      </li>

                      <li><a class="dropdown-item" href="#">STUDENT ELIGIBILITY</a></li>
                     <li class="dropdown-submenu position-relative">
                          <a class="dropdown-item dropdown-toggle" href="#">LESSON DEPARTMENT</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">LIST OF SCHOOL</a></li>
                             <li><a class="dropdown-item" href="#">FY</a></li>
                              <li><a class="dropdown-item" href="#">SY</a></li>
                          </ul>
                        </li>
                         <li><a class="dropdown-item" href="#">BED CET INTER-SC-MERIT</a></li>
                          <li><a class="dropdown-item" href="#">ROUND MERIT LIST</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">ADMISSION</a>
<ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">COURSE DETAILS & ELIGIBILITY</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Admission Form.pdf') ?>">ADMISSION FORM</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Central State Gov Reservation policy 1.3 (1).pdf') ?>">RESERVATION POLICY</a></li>
                  <li><a class="dropdown-item" href="#">FEES STRUCTURE</a></li>
                   <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/List of Scholarship Schemes.pdf') ?>">SCOLARSHIP</a></li>
                   <li><a class="dropdown-item" href="required_document">REQUIRED DOCUMENT</a></li>
                   <li><a class="dropdown-item" href="#">I-CARD FORM</a></li>
                   <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/ENQUIRY FORM.pdf') ?>">ENQUIRY FORM</a></li>
                </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">FACILITIES</a>
                <ul class="dropdown-menu" aria-labelledby="facilitiesDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('infrastructure') ?>">INFRASTRUCTURE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('library') ?>">LIBRARY</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('laboratary') ?>">LABORATARY</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('gymnasium_sport') ?>">GYMNASIUM & SPORT</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('transport') ?>">TRANSPORT</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">AUDIO & VIDEO</a></li>
                </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">STUDENT CORNER</a>
                <ul class="dropdown-menu" aria-labelledby="studentCornerDropdown">
                  <li><a class="dropdown-item" href="#">STUDENTS ACHIEVEMENT</a></li>
                  <li><a class="dropdown-item" href="#">STUDY MATERIAL</a></li>
                  <li><a class="dropdown-item" href="#">MOU’S</a></li>
                </ul>
  </li>

  <!-- MORE Dropdown -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">MORE</a>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu position-relative">
        <a class="dropdown-item dropdown-toggle" href="#">EXAMINATION</a>
                  <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">EXAM TIME TABLE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">EXAMINATION OFFICER</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">RESULT</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Academic Calenders year2025-26 (1).pdf') ?>">ACADEMIC CALENDER</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('#') ?>">ACHIEVEMENT</a></li>
                  <li><a class="dropdown-item" target="_blank" href="<?= base_url('public/front_end/pdf/Evaluation_Examination_Policy_of_B_Ed.pdf') ?>">EXAMINATION POLICY</a></li>
                   <li><a class="dropdown-item" href="<?= base_url('#') ?>">UNIVERSITY LINKS</a></li>
                </ul>
      </li>

      <li class="dropdown-submenu position-relative">
        <a class="dropdown-item dropdown-toggle" href="#">TRAINING & PLACEMENT</a>
                   <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">CULTURAL</a></li>
                  <li><a class="dropdown-item" href="#">SPORTS</a></li>
                  <li><a class="dropdown-item" href="#">FIELD VISIT/ STUDY TOUR</a></li>
                  <li><a class="dropdown-item" href="#">ART AND CRAFT</a></li>
                  <li><a class="dropdown-item" href="#">MUSIC</a></li>
                  <li><a class="dropdown-item" href="#">RESEARCH AND PUBLICATION</a></li>
                  <li><a class="dropdown-item" href="#">INNOVATION PUBLICATIONS</a></li>
                  <li><a class="dropdown-item" href="#">EXTENSION ACTIVITIES</a></li>
                  <li><a class="dropdown-item" href="#">SUCCESS STORIES</a></li>
                  <li><a class="dropdown-item" href="#">PLACEMENT CELL</a></li>
                </ul>
      </li>

      <li class="dropdown-submenu position-relative">
        <a class="dropdown-item dropdown-toggle" href="#">ALUMNI</a>
                <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                  <li><a class="dropdown-item" href="#">REGISTRATION FORM</a></li>
                  <li><a class="dropdown-item" href="#">COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="#">CERTIFICATE</a></li>
                  <li><a class="dropdown-item" href="#">ACHIEVEMENT</a></li>
                </ul>
      </li>

      <li class="dropdown-submenu position-relative">
        <a class="dropdown-item dropdown-toggle" href="#">IQAC</a>
                <ul class="dropdown-menu" aria-labelledby="naacDropdown">
                  <li><a class="dropdown-item" href="#">ACCREDITATION</a></li>
                  <li><a class="dropdown-item" href="#">SSR</a></li>
                  <li><a class="dropdown-item" href="#">IQAC CELL</a></li>
                  <li><a class="dropdown-item" href="#">ACADEMIC MONITORING COMMITTEE</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('naac-documents') ?>">NAAC DOCUMENTS</a></li>
                </ul>
      </li>

      <li class="dropdown-submenu position-relative">
        <a class="dropdown-item dropdown-toggle" href="#">MEDIA</a>
                <ul class="dropdown-menu" aria-labelledby="naacDropdown">
                  <li><a class="dropdown-item" href="photo">PHOTO</a></li>
                  <li><a class="dropdown-item" href="vidio">VIDEO</a></li>
                </ul>
      </li>

      <li><a class="dropdown-item" href="<?= base_url('contact') ?>">CONTACT</a></li>
    </ul>
  </li>
</ul>

        </div>

        <!-- Right Logo -->
        <a class="navbar-brand d-none d-lg-block" href="<?= base_url('/') ?>">
         <img src="<?= base_url() ?>public/front_end/img/brahma valley logo B.ed.png" alt="Bed Logo" height="120">
        </a>
      </div>
    </nav>
  </header>