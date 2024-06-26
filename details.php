<?php
session_start();
error_reporting(0);
include('dbconnection.php');

$id = $_SESSION['login_id'];
if (strlen($_SESSION['login_id'] == 0)) {
  header('location:logout.php');
} else {

  if (isset($_POST['submit'])) {
    $uploadimg = $_FILES['uploadimg']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["uploadimg"]["name"]);
    move_uploaded_file($_FILES['uploadimg']['tmp_name'], $target_dir . $uploadimg);

    $query1 = mysqli_query($con, "insert into tbl_uploadimg (uploadimg) value ('$uploadimg')");
    header('location: result.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insect Detection</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/farm.jpg" rel="icon">
  <link href="assets/img/farm.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="uploadimg.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Detect-pest</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
      
    </div><!-- End Logo -->
    
    <div class="w-100 d-flex justify-content-end pe-5">
          <a class="dropdown-item d-flex align-items-center justify-content-end" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
    </div><!-- Signout -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="uploadimg.php">
              <i class="bi bi-cloud-upload"></i><span>Upload</span><i></i>
            </a>
        </li><!-- End upload Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="uploadimg.php">
              <i class="bi bi-cloud-upload"></i><span>Result</span><i></i>
            </a>
        </li><!-- End upload Nav -->


     

      <li class="nav-item">
        <a class="nav-link active" href="details.php">
          <i class="bi bi-award"></i><span>About Us</span><i></i>
        </a>
      </li><!-- End result Nav -->

      </ul>
  </aside><!-- End Sidebar-->
  <main>
    <div class="container">

      <section class="section py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-10" style="margin: 50px 0 0 230px;">

              <div class="card my-3">
                <div class="row g-0">
                  <div class="col-md-4 text-center">
                    <img src="Team member Images/saloni.jpg" class="img-fluid rounded-start" alt="siddu" style="height: 150px;width:120px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Saloni</h5>
                      <p class="title">Team Member</p>
                      <p>USN:- 4MT20CS137</p>
                      <p><a href="#copyright">saloni080103@gmail.com</a></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card my-3">
                <div class="row g-0">
                  <div class="col-md-4 text-center">
                    <img src="Team member Images/shreya.jpg" class="img-fluid rounded-start" alt="siddu" style="height: 150px;width:120px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Shreya Shetty</h5>
                      <p class="title">Team Member</p>
                      <p>USN:- 4MT20CS158</p>
                      <p><a href="#copyright">shreyashetty3127@gmail.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card my-3">
                <div class="row g-0">
                  <div class="col-md-4 text-center">
                    <img src="Team member Images/siddu.jpg" class="img-fluid rounded-start" alt="siddu" style="height: 150px;width:120px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Siddanna Birajdar</h5>
                      <p class="title">Team Member</p>
                      <p>USN:- 4MT20CS161</p>
                      <p><a href="#copyright">siddubbirajdar25@gmail.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card my-3">
                <div class="row g-0">
                  <div class="col-md-4 text-center">
                    <img src="Team member Images/varshitha.jpg" class="img-fluid rounded-start" alt="siddu" style="height: 150px;width:120px;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Varshitha G V</h5>
                      <p class="title">Team Member</p>
                      <p>USN:- 4MT21CS405</p>
                      <p><a href="#copyright">varshitha044@gmail.com</a></p>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>
    </div>

    </section>

    </div>
  </main><!-- End #main -->
  
 <!-- ======= Footer Starts ======= -->
 <div id="copyright" style="margin: 0 0 0 530px;">
    <div class=" container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
          <div class="copyright-text">
            <p> Copyright &copy; 2024, All Right Reserved <a href="">TEAM 38</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ======= Footer ends ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>