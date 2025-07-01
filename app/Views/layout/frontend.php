<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="<?= base_url() ?>public/front_end/img/logo.png" type="image/png" />
  <title>B Ed College</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/bootstrap.css" />
  <link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/flaticon.css" />
  <link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/themify-icons.css" />
  <link rel="stylesheet" href="<?= base_url() ?>public/front_end/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>public/front_end/vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="<?= base_url() ?>public/front_end/css/style.css" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for social icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="index-page">
    <!--================ Header Menu Area =================-->
 <?= $this->include("layout/widget_frontend/header.php") ?>
  <!--================ End Header Menu Area =================-->

                <?= $this->renderSection('content') ?>
               
  <?= $this->include("layout/widget_frontend/footer.php") ?>
