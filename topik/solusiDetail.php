<?php 
include("../config/config.php");
$id = $_GET['id'];
$ids= $_GET['ids'];
$solusi = mysqli_query($connect,"SELECT * FROM solusi where id = $id");
$topikSolusi = mysqli_query($connect,"SELECT * FROM topik_detail where idtopik = $ids");
$topik = mysqli_query($connect,"SELECT * FROM  topik where id = $ids");
$dataTopik = mysqli_fetch_array($topik);
$data = mysqli_fetch_array($solusi);
$i = 1;
$kolom = 3;
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
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container">

      <div class="logo float-left">

        <a href="../index.php">
          <a href="../index.php">
            <img src="../assets/img/logo.png" alt="" class="img-fluid" height="50" width="200">
          </a></div>


      <!------ <div class="logo float-right">
        <h1 class="text-light">
         <span>Digital Solution</span></a></h1></div>---->
      <!-- .nav-menu -->
      <?php include("../partial/dropdown.php");?>
      <!---.nav menu--->
    </div>
  </header><!-- End Header -->
  <main id="mains">

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <h1  style="text-align:center; padding:0;text-transform:uppercase;">
        <?php echo $data['judul']; ?></h1>
      <div class="containers">

        <div class="row">
          
          <div class="col-md-3" style="position: relative">
            <img style="position: realtive" height="auto" width="100%" src="../assets/img/<?php echo $data['sebelum'];?>">
          </div>
          <div class="col-md-3"style="position: relative">
            <img height="auto" width="100%" src="../assets/img/<?php echo $data['sesudah'];?>">
          </div>
          <div class="col-md-3"style="position: relative">
            <img height="auto" width="100%" src="../assets/img/<?php echo $data['keybenefit'];?>">
          </div>
          
          <div class="col-md-3" style="position: relative">
            <div class="panel-heading">
              <div class="panel-body">
                <img
                  style="margin-top: 10px; margin-right: 10px; border: 4px solid black; border-radius: 50%;" height="auto" width="100%"
                  src="../assets/img/<?php echo $data['materi'];?>" class="float-rigth">
              </div>
              <div class="panel-footer">
                <p style="text-align: center;">Nama Pemateri </p>
              </div>
            </div>
          </div>
          
        </div>


          <div class="row">
            <div class="col-lg-6" class="venobox play-btn mb-4">
              <video width="100%" height="auto" loop="true" autoplay="autoplay" controls>
                <source src="../assets/video/<?php echo $data['video'];?>" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-6" align="right">
              <img style="" height="auto" width="100%" src="../assets/img/<?php echo $data['process'];?>">
            </div>
          </div>

            <!----
<div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">SEMV</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>--->

          </div>
        </div>

      </div>


    </section><!-- End Why Us Section -->
    
    <!-- ======= Features Section ======= -->

    <!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->s
  <script src="../assets/js/main.js"></script>
  <!-- REQUIRED SCRIPTS -->
  <?php include("../partial/js.php"); ?>
</body>

</html>