<!doctype html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>
Acceuil
</title>

<!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">


<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
<!-- conection a la base de données pour les test php -->



<!-- header -->
<?php
    require 'hader.php'; ?>	
<!-- Page Content -->
<div class="container"> 
  
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">ACCEUIL </h1>
  <?php for ($i = 0; $i < 2; ++$i) {
        echo $posts[$i]['name'];
        echo $posts[$i]['createdAt'];
        echo $posts[$i]['content'];
    } ?>
  <!--<div class="row">
    <div class="col-lg-6 portfolio-item">
      <div class="card h-100"> 
        <div class="card-body">
          <h4 class="card-title"> <a><?php echo $posts[0]['name']; ?></a> </h4>
          <span> <?php echo $posts[0]['createdAt']; ?> </span>
        <br/>
        <br/>
          <p class="card-text"><?php echo $posts[0]['content']; ?> </p>
<button type="button" class="btn btn-primary">lire la suite</button>
        </div>
      </div>
    </div>-->
    <!--<div class="col-lg-6 portfolio-item">
      <div class="card h-100"> 
        <div class="card-body">
          <h4 class="card-title"> <a>Chapitre IV</a> </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitaedolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae</p>
<button type="button" class="btn btn-primary">lire la suite</button>
        </div>
      </div>
    </div>-->
  </div>
  <div> 
  <?php for ($i = 2; $i <= 5; ++$i) {
        echo $posts[$i]['name'];
        echo $posts[$i]['createdAt'];
        echo $posts[$i]['content'];
    } ?>

    <!-- Project One 
    <div class="row">
      <div>
        <h3>Chapitre III</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="#">Lire la suite <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    </div>
    <!-- /.row 
    
    <hr>
    
    <!-- Project Two 
     <div class="row">
      <div>
        <h3>Chapitre II</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="#">Lire la suite <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    </div>
    <!-- /.row 
    
    <hr>
    
    <!-- Project Three 
     <div class="row">
      <div>
        <h3>Chapitre I</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="#">Lire la suite <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    </div>
    <!-- /.row 
    
    <hr>
    
    <!-- Project Four 
     <div class="row">
      <div>
        <h3>Introduction</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="#">Lire la suite <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    </div>
    <!-- /.row 
  </div>
  <hr>
-->
</div>
<!-- /.footer--> 
<?php
        require 'footer.php'; ?>

<!-- Bootstrap core JavaScript --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
