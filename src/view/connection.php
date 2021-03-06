<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

     <!-- Bootstrap core CSS -->
   <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<!-- Plugin CSS -->
<link href="../public/vendor/magnific-popup/jquery.magnific-popup.js" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="../public/css/freelancer.min.css" rel="stylesheet">


<link href="../public/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../public/css/modern-business.css" rel="stylesheet">


  </head>

  <body class="bg-dark">

  <?php
    require 'header.php'; ?>

	  <!-- login -->
	  
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="login">
                <label for="inputEmail"  ></label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password" method="POST">
                <label for="inputPassword"></label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
              </div>
            </div>
            <button class="btn btn-primary btn-block" name="©">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html"></a>
            
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
