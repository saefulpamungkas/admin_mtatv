<?php
session_start();


//mengamankan admin agar tidak masuk ke dasboard
// if (!isset($_SESSION['admin'])) {
//     echo "<script>alert('Anda harus login');</script>";
//     echo "<script>location='login.php';</script>";
//     header('location:login.php');
//     exit();
// }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/fontawesome-free-6.0.0/css/all.min.css">
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background-color: cornflowerblue;" href="index.html">Halaman admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="index.php?halaman=logout" class=" btn btn-danger rounded-btn-adjust"><i class="fas fa-sign-out-alt"></i> Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/user_login.png" class="user-image img-responsive" />
                    </li>


                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="index.php?halaman=kategori"><i class="fa fa-cube"></i> Kategori</a></li>
                    <li><a href="index.php?halaman=videopopular"><i class="fa fa-tags"></i> Video Popular</a></li>
                    <li><a href="index.php?halaman=videojihad"><i class="fa fa-tags"></i> Video Jihad Pagi</a></li>
                    <li><a href="index.php?halaman=video_komentar"><i class="fa fa-tags"></i> Video Komentar</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "videopopular") {
                        include 'videopopular.php';
                    } elseif ($_GET['halaman'] == "videojihad") {
                        include 'videojihad.php';
                    } elseif ($_GET['halaman'] == "tambahvideo_popular") {
                        include 'tambahvideo_popular.php';
                    } elseif ($_GET['halaman'] == "hapusvideo_popular") {
                        include 'hapusvideo_popular.php';
                    } elseif ($_GET['halaman'] == "editvideo") {
                        include 'editvideo.php';
                    } elseif ($_GET['halaman'] == "tambahvideo_jihad") {
                        include 'tambahvideo_jihad.php';
                    } elseif ($_GET['halaman'] == "hapusvideo_jihad") {
                        include 'hapusvideo_jihad.php';
                    } elseif ($_GET['halaman'] == "video_komentar") {
                        include 'video_komentar.php';
                    } elseif ($_GET['halaman'] == "kategori") {
                        include 'kategori.php';
                    } elseif ($_GET['halaman'] == "hapuskategori") {
                        include 'hapuskategori.php';
                    } elseif ($_GET['halaman'] == "tambahkategori") {
                        include 'tambahkategori.php';
                    } elseif ($_GET['halaman'] == "hapuspelanggan") {
                        include 'hapuspelanggan.php';
                    }
                } else {
                    include 'home.php';
                }

                ?>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>