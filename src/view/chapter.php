<!doctype html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>
	Chapitres
	</title>

	<!-- Bootstrap core CSS -->
   <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
	 <link href="public/vendor/magnific-popup/jquery.magnific-popup.js" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="public/css/freelancer.min.css" rel="stylesheet">


<link href="../public/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../public/css/modern-business.css" rel="stylesheet">
</head>

<body>

	<!-- Navigation -->
	<?php
    require 'header.php'; ?>

	<!-- Page Content -->
<main>
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Chapitres
      </h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="home.php">Acceuil</a>
			</li>
			<li class="breadcrumb-item active">Chapitres</li>
		</ol>
<div class="row">
<?php foreach ($posts as $post) {
        ?>
		
			<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
				<div class="card h-100">
					<div class="card-body">
						<h4 class="card-title">
							<?php //var_dump($post);?>
                			<a href="#"><?= $post->getName(); ?></a>
              			</h4>
						<p class="card-text"><?= $post->getContent(); ?></p>
						<button type="button" class="btn btn-primary">voir plus</button>
					</div>
				</div>
			</div>
		
<?php
    }?></div>
			
		<!-- Pagination -->
		<ul class="pagination justify-content-center">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
			

			</li>
			<li class="page-item">
				<a class="page-link" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
			

			</li>
		</ul>
	</div>
</div>
</main>
			<!-- /.footer-->
		<?php
        require 'footer.php'; ?>
</body>
