<?php
  // include'connect/connect.php';
  // session_start();

  //Prevent going back to sign in when authenticated.
  // if(isset($_SESSION['staff_id'])){
  //   header('Location:admin/index.php');
  // }

  //POST method for login
  // if(isset($_POST['staff-id'])){

  //   $staffID =$_POST['staff-id'];
  //   $password=md5($_POST['password']);
  //   $sql = sprintf("SELECT * FROM admin WHERE staff_id='%s'", $conn->real_escape_string($staffID));
  //   $result = $conn->query($sql);

    //Find email and password from database
    // if ($result->num_rows > 0) {
    //   while ($row = $result->fetch_assoc()) {
    //     if ($row['password']==$password){
    //       $_SESSION['staff_id']=$row['staff_id'];
    //       $_SESSION['email']=$row['email'];
    //       $_SESSION['f_name']=$row['f_name'];
    //       $_SESSION['l_name']=$row['l_name'];
    //       $_SESSION['status']=$row['status'];

    //       header('Location: admin/');
    //     }else{
          ?>
            <!-- <script type="text/javascript">alert("Incorrect email or password, please try again.");</script> -->
          <?php
    //     }
    //   }
    // }else{
      ?>
        <!-- <script type="text/javascript">alert("Incorrect email or password, please try again.");</script> -->
      <?php
  //   }
  // }
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
              <!--begin::Form-->
              <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST">
                <!--begin::Heading-->
                <div class="text-center mb-10">
                  <!--begin::Title-->
                  <h1 class="text-dark mb-3">Administrator Login</h1>
                  <!--end::Title-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                  <!--begin::Label-->
                  <label class="form-label fs-6 fw-bolder text-dark">Staff ID</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input class="form-control form-control-lg form-control-solid" type="text" name="staff-id" autocomplete="off" />
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                  <!--begin::Wrapper-->
                  <div class="d-flex flex-stack mb-2">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                    <!--end::Label-->
                    <!--begin::Link-->
                    <a href="password-reset.php" class="link-primary fs-6 fw-bolder">Forgot Password?</a>
                    <!--end::Link-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Input-->
                  <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                  <!--begin::Submit button-->
                  <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-success w-100 mb-5">
                    <span class="indicator-label">LOGIN</span>
                    <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <!--end::Submit button-->
                  <!--begin::Student Login link-->
                  <a href="sign-in-student.php" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">Student Login</a>
                  <!--end::Student Login link-->
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->
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
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>