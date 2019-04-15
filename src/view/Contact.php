<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
	<!-- Bootstrap core CSS -->
   <link href="../public/css/bootstrap.min.css" rel="stylesheet">

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

<body>
	<!-- header -->
	<?php
    require 'header.php';
    ?>
	
	<!-- Contact-->
	<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">CONTACT</h2>
            <h3 class="section-subheading text-muted">Menvoyer un message</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nom *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="téléphone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="VotreMessage *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

	
</body>

</html>