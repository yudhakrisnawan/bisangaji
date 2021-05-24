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