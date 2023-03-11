<?php
  include'connect/connect.php';
  session_start();
  //Prevent going back to sign in when authenticated.
  if(isset($_SESSION['email'])){
    header('Location:' . $_SESSION['user'] . '/');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <title>Asia Technological School Of Science And Arts | Sign In</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="image/asia-tech-logo-2.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Authentication - Sign-in -->
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative col-xs-12" style="background: url('image/asia-tech-img.jpg') no-repeat center #004914; background-size: cover; min-width: 300px; min-height: 70vh;">
        </div>
        <!--end::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
          <!--begin::Content-->
          <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
              <?php
                if(isset($_GET['login'])){
                  $login=$_GET['login'];
                  include $login.'.php';
                }else{
                  include'sign-in-student.php';
                }
              ?>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/edited/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>