<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>REGISTER - INFOKAMPUS</title>
  <!-- Favicon -->
  <link href="<?=base_url()?>assets/backoffice/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?=base_url()?>assets/backoffice/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/backoffice/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?=base_url()?>assets/backoffice/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

  
  <script src="<?php echo base_url(); ?>assets/backoffice/js/jquery-3.4.1.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/backoffice/js/jquery-migrate-1.4.1.min.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>assets/backoffice/js/jquery-ui-1.10.3.custom.min.js"></script> -->
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
          <img src="<?=base_url()?>assets/backoffice/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="<?=base_url()?>assets/backoffice/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?=base_url();?>">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Home</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?=base_url()?>index.php/auth/">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-light">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
              <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"><img src="<?=base_url()?>assets/backoffice/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="<?=base_url()?>assets/backoffice/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign up with credentials</small>
              </div>
              <form role="form" method="POST" action="<?=base_url();?>index.php/auth/registrasi_do" id='signupform'>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" id="username"  data-validation="length alphanumeric" 
		 data-validation-length="3-12" 
		 data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                    <label id="message_username"></label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="email" class="form-control" placeholder="Email" type="email" name="email"  data-validation="email"  data-validation-error-msg="Masukan Email Dengan Benar" >
                    <label id="message"></label>
                    <!-- <span id="loading"><img src="<?php echo base_url(); ?>assets/img/animat-rocket-color.gif" alt="Ajax Indicator" width="50px" height="auto"  /></span> </div> -->
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input  id="password-field"  class="form-control" placeholder="Password" type="password"   onkeyup="passwordStrength(this.value)" name="password"  data-validation="strength" 
		 data-validation-strength="3" data-validation-error-msg="Password Menggunakan Huruf kapital, Huruf kecil, Angka Dan Symbol">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="float: right;margin-left:10px;margin-right: 10px;margin-top: 15px;position: relative;z-index: 2;"></span>
                  </div>
                </div>



                <div class="text-muted font-italic"><small>password strength: <span  id="status" class="text-success font-weight-700">Tidak Aman</span></small></div>
                <!-- <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                      </label>
                    </div>
                  </div>
                </div> -->
                <div class="text-center">
                    <input type="submit" class="btn btn-primary mt-4" value="Create account">
                </div>
              </form>
    
 
    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">INFOKAMPUS</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--   Core   -->
  <script src="<?=base_url()?>assets/backoffice/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/backoffice/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?=base_url()?>assets/backoffice/js/argon-dashboard.min.js?v=1.1.0"></script>


  <script>
    // fungsi untuk mengecek kekuatan password
function passwordStrength(p){
 var status = document.getElementById('status');

 var regex = new Array();
 regex.push("[A-Z]");
 regex.push("[a-z]");
 regex.push("[0-9]");
 regex.push("[!@#$%^&*]");

 var passed = 0;
  for(var x = 0; x < regex.length;x++){
  if(new RegExp(regex[x]).test(p)){
   console.log(passed++);
  }
 }

 var strength = null;
 var color = null;

 switch(passed){
  case 0:strength = "Tidak Aman";
   color = "#FF3232";
  break;
  case 1:strength = "Tidak Aman";
   color = "#FF3232";
  break;
  case 2:
   strength = "Tidak Aman";
   color = "#FF3232";
  break;
  case 3:
   strength = "Cukup Aman";
   color = "#E1D441";
  break;
  case 4:
   strength = "Sangat Aman";
   color = "#27D644";
 }

 status.innerHTML = strength;
 status.style.color = color;
}

$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});



  
  </script>

  
    <!-- validator -->
    <script src="<?=base_url()?>assets/backoffice/plugins/jQuery-Validator/form-validator/jquery.form-validator.min.js"></script>
  <script>
    $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );
  
    $.validate({
        modules : 'date, security'
    });
</script>
</body>

</html>