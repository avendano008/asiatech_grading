<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" >
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
    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="off" placeholder="Email" />
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
    <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off"  placeholder="Password" />
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  <!--begin::Actions-->
  <div class="text-center">
    <!--begin::Submit button-->
    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-success w-100 mb-5">
      <span class="indicator-label">LOGIN</span>
      <span class="indicator-progress">Please wait...
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
      </span>
    </button>
    <!--end::Submit button-->
    <!--begin::Student Login link-->
    <a href="?login=sign-in-student" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">Student Login</a>
    <!--end::Student Login link-->
  </div>
  <!--end::Actions-->
</form>
<!--end::Form-->
<?php
  //POST method for login
  if(isset($_POST['email'])){

    $isValid = false;
    $email=$conn->real_escape_string($_POST['email']);
    $password=md5($_POST['password']);

    $sql = array(
      "admin"=>"SELECT * FROM admin WHERE email='$email'", 
      "registrar"=>"SELECT * FROM registrar WHERE email='$email'", 
      "teacher"=>"SELECT * FROM teacher WHERE email='$email'"
    );

    foreach($sql as $user => $table) {
      $result = $conn->query($table);

      //Find user from database
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($row['password']===$password){

            if($user === 'admin'){
              $_SESSION['admin']=array(
                'f_name'=>$row['f_name'],
                'm_name'=>$row['m_name'],
                'l_name'=>$row['l_name'],
                'staff_id'=>$row['staff_id'],
                'phone_number'=>$row['phone_number'],
                'email'=>$row['email'],
                'status'=>$row['status']
              );
            }

            $_SESSION['email']=$row['email'];
            $_SESSION['user']=$user;
            $isValid = true;
            header('Location:' . $user . '/');
            break;
          }
        }
      }
    }

    if (!$isValid) {
      ?>
        <script type="text/javascript">
          setTimeout(function() {
            Swal.fire({
              text: "Incorrect email or password, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn btn-primary"
              }
            });
          }, 500);  
        </script>
      <?php
    }
  }
?>