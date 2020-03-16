<!DOCTYPE html>
<html lang="en">
<style>
            .bg-gradient-primaryAA {
              background-color: #42b9d6;
              background-image: linear-gradient(180deg, #42b9d6 10%, #42b9d6 100%);
              background-size: cover;
            }
            .bg-login-imageAA {
              background: url("https://upload.wikimedia.org/wikipedia/commons/6/67/KU_SubLogo.png");
              background-position: center;
              background-size: cover;
            }

</style>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ระบบยืมของภาควิชาคอม</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primaryAA">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-imageAA"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">เข้าสู่ระบบ</h1>
                  </div>
                  <form class="user" action = "ldap.php" method = "post">
                    <div class="form-group">
                      <input type="text" class="form-control " name="username" id="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control "  name="password"  id="Password" placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <?php
                      if(isset($_GET["error"])){?>
                        <div class="text-center">
                          <h6 class = "text-gray-error"><?php echo $_GET["error"] ?></h6>
                        </div>
                      <?php
                      }
                      ?>
                    <button type="submit" class="btn btn-primary  btn-block">
                      Login 
                    </button>
                    <hr>
                    <div class="text-center">
                    <h6 class="h6 text-gray-700 mb-4">ระบบยืม-คืน อุปกรณ์ ภาควิชาวิศวกรรมคอมพิวเตอร์   <br> มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน </h7>
                    </div>
                  </form>
              
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
