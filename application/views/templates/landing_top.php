<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href=<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css")?> rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href=<?php echo base_url("assets/css/shop-homepage.css")?> rel="stylesheet">

  <link rel="stylesheet" href=<?php echo base_url("assets/css/register.css")?>>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style = "background:#16a085;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url()?>">Cryptoalgae</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="market.php">Market Place
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Supply</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Top up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('login')?>">Sign in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('register') ?>">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>