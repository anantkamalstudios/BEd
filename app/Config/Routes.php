<?php

namespace Config;

use App\Controllers\admin\Login;
use App\Controllers\admin\Admin;
use App\Controllers\admin\Addbrand;
use App\Controllers\admin\Addcarproduct;
use App\Controllers\frontend\Frontend;
use App\Controllers\frontend\Dashboard;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/', 'admin\Login::login', ['filter' => 'noauth']);

// 
// $routes->get('/forget_password', 'admin\Login::forget');
// $routes->post('send-password-reset-link', 'admin\Login::sendpasswordresetlink', ['as' => 'send-password-reset-link']);
// $routes->match(['get', 'post'], 'otpverify', 'admin\Login::otpverify');
// $routes->match(['get', 'post'], 'resetpassword/(:segment)', 'admin\Login::resetpassword/$1', ['as' => 'resetpassword']);
// $routes->match(['get', 'post'], 'updateresetpassword', 'admin\Login::updateresetpassword', ['as' => 'updateresetpassword']);
// $routes->post('/login_action', 'admin\Login::login_action');
// $routes->match(['get', 'post'], 'logout', 'admin\Login::logout');
// $routes->match(['get', 'post'], 'verify', 'admin\Login::verify', ['as' => 'verify']);


// $routes->group('', ['filter' => 'auth'], function ($routes) {
//     $routes->get('/admin', 'admin\Admin::index', ['filter' => 'auth']);
    
    
// });
// 

$routes->get('login', 'admin\Auth::login');
$routes->get('signup', 'admin\Auth::signup');
$routes->post('register', 'admin\Auth::register');
// $routes->post('login_action', 'admin\Auth::login_action');
$routes->match(['get', 'post'], 'login_action', 'admin\Auth::login_action');
$routes->match(['get', 'post'], 'logout', 'admin\Auth::logout');

$routes->get('/dashboard', 'admin\Dashboard::dashboard');



$routes->get('/dashboard', 'admin\Dashboard::dashboard');

// Frontend
$routes->get('/', 'frontend\Index::index');

//About us
$routes->get('/NGSPMS_BVCOE', 'frontend\About_us::Index');
$routes->get('/vision-mission', 'frontend\About_us::vision_mission');
$routes->get('/president', 'frontend\About_us::president');
$routes->get('/general-secretary', 'frontend\About_us::general_secretary');
$routes->get('/vice_president', 'frontend\About_us::campus_director');
$routes->get('/principal', 'frontend\About_us::principal');
$routes->get('/faculty', 'frontend\About_us::faculty');
$routes->get('/board_director', 'frontend\About_us::board_director');
$routes->get('/ncte_recognition_revise_order', 'frontend\About_us::ncte_recognition_revise_order');
$routes->get('/silent_feature', 'frontend\About_us::silent_feature');
$routes->get('/bramha_valley_edu', 'frontend\About_us::bramha_valley_edu');
$routes->get('/government_permission', 'frontend\About_us::government_permission');
$routes->get('/award_received', 'frontend\About_us::award_received');
$routes->get('/approvals_affliation', 'frontend\About_us::approvals_affliation');

// academics
$routes->get('/availabla_teaching_method', 'frontend\Academics::Index');

//GOVERNANCE
$routes->get('/internal-quality', 'frontend\Governance::Index');
$routes->get('/rti', 'frontend\Governance::rti');
$routes->get('/equal-cell', 'frontend\Governance::equal_cell');
$routes->get('/stu-dev-com', 'frontend\Governance::stu_dev_com');
$routes->get('/grievance-redressal', 'frontend\Governance::grievance_redressal');
$routes->get('/divyang-cell', 'frontend\Governance::divyang_cell');
$routes->get('/womens-cell', 'frontend\Governance::womens_cell');
$routes->get('/sc-st-cell', 'frontend\Governance::sc_st_cell');
$routes->get('/placement-cell', 'frontend\Governance::placement_cell');
$routes->get('/student-council', 'frontend\Governance::student_council');
$routes->get('/anti-ragging', 'frontend\Governance::anti_ragging');

//facilities
$routes->get('/library-nep', 'frontend\Facilities::Index');
$routes->get('/infrastructure', 'frontend\Facilities::infrastructure');
$routes->get('/library', 'frontend\Facilities::library');
$routes->get('/laboratary', 'frontend\Facilities::laboratary');
$routes->get('/gymnasium_sport', 'frontend\Facilities::gymnasium_sport');
$routes->get('/transport', 'frontend\Facilities::transport');

//media
$routes->get('/photo', 'frontend\Media::Index');
$routes->get('/vidio', 'frontend\Media::vidio');

// admission
$routes->get('/required_document', 'frontend\Admission::Index');

//naac
$routes->get('/naac-documents', 'frontend\Naac::Index');

//Contact
$routes->get('/contact', 'frontend\Contact::Index');


//back-end

// home
$routes->get('/courousel_section', 'admin\Home::Index');
$routes->get('/admission_information', 'admin\Home::admission_information');
$routes->get('/about_us', 'admin\Home::about_us');
$routes->get('/why_join_bvce', 'admin\Home::why_join_bvce');
$routes->get('/our_infrastructure', 'admin\Home::our_infrastructure');
$routes->get('/our_unique_methodologies', 'admin\Home::our_unique_methodologies');
$routes->get('/frequently_asked_questions', 'admin\Home::frequently_asked_questions');
$routes->get('/gallery', 'admin\Home::gallery');


// management

$routes->get('/President_msg', 'admin\management::President_msg');
$routes->post('Save_president', 'admin\management::Save_president');

// $routes->get('/general_secretary_msg', 'admin\management::General_secretary');
// $routes->post('Save_general_secretary', 'admin\management::Save_general_secretary');

$routes->get('/PRESIDENT_MESSAGE', 'admin\About_Us::PRESIDENT_MESSAGE');
$routes->get('/GENERAL_SECRETARY_MESSAGE', 'admin\About_Us::GENERAL_SECRETARY_MESSAGE');
$routes->get('/VICE_PRESIDENT', 'admin\About_Us::CAMPUS_DIRECTOR_MESSAGE');
$routes->get('/board_of_director', 'admin\About_Us::board_of_director');

// $routes->get('/vice_president_desk', 'admin\management::voice_president_desk');
// $routes->post('save_vice_president_desk', 'admin\management::save_voice_president_desk');

// $routes->get('/board_of_director', 'admin\management::board_of_director');
$routes->post( 'save_board_of_director', 'admin\Home::save_board_of_director');
$routes->post( 'update_board_of_director/(:num)', 'admin\Home::update_board_of_director/$1');
$routes->get(  'delete_board_of_director/(:num)', 'admin\Home::delete_board_of_director/$1');


// about us
$routes->get('/NGSPMSBVCOE', 'admin\About_Us::Index');
$routes->get('/OUR_VISION_MISSION', 'admin\About_Us::OUR_VISION_MISSION');
// $routes->get('/PRESIDENT_MESSAGE', 'admin\About_Us::PRESIDENT_MESSAGE');
// $routes->get('/GENERAL_SECRETARY_MESSAGE', 'admin\About_Us::GENERAL_SECRETARY_MESSAGE');
// $routes->get('/CAMPUS_DIRECTOR_MESSAGE', 'admin\About_Us::CAMPUS_DIRECTOR_MESSAGE');
$routes->get('/PRINCIPAL_MESSAGE', 'admin\About_Us::PRINCIPAL_MESSAGE');
$routes->get('/FACULTIES', 'admin\About_Us::FACULTIES');
$routes->get('/Available_teaching_method', 'admin\About_Us::Available_teaching_method');
$routes->post('save_teaching_method', 'admin\About_Us::save_teaching_method');
$routes->get('delete_teaching_method/(:num)', 'admin\About_Us::delete_teaching_method/$1');
$routes->post('update_teaching_method', 'admin\About_Us::update_teaching_method');


$routes->get('/Ncte_recognation', 'admin\About_Us::Ncte_recognation');
$routes->get('/CODE_OF_CONDUCT', 'admin\About_Us::CODE_OF_CONDUCT');
$routes->get('/BEST_PRACTICES', 'admin\About_Us::BEST_PRACTICES');
$routes->get('/silents_features', 'admin\About_Us::silents_features');
$routes->post('save_silents_features_hero', 'admin\About_Us::save_silents_features_hero');
$routes->get('/bramha_valley_bed_college', 'admin\About_Us::bramha_valley_bed_college');
// $routes->get('/board_of_director', 'admin\About_Us::board_of_director');

$routes->post('save_photo_board_of_member', 'admin\About_Us::save_photo_board_of_member');
$routes->post('insert_board_members', 'admin\About_Us::insert_board_members');
$routes->post('update_board_members/(:num)', 'admin\About_Us::update_board_members/$1');
$routes->post('delete_board_member/(:num)', 'admin\About_Us::delete_board_member/$1');
$routes->post('save_bramha_valley_college', 'admin\About_Us::save_bramha_valley_college');


// goverance
$routes->get('/INTERNAL_QUALITY_ASSURANCE_CELL', 'admin\Goveranance::Index');
$routes->get('/RIGHT_TO_INFORMATION', 'admin\Goveranance::RIGHT_TO_INFORMATION');
$routes->get('/EQUAL_OPPORTUNITY_CELL', 'admin\Goveranance::EQUAL_OPPORTUNITY_CELL');
$routes->get('/STUDENTS_DEVELOPMENT_COMMITTEE', 'admin\Goveranance::STUDENTS_DEVELOPMENT_COMMITTEE');
$routes->get('/GRIEVANCE_REDRESSAL_CELL', 'admin\Goveranance::GRIEVANCE_REDRESSAL_CELL');
$routes->get('/DIVYANG_CELL', 'admin\Goveranance::DIVYANG_CELL');
$routes->get('/WOMEN_CELLGRIEVANCE_CELL', 'admin\Goveranance::WOMEN_CELLGRIEVANCE_CELL');
$routes->get('/GRIEVANCE_CELL', 'admin\Goveranance::GRIEVANCE_CELL');
$routes->get('/PLACEMENT_CELL', 'admin\Goveranance::PLACEMENT_CELL');
$routes->get('/STUDENT_COUNCIL', 'admin\Goveranance::STUDENT_COUNCIL');
$routes->get('/ANTI_RAGGING_CELL', 'admin\Goveranance::ANTI_RAGGING_CELL');

// admission
$routes->get('/LIBRARY_REFERENCE', 'admin\Facility::Index');

// facility
$routes->get('/req_doc', 'admin\Admission::Index');
$routes->get('/INFRASTRUCTURES', 'admin\Facility::INFRASTRUCTURES');
$routes->get('/laboratari', 'admin\Facility::laboratari');
$routes->post('save_libraries_hero_section', 'admin\Facility::save_libraries_hero_section');
$routes->post('save_laborataries_hero_section', 'admin\Facility::save_laborataries_hero_section');
$routes->post('save_gymnasiums_sports_hero_section', 'admin\Facility::save_gymnasiums_sports_hero_section');
$routes->post('save_transports_hero_section', 'admin\Facility::save_transports_hero_section');

// Media
$routes->get('/vidioes', 'admin\Media::Index');
$routes->get('/photoes', 'admin\Media::photoes');
$routes->post('save_photo_Hero', 'admin\Media::save_photo_Hero');
$routes->post('save_image', 'admin\Media::save_image');
$routes->get('delete_photo/(:num)', 'admin\Media::delete_image/$1');
$routes->post('update_photo/(:num)', 'admin\Media::updatePhoto/$1');
$routes->post('save_vidioes_Hero', 'admin\Media::save_vidioes_Hero');
$routes->post('save_vidio', 'admin\Media::save_vidio');



//Naac
$routes->get('/NAAC_DOCUMENTS', 'admin\NAAC::Index');

// contact
$routes->get('/contacts', 'admin\Contact::Index');

//database home
$routes->post('insertHeroSection', 'admin\Home::insertHeroSection');
$routes->get('delete_hero/(:num)', 'admin\Home::deleteHeroSection/$1');
$routes->post('updateHeroSection/(:num)', 'admin\Home::updateHeroSection/$1');

$routes->post('save_admission', 'admin\Home::save_admission');
$routes->get('delete_admission/(:num)', 'admin\Home::delete_admission/$1');
$routes->post('edit_admission/(:num)', 'admin\Home::edit_admission/$1');

$routes->post('save_about', 'admin\Home::save_about');
$routes->get('delete_about/(:num)', 'admin\Home::delete_about/$1');
$routes->post('edit_about/(:num)', 'admin\Home::edit_about/$1');

$routes->post('save_join', 'admin\Home::save_join');
$routes->get('delete_join/(:num)', 'admin\Home::delete_join/$1');
$routes->post('edit_join/(:num)', 'admin\Home::edit_join/$1');

$routes->post('save_join_pdf', 'admin\Home::save_join_pdf');
$routes->post('edit_join_image/(:num)', 'admin\Home::edit_join_image/$1');
$routes->get('delete_join_image/(:num)', 'admin\Home::delete_join_image/$1');

$routes->post( 'save_infrastructure', 'admin\Home::save_infrastructure');
$routes->post( 'update_infrastructure/(:num)', 'admin\Home::update_infrastructure/$1');
$routes->get(  'delete_infrastructure/(:num)', 'admin\Home::delete_infrastructure/$1');

$routes->post( 'save_our_u_methodology', 'admin\Home::save_our_u_methodology');
$routes->post( 'update_our_u_methodology/(:num)', 'admin\Home::update_our_u_methodology/$1');
$routes->get(  'delete_our_u_methodology/(:num)', 'admin\Home::delete_our_u_methodology/$1');

$routes->post('save_ques_ans', 'admin\Home::save_ques_ans');
$routes->post('update_ques_ans/(:num)', 'admin\Home::update_ques_ans/$1');
$routes->get('delete_ques_ans/(:num)', 'admin\Home::delete_ques_ans/$1');

$routes->post('saveTestimonial', 'admin\Home::saveTestimonial');
$routes->post('updateTestimonial/(:num)', 'admin\Home::updateTestimonial/$1');
$routes->get('deleteTestimonial/(:num)', 'admin\Home::deleteTestimonial/$1');

$routes->post('save_gallery', 'admin\Home::saveGallery');
$routes->post('update_gallery/(:num)', 'admin\Home::updateGallery/$1');
$routes->get('delete_gallery/(:num)', 'admin\Home::deleteGallery/$1');

// about us
$routes->post('save_ngspms', 'admin\About_Us::saveNgspms');
$routes->post('save_about_ng', 'admin\About_Us::save_about_ng'); 
$routes->post('save_our_faculty', 'admin\About_Us::saveFaculty');         
$routes->post('update_our_faculty/(:num)', 'admin\About_Us::updateFaculty/$1'); 
$routes->get('delete_our_faculty/(:num)', 'admin\About_Us::deleteFaculty/$1');  
$routes->post('vision_mission_page', 'admin\About_Us::vision_mission_page');
$routes->post('save_president_desk', 'admin\About_Us::save_president_desk');
$routes->post('save_general_secretary_desk', 'admin\About_Us::save_general_secretary_desk');
$routes->post('save_campus_director', 'admin\About_Us::save_campus_director');
$routes->post('save_principal_desk', 'admin\About_Us::save_principal_desk');
$routes->post('save_hero_desk', 'admin\About_Us::save_hero_desk');
$routes->post('save_teaching_faculty', 'admin\About_Us::save_teaching_faculty');
$routes->post('save_non_teaching_faculty', 'admin\About_Us::save_non_teaching_faculty');
$routes->post('update_teaching_faculty', 'admin\About_Us::update_teaching_faculty');
$routes->get('delete_faculty/(:num)', 'admin\About_Us::delete_faculty/$1');
$routes->post('update_non_teaching_faculty', 'admin\About_Us::update_non_teaching_faculty');
$routes->get('delete_non_faculty/(:num)', 'admin\About_Us::delete_non_faculty/$1');
$routes->post('insert_coc', 'admin\About_Us::insert_coc');
$routes->post('update_coc/(:num)', 'admin\About_Us::update_coc/$1');
$routes->get('delete_coc/(:num)', 'admin\About_Us::delete_coc/$1');
$routes->post('save_best', 'admin\About_Us::save_best');
$routes->get('delete_best/(:num)', 'admin\About_Us::delete_best/$1');

// governance
$routes->post('save_internal_quality', 'admin\Goveranance::saveHero');
$routes->post('add_cell', 'admin\Goveranance::addCell');
$routes->get('delete_iqac_member/(:num)', 'admin\Goveranance::deleteMember/$1');
$routes->post('update_iqac_member/(:num)', 'admin\Goveranance::update_iqac_member/$1');
$routes->post('save_rigth_information', 'admin\Goveranance::save_rigth_information');
$routes->post('save_assurance_cell', 'admin\Goveranance::save_assurance_cell');
$routes->post('updateRtiMember/(:num)', 'admin\Goveranance::updateRtiMember/$1');
$routes->get('deleteRtiMember/(:num)', 'admin\Goveranance::deleteRtiMember/$1');
$routes->post('save_Pdf', 'admin\Goveranance::save_Pdf');
$routes->get('delete_Pdf/(:num)', 'admin\Goveranance::delete_Pdf/$1');
$routes->post('save_opp', 'admin\Goveranance::save_opp');
$routes->post('save_opp_cell', 'admin\Goveranance::save_opp_cell');
$routes->post('update_opp_member/(:num)', 'admin\Goveranance::update_opp_member/$1');
$routes->get('delete_opp_member/(:num)', 'admin\Goveranance::delete_opp_member/$1');
$routes->post('save_opp_pdf', 'admin\Goveranance::save_opp_pdf');
$routes->get('delete_opp_pdf/(:num)', 'admin\Goveranance::delete_opp_pdf/$1');
$routes->post('update_opp_pdf/(:num)', 'admin\Goveranance::update_opp_pdf/$1');
$routes->post('save_hero_stu_comm', 'admin\Goveranance::save_hero_stu_comm');
$routes->post('save_faculty_stu_comm', 'admin\Goveranance::save_faculty_stu_comm');
$routes->post('update_faculty_stu_comm/(:num)', 'admin\Goveranance::update_faculty_stu_comm/$1');
$routes->get('delete_faculty_stu_comm/(:num)', 'admin\Goveranance::delete_faculty_stu_comm/$1');
$routes->post('savePdf', 'admin\Goveranance::savePdf');
$routes->post('update_pdf_stu_comm/(:num)', 'admin\Goveranance::updatePdf/$1');
$routes->get('delete_pdf_stu_comm/(:num)', 'admin\Goveranance::deletePdf/$1');
$routes->post('save_home_grievance_desk', 'admin\Goveranance::save_home_grievance_desk');
$routes->post('save_grievance_desk', 'admin\Goveranance::saveMember');
$routes->post('update_grievance_member/(:num)', 'admin\Goveranance::updateMember/$1');
$routes->get('delete_grievance_member/(:num)', 'admin\Goveranance::deleteMember/$1');
$routes->post('save_goverance_Pdf', 'admin\Goveranance::save_goverance_Pdf');
$routes->post('updategoverancePdf/(:num)', 'admin\Goveranance::updategoverancePdf/$1');
$routes->get('deletegoverancePdf/(:num)', 'admin\Goveranance::deletegoverancePdf/$1');
$routes->post('update_Member/(:num)', 'admin\Goveranance::update_Member/$1');
$routes->get('delete_Member/(:num)', 'admin\Goveranance::delete_Member/$1');
$routes->post('save_hero_divyang_cell', 'admin\Goveranance::save_hero_divyang_cell');
$routes->post('save_divyang_Member', 'admin\Goveranance::save_divyang_Member');
$routes->post('update_divyang_member/(:num)', 'admin\Goveranance::update_divyang_member/$1');
$routes->get('delete_divyang_member/(:num)', 'admin\Goveranance::delete_divyang_member/$1');
$routes->post('save_pdf_divyang_cell', 'admin\Goveranance::save_pdf_divyang_cell');
$routes->post('updateDivyangCellPdf/(:num)', 'admin\Goveranance::updateDivyangCellPdf/$1');
$routes->get('deleteDivyangCellPdf/(:num)', 'admin\Goveranance::deleteDivyangCellPdf/$1');
$routes->post('save_women_Hero', 'admin\Goveranance::save_women_Hero');
$routes->post('saveWomenCellMember', 'admin\Goveranance::saveWomenCellMember');
$routes->get('deleteWomenCellMember/(:num)', 'admin\Goveranance::deleteWomenCellMember/$1');
$routes->post('updateWomenCellMember/(:num)', 'admin\Goveranance::updateWomenCellMember/$1');
$routes->post('saveWomenCellPdf', 'admin\Goveranance::saveWomenCellPdf');
$routes->post('updateWomenCellPdf/(:num)', 'admin\Goveranance::updateWomenCellPdf/$1');
$routes->get('deleteWomenCellPdf/(:num)', 'admin\Goveranance::deleteWomenCellPdf/$1');
$routes->post('save_hero_grievance_cell_desk', 'admin\Goveranance::save_hero_grievance_cell_desk');
$routes->post('savegrievancecellMember', 'admin\Goveranance::savegrievancecellMember');
$routes->post('updategrievancecellMember/(:num)', 'admin\Goveranance::updategrievancecellMember/$1');
$routes->get('deletegrievancecellMember/(:num)', 'admin\Goveranance::deletegrievancecellMember/$1');
$routes->post('savegrievancecellPdf', 'admin\Goveranance::savegrievancecellPdf');
$routes->post('update_pdf_grievance_cell_desk/(:num)', 'admin\Goveranance::update_pdf_grievance_cell_desk/$1');
$routes->get('delete_pdf_grievance_cell_desk/(:num)', 'admin\Goveranance::delete_pdf_grievance_cell_desk/$1');
$routes->post('save_placement_hero', 'admin\Goveranance::save_placement_hero');
$routes->post('save_placement_member', 'admin\Goveranance::save_placement_member');
$routes->post('updateplacementMember/(:num)', 'admin\Goveranance::updateplacementMember/$1');
$routes->get('deleteplacementMember/(:num)', 'admin\Goveranance::deleteplacementMember/$1');
$routes->post('placement_pdf_save', 'admin\Goveranance::placement_pdf_save');
$routes->post('update_placement_pdf/(:num)', 'admin\Goveranance::update_placement_pdf/$1');
$routes->get('delete_placement_pdf/(:num)', 'admin\Goveranance::delete_placement_pdf/$1');
$routes->post('save_hero_stu_council', 'admin\Goveranance::save_hero_stu_council');
$routes->post('save_stu_council', 'admin\Goveranance::save_stu_council');
$routes->post('delete_stu_council/(:num)', 'admin\Goveranance::delete_stu_council/$1');
$routes->post('update_stu_council/(:num)', 'admin\Goveranance::update_stu_council/$1');
$routes->post('save_pdf_stu_council', 'admin\Goveranance::save_pdf_stu_council');
$routes->post('update_stu_Pdf/(:num)', 'admin\Goveranance::update_stu_Pdf/$1');
$routes->get('delete_stu_Pdf/(:num)', 'admin\Goveranance::delete_stu_Pdf/$1');
$routes->post('save_hero_anti', 'admin\Goveranance::save_hero_anti');
$routes->post('save_anti_ragging', 'admin\Goveranance::save_anti_ragging');
$routes->post('update_anti_ragging_member', 'admin\Goveranance::update_anti_ragging_member');
$routes->get('delete_anti_ragging_member/(:num)', 'admin\Goveranance::delete_anti_ragging_member/$1');
$routes->post('save_anti_pdf', 'admin\Goveranance::save_anti_pdf');
$routes->post('delete_anti_pdf/(:num)', 'admin\Goveranance::delete_anti_pdf/$1');
$routes->post('update_anti_pdf', 'admin\Goveranance::update_anti_pdf');

// library
$routes->post('save_hero_library', 'admin\Facility::save_hero_library');
$routes->post('save_library', 'admin\Facility::save_library');
$routes->post('delete_pdf/(:num)', 'admin\Facility::delete_pdf/$1');
$routes->post('update_library_pdf', 'admin\Facility::update_library_pdf');
$routes->post('save_hero_infrestructure', 'admin\Facility::save_hero_infrestructure');
$routes->post('save_infra', 'admin\Facility::save_infra');
$routes->post('update_infra/(:num)', 'admin\Facility::update_infra/$1');
$routes->get('delete_infra/(:num)', 'admin\Facility::delete_infra/$1');
$routes->get('librari', 'admin\Facility::librari');
$routes->get('transports', 'admin\Facility::transports');
$routes->get('gymnasiums_sports', 'admin\Facility::gymnasiums_sports');

// naac
$routes->post('save_hero_naac', 'admin\NAAC::save_hero_naac');
$routes->post('save_naac', 'admin\NAAC::save_naac');
$routes->get('delete_naac_pdf/(:num)', 'admin\NAAC::delete_naac_pdf/$1');

//backend contact us
$routes->post('save_con_Hero', 'admin\Contact::save_con_Hero');
$routes->post('saveContact', 'admin\Contact::saveContact');
$routes->get('contact/delete/(:num)', 'admin\Contact::deleteContact/$1');
$routes->post('contact/update/(:num)', 'admin\Contact::updateContact/$1');

// Admission
$routes->post('save_hero_req_doc', 'admin\Admission::save_hero_req_doc');
// $routes->post('insert_docuent', 'admin\Admission::insert_docuent');
// $routes->get('delete_document/(:num)', 'admin\Admission::delete_document/$1');

$routes->get('admin/required-documents', 'admin\Admission::index');
$routes->post('save_document', 'admin\Admission::save');
$routes->post('update_document', 'admin\Admission::update');
$routes->get('delete_document/(:num)', 'admin\Admission::delete/$1');


$routes->match(['get', 'post'], 'admin/ncte_organization_page', 'admin\NcteOrganizationController::index');



$routes->get('/Governmentpermission', 'admin\about_us::Government_permission');
$routes->post('save_governmentpermission', 'admin\About_Us::save_governmentpermission');



// $routes->get('/Award_recive', 'admin\about_us::award_recived');
// $routes->post('save_award', 'admin\About_Us::Save_award');
// $routes->get('/Available_teaching_method', 'admin\About_Us::Available_teaching_method');
$routes->get('/Award_recive', 'admin\About_Us::Award_recived');
$routes->post('save_award', 'admin\About_Us::save_award');
$routes->get('delete_award/(:num)', 'admin\About_Us::delete_award/$1');
$routes->post('update_award', 'admin\About_Us::update_award');

$routes->get('/approvalsaffliation', 'admin\about_us::approvals_affliation');
$routes->post('save_approvals_affliation', 'admin\About_Us::save_approvals_affliation');


































