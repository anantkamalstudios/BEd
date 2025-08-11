<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS (load first) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap 5 JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/flaticon.css" />
<link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/themify-icons.css" />
<link rel="stylesheet" href="<?= base_url() ?>public/front_end/vendors/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?= base_url() ?>public/front_end/vendors/nice-select/css/nice-select.css" />

<!-- Your custom main CSS (load after Bootstrap and vendors) -->
<link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/style.css" />

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .dropdown-submenu .dropdown-menu {
    top: 0;
    right: 100% !important;
    left: -100% !important;
    margin-top: -1px;
}
  </style>
</head>
<body class="index-page">
    <!--================ Header Menu Area =================-->
 <?= $this->include("layout/widget_frontend/header.php") ?>
  <!--================ End Header Menu Area =================-->

                <?= $this->renderSection('content') ?>
               
  <?= $this->include("layout/widget_frontend/footer.php") ?>
