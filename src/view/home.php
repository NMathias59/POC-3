<!doctype html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>
Acceuil
</title>


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
<!-- Custom styles for this template -->
<link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>
<!-- conection a la base de données pour les test php -->



<!-- header -->
<?php
    require 'header.php'; ?>	
<!-- Page Content -->
<div class="container"> 

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">ACCEUIL </h1>
  <div class="row">
  <?php for ($i = 0; $i < 2; ++$i) {
        ?>
  
    <div class="col-lg-6 portfolio-item">
      <div class="card h-100"> 
        <div class="card-body">
          <h4 class="card-title"> <a><?= $posts[$i]->getName(); ?></a> </h4>
          <span> <?=  $posts[$i]->getCreatedAt(); ?> </span>
        <br/>
        <br/>
          <p class="card-text"><?= $posts[$i]->getContent(); ?> </p>
<button type="button" class="btn btn-primary">lire la suite</button>
        </div>
      </div>
    </div>
  
  <?php
    } ?>
  <div> 
  
    <?php for ($i = 2; $i < 6; ++$i) {
        ?> 
      <div class="row">
      <div>
        <h3><?= $posts[$i]->getName(); ?></h3>
        <span><?=  $posts[$i]->getCreatedAt(); ?></span>
        <p><?= $posts[$i]->getContent(); ?></p>
        <a class="btn btn-primary" href="#">Lire la suite <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    </div>
    
    
    <?php
    } ?>
    </div>
</div>
</div>
<br>
<br>
<!-- /.footer--> 
<?php
        require 'footer.php'; ?>

<!-- Bootstrap core JavaScript --> 
<script src="../vendor/jquery/jquery.min.js"></script> 
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
