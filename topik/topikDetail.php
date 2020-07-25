<?php 
include("../config/config.php");
$id = $_GET['id'];
$query = mysqli_query($connect,"SELECT * FROM topik where id = $id");
$topik = mysqli_query($connect, "SELECT * FROM topik_detail where idtopik = $id");
$data = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light">
          <a href="../index.php">
            <span><a href="../index.php">
              <img src="../assets/img/logo.png" alt="" class="img-fluid" height="50" width="200">
            </span></a></h1></a></div>

            
     <!------ <div class="logo float-right">
        <h1 class="text-light">
         <span>Digital Solution</span></a></h1></div>---->
      <!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    <h1><?php echo $data['judul']; ?></h1>
    <?php while($dataTopik = mysqli_fetch_array($topik)){ ?>
    <?php echo $dataTopik['judul'];?>
    <?php echo $dataTopik['image'];?>
    <?php }?>
 <!-- ======= Footer ======= -->
 <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


</footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- REQUIRED SCRIPTS -->
<?php include("../partial/js.php"); ?>
</body>
</html>