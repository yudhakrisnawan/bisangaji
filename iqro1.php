<!DOCTYPE html>

<?php
include "connection/koneksi.php";
session_start();
ob_start();

$id = $_SESSION['id_user'];

if(isset ($_SESSION['email'])){
    $query = "select * from user natural join level_user where id_user = $id";

    mysqli_query($conn, $query);
    $sql = mysqli_query($conn, $query);
    
    while($r = mysqli_fetch_array($sql)){
        $nama_user = $r['nama_user'];
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bisa Ngaji</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/arabic.css" rel="stylesheet" >
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="beranda.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="img/dashboard.png" width="30px" height="30px">
                </div>
                <div class="sidebar-brand-text mx-3">Bisa Ngaji</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="beranda.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNol"
                    aria-expanded="true" aria-controls="collapseNol">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Mengenal Hijaiyah</span>
                </a>
                <div id="collapseNol" class="collapse" aria-labelledby="headingNol" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="hijaiyah1.php">Huruf hijaiyah</a>
                        <a class="collapse-item" href="hijaiyah2.php">Cara membaca hijaiyah</a>
                        <a class="collapse-item" href="hijaiyah3.php">Angka hijaiyah</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSatu"
                    aria-expanded="true" aria-controls="collapseSatu">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Iqro</span>
                </a>
                <div id="collapseSatu" class="collapse" aria-labelledby="headingSatu" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="iqro1.php">Iqro 1</a>
                        <a class="collapse-item" href="iqro2.php">Iqro 2</a>
                        <a class="collapse-item" href="iqro3.php">Iqro 3</a>
                        <a class="collapse-item" href="iqro4.php">Iqro 4</a>
                        <a class="collapse-item" href="iqro5.php">Iqro 5</a>
                        <a class="collapse-item" href="iqro6.php">Iqro 6</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDua"
                    aria-expanded="true" aria-controls="collapseDua">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Doa Sehari-hari</span>
                </a>
                <div id="collapseDua" class="collapse" aria-labelledby="headingDua"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="doa1.php">Doa makan</a>
                        <a class="collapse-item" href="doa2.php">Doa tidur</a>
                        <a class="collapse-item" href="doa3.php">Doa keluar/masuk masjid</a>
                        <a class="collapse-item" href="doa4.php">Doa keluar/masuk rumah</a>
                        <a class="collapse-item" href="doa5.php">Doa naik kendaraan</a>
                        <a class="collapse-item" href="doa6.php">Doa belajar</a>
                        <a class="collapse-item" href="doa7.php">Doa membaca Al-Qur'an</a>
                        <a class="collapse-item" href="doa8.php">Doa berwudhu</a>
                        <a class="collapse-item" href="doa9.php">Doa saat sakit</a>
                        <a class="collapse-item" href="doa10.php">Doa selamat dunia akhirat</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTiga"
                    aria-expanded="true" aria-controls="collapseTiga">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Surat-surat Pendek</span>
                </a>
                <div id="collapseTiga" class="collapse" aria-labelledby="headingTiga"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="surat1.php">Al-Fatihah</a>
                        <a class="collapse-item" href="surat2.php">Ad-Duha</a>
                        <a class="collapse-item" href="surat3.php">Asy-Syams</a>
                        <a class="collapse-item" href="surat4.php">Al-Insyirah</a>
                        <a class="collapse-item" href="surat5.php">At-Tin</a>
                        <a class="collapse-item" href="surat6.php">Az-Zalzalah</a>
                        <a class="collapse-item" href="surat7.php">Al-Qari`ah</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpat"
                    aria-expanded="true" aria-controls="collapseEmpat">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Video Belajar Mengaji</span>
                </a>
                <div id="collapseEmpat" class="collapse" aria-labelledby="headingEmpat"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="video.php">Video belajar mengaji</a>
                    </div>
                </div>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                  
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Informasi User -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $r['nama_user'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                            <!-- Dropdown User -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="user_setting.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    User Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

            <!-- Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Iqro</h1>
                </div>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center">Iqro 1</h4>
                                    <br>
                                </div>
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 1</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ<p></div>
                                        <div class="col"><p class="arabic_center">ا = اَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ اَ<p></div>
                                        <div class="col"><p class="arabic_center"> بَ اَ بَ </p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَ اَ بَ <p></div>
                                        <div class="col"><p class="arabic_center">  بَ اَ اَ </p></div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ بَ<p></div>
                                        <div class="col"><p class="arabic_center">  بَ بَ اَ  </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ اَ<p></div>
                                        <div class="col"><p class="arabic_center"> بَ اَ بَ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> بَ بَ بَ <p></div>
                                        <div class="col"><p class="arabic_center"> اَ اَ اَ </p></div>
                                    </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ <p></div>
                                        <div class="col"><p class="arabic_center">اَ بَ <p></div>
                                        <div class="col"><p class="arabic_center">اَ بَ <p></div>
                                    </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 2</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ  تَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ بَ اَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ تَ بَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ<p></div>
                                        <div class="col"><p class="arabic_center">تَ اَ بَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ تَ بَ<p></div>
                                        <div class="col"><p class="arabic_center">بَ تَ اَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ اَ تَ<p></div>
                                        <div class="col"><p class="arabic_center">تَ اَ تَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ تَ اَ<p></div>
                                        <div class="col"><p class="arabic_center">اَ تَ بَ</p></div>
                                    </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ<p></div>
                                        <div class="col"><p class="arabic_center">اَ بَ تَ<p></div>
                                    </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 3</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ تَ ثَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ بَ تَ</div>
                                        <div class="col"><p class="arabic_center">ثَ اَ بَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ اَ ثَ</div>
                                        <div class="col"><p class="arabic_center">بَ تَ تَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ بَ ثَ</div>
                                        <div class="col"><p class="arabic_center">اَ تَ بَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ ثَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">تَ بَ تَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ ثَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">تَ تَ اَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ تَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">ثَ بَ تَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 4</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ اَ جَ</div>
                                        <div class="col"><p class="arabic_center">اَ جَ جَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ بَ جَ</div>
                                        <div class="col"><p class="arabic_center">اَ تَ جَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ اَ جَ</div>
                                        <div class="col"><p class="arabic_center">بَ جَ ثَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ اَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">جَ اَ بَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ جَ جَ<p></div>
                                        <div class="col"><p class="arabic_center">تَ اَ جَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ ثَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">جَ اَ جَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَ بَ تَ ثَ جَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 5</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ حَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ حَ ثَ</div>
                                        <div class="col"><p class="arabic_center">جَ اَ حَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ حَ ثَ</div>
                                        <div class="col"><p class="arabic_center">حَ جَ تَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ حَ بَ</div>
                                        <div class="col"><p class="arabic_center">جَ حَ تَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ اَ حَ<p></div>
                                        <div class="col"><p class="arabic_center">جَ اَ ثَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ اَ حَ<p></div>
                                        <div class="col"><p class="arabic_center">ثَ بَ حَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ حَ حَ<p></div>
                                        <div class="col"><p class="arabic_center">اَ جَ جَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَ بَ تَ ثَ جَ حَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 6</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ حَ خَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ اَ خَ</div>
                                        <div class="col"><p class="arabic_center">حَ اَ خَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ تَ جَ</div>
                                        <div class="col"><p class="arabic_center">ثَ اَ خَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ حَ ثَ</div>
                                        <div class="col"><p class="arabic_center">بَ اَ خَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ خَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">جَ اَ حَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ خَ ثَ<p></div>
                                        <div class="col"><p class="arabic_center">تَ اَ خَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ حَ خَ<p></div>
                                        <div class="col"><p class="arabic_center">اَ خَ خَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَ بَ تَ ثَ جَ حَ خَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 7</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ دَ خَ</div>
                                        <div class="col"><p class="arabic_center">خَ دَ دَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ خَ دَ</div>
                                        <div class="col"><p class="arabic_center">حَ دَ ثَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ جَ دَ</div>
                                        <div class="col"><p class="arabic_center">خَ تَ دَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ حَ خَ<p></div>
                                        <div class="col"><p class="arabic_center">ثَ بَ دَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ دَ جَ<p></div>
                                        <div class="col"><p class="arabic_center">حَ بَ دَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ دَ دَ<p></div>
                                        <div class="col"><p class="arabic_center">خَ جَ تَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 8</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ ذَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ دَ ذَ</div>
                                        <div class="col"><p class="arabic_center">دَ اَ ذَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ حَ ذَ</div>
                                        <div class="col"><p class="arabic_center">اَ حَ دَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ اَ ذَ</div>
                                        <div class="col"><p class="arabic_center">خَ تَ دَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ بَ حَ<p></div>
                                        <div class="col"><p class="arabic_center">جَ حَ خَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ خَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">حَ دَ ثَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ دَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">دَ اَ ذَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 9</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ ذَ رَ</div>
                                        <div class="col"><p class="arabic_center">دَ ذَ رَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ رَ ذَ</div>
                                        <div class="col"><p class="arabic_center">رَ حَ دَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ ذَ رَ</div>
                                        <div class="col"><p class="arabic_center">رَ حَ ثَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ رَ جَ<p></div>
                                        <div class="col"><p class="arabic_center">بَ رَ دَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ رَ تَ<p></div>
                                        <div class="col"><p class="arabic_center">خَ ذَ رَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ جَ رَ<p></div>
                                        <div class="col"><p class="arabic_center">خَ خَ ذَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ رَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 10</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَ زَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ رَ زَ</div>
                                        <div class="col"><p class="arabic_center">رَ اَ زَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ خَ ذَ</div>
                                        <div class="col"><p class="arabic_center">زَ دَ رَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ رَ زَ</div>
                                        <div class="col"><p class="arabic_center">زَ حَ دَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ زَ دَ<p></div>
                                        <div class="col"><p class="arabic_center">خَ رَ جَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ حَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">بَ زَ رَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ اَ زَ<p></div>
                                        <div class="col"><p class="arabic_center">جَ اَ خَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ رَ زَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 11</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ رَ سَ</div>
                                        <div class="col"><p class="arabic_center">زَ اَ سَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ سَ دَ</div>
                                        <div class="col"><p class="arabic_center">سَ خَ ذَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ زَ رَ</div>
                                        <div class="col"><p class="arabic_center">سَ خَ ثَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ رَ سَ<p></div>
                                        <div class="col"><p class="arabic_center">سَ بَ تَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ حَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">سَ خَ ذَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ<p></div>
                                        <div class="col"><p class="arabic_center">سَ جَ ثَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ رَ زَ سَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 12</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ شَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ تَ شَ</div>
                                        <div class="col"><p class="arabic_center">سَ شَ شَ</div>
                                        <div class="col"><p class="arabic_center">سَ اَ شَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ تَ ذَ</div>
                                        <div class="col"><p class="arabic_center">دَ رَ سَ</div>
                                        <div class="col"><p class="arabic_center">شَ ذَ ثَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ رَ سَ</div>
                                        <div class="col"><p class="arabic_center">خَ شَ بَ</div>
                                        <div class="col"><p class="arabic_center">زَ حَ ثَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ سَ دَ</div>
                                        <div class="col"><p class="arabic_center">رَ شَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">سَ شَ اَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ زَ رَ</div>
                                        <div class="col"><p class="arabic_center">اَ سَ شَ<p></div>
                                        <div class="col"><p class="arabic_center">ذَ خَ زَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ</div>
                                        <div class="col"><p class="arabic_center">شَ زَ جَ<p></div>
                                        <div class="col"><p class="arabic_center">خَ سَ دَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ رَ زَ سَ شَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 13</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ رَ صَ</div>
                                        <div class="col"><p class="arabic_center">صَ شَ زَ</div>
                                        <div class="col"><p class="arabic_center">صَ اَ شَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ رَ تَ</div>
                                        <div class="col"><p class="arabic_center">دَ سَ صَ</div>
                                        <div class="col"><p class="arabic_center">صَ ثَ ذَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ زَ صَ</div>
                                        <div class="col"><p class="arabic_center">حَ صَ دَ</div>
                                        <div class="col"><p class="arabic_center">سَ خَ صَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ جَ زَ</div>
                                        <div class="col"><p class="arabic_center">شَ بَ صَ<p></div>
                                        <div class="col"><p class="arabic_center">حَ ذَ رَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ رَ زَ</div>
                                        <div class="col"><p class="arabic_center">صَ جَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">صَ دَ خَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ<p></div>
                                        <div class="col"><p class="arabic_center">ثَ خَ صَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> خَ دَ ذَ رَ زَ سَ شَ صَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 14</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَ ضَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ صَ ضَ</div>
                                        <div class="col"><p class="arabic_center">حَ ضَ رَ</div>
                                        <div class="col"><p class="arabic_center">صَ اَ ضَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَ رَ بَ</div>
                                        <div class="col"><p class="arabic_center">شَ خَ زَ</div>
                                        <div class="col"><p class="arabic_center">شَ اَ ضَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ شَ ضَ</div>
                                        <div class="col"><p class="arabic_center">صَ دَ زَ</div>
                                        <div class="col"><p class="arabic_center">صَ حَ ثَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَ تَ ذَ </div>
                                        <div class="col"><p class="arabic_center">رَ صَ دَ<p></div>
                                        <div class="col"><p class="arabic_center">سَ حَ ذَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ اَ شَ</div>
                                        <div class="col"><p class="arabic_center">ضَ جَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">ثَ خَ زَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ<p></div>
                                        <div class="col"><p class="arabic_center">صَ رَ ضَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ ذَ رَ زَ سَ شَ صَ ضَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 15</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ خَ طَ</div>
                                        <div class="col"><p class="arabic_center">زَ طَ شَ</div>
                                        <div class="col"><p class="arabic_center">طَ اَ ضَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ دَ طَ</div>
                                        <div class="col"><p class="arabic_center">ذَ طَ سَ</div>
                                        <div class="col"><p class="arabic_center">تَ صَ ضَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ ضَ ثَ</div>
                                        <div class="col"><p class="arabic_center">سَ رَ طَ</div>
                                        <div class="col"><p class="arabic_center">دَ ضَ صَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ صَ ضَ</div>
                                        <div class="col"><p class="arabic_center">طَ حَ ذَ<p></div>
                                        <div class="col"><p class="arabic_center">شَ خَ طَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَ اَ شَ</div>
                                        <div class="col"><p class="arabic_center">جَ زَ ضَ<p></div>
                                        <div class="col"><p class="arabic_center">ذَ رَ طَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ<p></div>
                                        <div class="col"><p class="arabic_center">سَ خَ طَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ ذَ رَ زَ سَ شَ صَ ضَ طَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 16</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَ ظَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ حَ ذَ</div>
                                        <div class="col"><p class="arabic_center">بَ طَ ظَ</div>
                                        <div class="col"><p class="arabic_center">ظَ اَ طَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَ حَ ذَ</div>
                                        <div class="col"><p class="arabic_center">دَ صَ ظَ</div>
                                        <div class="col"><p class="arabic_center">سَ ضَ ظَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ خَ طَ</div>
                                        <div class="col"><p class="arabic_center">سَ رَ صَ</div>
                                        <div class="col"><p class="arabic_center">شَ اَ ظَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ ضَ ظَ</div>
                                        <div class="col"><p class="arabic_center">زَ خَ ضَ</div>
                                        <div class="col"><p class="arabic_center">ثَ رَ ضَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ طَ ظَ</div>
                                        <div class="col"><p class="arabic_center">جَ طَ ضَ</div>
                                        <div class="col"><p class="arabic_center">صَ دَ شَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَ زَ سَ شَ صَ ضَ طَ ظَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 17</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ اَ طَ</div>
                                        <div class="col"><p class="arabic_center">تَ عَ رَ</div>
                                        <div class="col"><p class="arabic_center">ظَ اَ عَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ حَ طَ</div>
                                        <div class="col"><p class="arabic_center">صَ عَ ضَ</div>
                                        <div class="col"><p class="arabic_center">صَ عَ زَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ طَ عَ</div>
                                        <div class="col"><p class="arabic_center">سَ عَ ظَ</div>
                                        <div class="col"><p class="arabic_center">بَ عَ ثَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ اَ ضَ</div>
                                        <div class="col"><p class="arabic_center">ضَ عَ شَ</div>
                                        <div class="col"><p class="arabic_center">جَ خَ ذَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَ عَ طَ</div>
                                        <div class="col"><p class="arabic_center">دَ طَ ضَ</div>
                                        <div class="col"><p class="arabic_center">عَ جَ ظَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَ زَ سَ شَ صَ ضَ طَ ظَ عَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 18</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ غَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ طَ غَ</div>
                                        <div class="col"><p class="arabic_center">دَ غَ ظَ</div>
                                        <div class="col"><p class="arabic_center">غَ اَ عَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ طَ عَ</div>
                                        <div class="col"><p class="arabic_center">جَ غَ ظَ</div>
                                        <div class="col"><p class="arabic_center">ثَ عَ ظَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَ رَ عَ</div>
                                        <div class="col"><p class="arabic_center">شَ غَ طَ</div>
                                        <div class="col"><p class="arabic_center">حَ رَ ظَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ غَ ضَ</div>
                                        <div class="col"><p class="arabic_center">ضَ عَ ذَ</div>
                                        <div class="col"><p class="arabic_center">زَ خَ ظَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ غَ صَ</div>
                                        <div class="col"><p class="arabic_center">طَ عَ ظَ</div>
                                        <div class="col"><p class="arabic_center">شَ رَ ظَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ رَ زَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ شَ صَ ضَ طَ ظَ عَ غَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 19</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَ فَ صَ</div>
                                        <div class="col"><p class="arabic_center">فَ عَ ضَ</div>
                                        <div class="col"><p class="arabic_center">فَ اَ غَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَ فَ ظَ</div>
                                        <div class="col"><p class="arabic_center">غَ جَ زَ</div>
                                        <div class="col"><p class="arabic_center">فَ تَ حَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ خَ ضَ</div>
                                        <div class="col"><p class="arabic_center">صَ فَ غَ</div>
                                        <div class="col"><p class="arabic_center">طَ عَ دَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ غَ ضَ</div>
                                        <div class="col"><p class="arabic_center">خَ فَ ذَ</div>
                                        <div class="col"><p class="arabic_center">سَ غَ ظَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ فَ رَ</div>
                                        <div class="col"><p class="arabic_center">ثَ غَ طَ<p></div>
                                        <div class="col"><p class="arabic_center">فَ زَ عَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ رَ زَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ شَ صَ ضَ طَ ظَ عَ غَ فَ<p></div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 20</h4>
                                    <br>
                                </div>
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَ قَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَ رَ قَ</div>
                                        <div class="col"><p class="arabic_center">قَ طَ فَ</div>
                                        <div class="col"><p class="arabic_center">قَ بَ ضَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ عَ فَ</div>
                                        <div class="col"><p class="arabic_center">فَ قَ ظَ</div>
                                        <div class="col"><p class="arabic_center">ثَ غَ ظَ</div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ قَ دَ</div>
                                        <div class="col"><p class="arabic_center">قَ فَ صَ</div>
                                        <div class="col"><p class="arabic_center">حَ ذَ خَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ قَ قَ</div>
                                        <div class="col"><p class="arabic_center">شَ فَ عَ</div>
                                        <div class="col"><p class="arabic_center">ضَ غَ طَ</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ بَ تَ ثَ جَ حَ خَ دَ ذَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَ ضَ</div>
                                        <div class="col"><p class="arabic_center">سَ شَ</div>
                                        <div class="col"><p class="arabic_center">رَ زَ</div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَ قَ</div>
                                        <div class="col"><p class="arabic_center">عَ غَ</div>
                                        <div class="col"><p class="arabic_center">طَ ظَ</div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                    <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 21</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَ قَ</p></div>
                                        <div class="col"><p class="arabic_center"> كَ قَ حَ</p></div>
                                        <div class="col"><p class="arabic_center"> كَ جَ قَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> سَ كَ رَ</p></div>
                                        <div class="col"><p class="arabic_center"> عَ ظَ فَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ حَ كَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  ذَ عَ سَ</p></div>
                                        <div class="col"><p class="arabic_center"> قَ كَ فَ</p></div>
                                        <div class="col"><p class="arabic_center"> جَ كَ تَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> رَ كَ طَ</p></div>
                                        <div class="col"><p class="arabic_center"> غَ فَ كَ</p></div>
                                        <div class="col"><p class="arabic_center"> صَ دَ سَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center"> قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 22</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ لَ طَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ عَ لَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ لَ بَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَ فَ صَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ لَ ظَ</p></div>
                                        <div class="col"><p class="arabic_center">ذَ كَ رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَ كَ لَ </p></div>
                                        <div class="col"><p class="arabic_center">دَ غَ سَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ لَ فَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَ لَ لَ</p></div>
                                        <div class="col"><p class="arabic_center">زَ تَ ظَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ رَ عَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 23</h4>
                                    <br>
                                </div>
                                <div class="container">
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">مَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">جَ مَ عَ</p></div>
                                            <div class="col"><p class="arabic_center">لَ مَ سَ</p></div>
                                            <div class="col"><p class="arabic_center">غَ مَ ضَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">خَ لَ ظَ</p></div>
                                            <div class="col"><p class="arabic_center">كَ رَ مَ</p></div>
                                            <div class="col"><p class="arabic_center">فَ رَ صَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">مَ ذَ كَ </p></div>
                                            <div class="col"><p class="arabic_center">ظَ ت ضَ </p></div>
                                            <div class="col"><p class="arabic_center">صَ مَ دَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">غَ مَ مَ</p></div>
                                            <div class="col"><p class="arabic_center">فَ كَ جَ</p></div>
                                            <div class="col"><p class="arabic_center">سَ مَ لَ </p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">ذَ</p></div>
                                            <div class="col"><p class="arabic_center">دَ</p></div>
                                            <div class="col"><p class="arabic_center">خَ</p></div>
                                            <div class="col"><p class="arabic_center">حَ</p></div>
                                            <div class="col"><p class="arabic_center">جَ</p></div>
                                            <div class="col"><p class="arabic_center">ثَ</p></div>
                                            <div class="col"><p class="arabic_center">ت</p></div>
                                            <div class="col"><p class="arabic_center">بَ</p></div>
                                            <div class="col"><p class="arabic_center">اَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">ظَ</p></div>
                                            <div class="col"><p class="arabic_center">طَ</p></div>
                                            <div class="col"><p class="arabic_center">ضَ</p></div>
                                            <div class="col"><p class="arabic_center">صَ</p></div>
                                            <div class="col"><p class="arabic_center">شَ</p></div>
                                            <div class="col"><p class="arabic_center">سَ </p></div>
                                            <div class="col"><p class="arabic_center">زَ</p></div>
                                            <div class="col"><p class="arabic_center">رَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">مَ</p></div>
                                            <div class="col"><p class="arabic_center">لَ</p></div>
                                            <div class="col"><p class="arabic_center">كَ</p></div>
                                            <div class="col"><p class="arabic_center">قَ</p></div>
                                            <div class="col"><p class="arabic_center">فَ</p></div>
                                            <div class="col"><p class="arabic_center">غَ</p></div>
                                            <div class="col"><p class="arabic_center">عَ</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 24</h4>
                                    <br>
                                </div>
                                <div class="container">
                                <div class="row">
                                        <div class="col"><p class="arabic_center">نَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَ عَ نَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ غَ شَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ ظَ فَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ لَ قَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ رَ نَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ مَ ضَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَ نَ دَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ ذَ بَ</p></div>
                                        <div class="col"><p class="arabic_center">زَ مَ نَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَ نَ نَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ حَ ظَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ نَ سَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَ </p></div>
                                        <div class="col"><p class="arabic_center">مَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 25</h4>
                                    <br>
                                </div>
                                <div class="container">
                                <div class="row">
                                        <div class="col"><p class="arabic_center">وَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَ زَ رَ</p></div>
                                        <div class="col"><p class="arabic_center">وَ لَ غَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ وَ مَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ زَ عَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ فَ نَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ طَ نَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ وَ صَ</p></div>
                                        <div class="col"><p class="arabic_center"> سَ كَ ثَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ فَ نَ</p></div>  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَ نَ وَ</p></div>
                                        <div class="col"><p class="arabic_center">ذَ حَ صَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ وَ لَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ </p></div>
                                        <div class="col"><p class="arabic_center">مَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 26</h4>
                                    <br>
                                </div>
                                <div class="container">
                                <div class="row">
                                        <div class="col"><p class="arabic_center">هَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَ وَ هَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ هَ دَ</p></div>
                                        <div class="col"><p class="arabic_center">هَ مَ شَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَ ضَ حَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ هَ رَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ حَ عَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ هَ قَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ مَ نَ </p></div>
                                        <div class="col"><p class="arabic_center">وَ هَ ظَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ هَ هَ </p></div>
                                        <div class="col"><p class="arabic_center">ذَ صَ سَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ هَ لَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ </p></div>
                                        <div class="col"><p class="arabic_center">مَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 27</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَ يَ نَ </p></div>
                                        <div class="col"><p class="arabic_center">صَ حَ رَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ يَ رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَ يَ خَ</p></div>
                                        <div class="col"><p class="arabic_center">وَ كَ لَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ يَ غَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَ قَ فَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ يَ عَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ هَ ظَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَ دَ يَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ ذَ ثَ</p></div>
                                        <div class="col"><p class="arabic_center">هَ يَ مَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَ</p></div>
                                        <div class="col"><p class="arabic_center">هَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ </p></div>
                                        <div class="col"><p class="arabic_center">مَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 28</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">دَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَ</p></div>
                                        <div class="col"><p class="arabic_center">ت</p></div>
                                        <div class="col"><p class="arabic_center">بَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَ</p></div>
                                        <div class="col"><p class="arabic_center">هَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ </p></div>
                                        <div class="col"><p class="arabic_center">مَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">فَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                        <div class="col"><p class="arabic_center">مَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ</p></div>
                                        <div class="col"><p class="arabic_center">هَ</p></div>
                                        <div class="col"><p class="arabic_center">يَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ </p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَ</p></div>
                                        <div class="col"><p class="arabic_center">زَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">صَ</p></div>
                                        <div class="col"><p class="arabic_center">طَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End of Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 4</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Logout-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" jika ingin meninggalkan halaman.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-success" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

<?php
  }
} else {
  header('location: logout.php');
}
ob_flush();
?>