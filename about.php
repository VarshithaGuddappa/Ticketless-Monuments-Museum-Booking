<!DOCTYPE html>
<html lang="en">

<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="pic9.png" alt="">
      </div>
      <div class="col-lg-6">
        <h2>About Us</h2>
        <style>
                p {
                  text-align: justify;
                  text-justify: inter-word;
                }
        </style>

        
        <p >
        Online Monument-Monument visit Booking System ,contains the admin and client. 
        The admin can manage the booking from the client like monitor booking, add Monument-Monument information, 
        assign location, and the client is represented as a customer who needs to create account . The admin can approve the status after client booking.
          
        </p>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <!-- Footer -->
<?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
