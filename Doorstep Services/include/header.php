<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doorstep Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/ds2.png" rel="icon">
  <link href="images/ds2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  

      
       <nav class="nav bg-dark">

        <?php if (!isset($_SESSION['user'])): ?>
	    <h3 class="logo mr-auto"><img src="images/ds2.png" width="30" height="30"><a href="index.php">DOORSTEP SERVICES</a></h3>
        <a class="nav-link active" href="index.php">HOME</a>
		<a class="nav-link active" href="index1.php">SEARCH</a>
        <a class="nav-link" href="login.php">LOGIN</a>
        <a class="nav-link" href="register.php">REGISTER </a>
        <a class="nav-link" href="about.php">ABOUT US</a>

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="nav-link" href="managehall.php">Manage Providers</a>
        <a class="nav-link" href="admin.php">Manage Booking</a>
		<a class="nav-link" href="reviews.php">Reviews</a>
        <a class="nav-link" href="user.php">User Details</a>
		<a class="nav-link" href="logout.php">Log Out</a>

        <?php else: ?>
        <a class="nav-link" href="logout.php">Log Out</a>
        <?php endif; ?>

    </nav>
	
 