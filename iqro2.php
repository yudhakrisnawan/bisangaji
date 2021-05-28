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
                                    <h4 align="center">Iqro 2</h4>
                                    <br>
                                </div>
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 1</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ دَ = بَدَ<p></div>
                                        <div class="col"><p class="arabic_center">بَ تَ = بَتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ دَ = بَدَ<p></div>
                                        <div class="col"><p class="arabic_center">بَ تَ = بَتَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَوَ</p></div>
                                        <div class="col"><p class="arabic_center">بَر</p></div>
                                        <div class="col"><p class="arabic_center">تَدَ</p></div>
                                        <div class="col"><p class="arabic_center">تَتَ</p></div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَزَ</p></div>
                                        <div class="col"><p class="arabic_center">تَرَ</p></div>
                                        <div class="col"><p class="arabic_center">بَذَ</p></div>
                                        <div class="col"><p class="arabic_center">بَبَ</p></div>
                                    </div>
                                    <hr>

                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَشَ</p></div>
                                        <div class="col"><p class="arabic_center">تَشَ</p></div>
                                        <div class="col"><p class="arabic_center">تَذَ</p></div>
                                        <div class="col"><p class="arabic_center">بَثَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَأتَ</p></div>
                                        <div class="col"><p class="arabic_center">تَ أَ</p></div>
                                        <div class="col"><p class="arabic_center">بَأتَ</p></div>
                                        <div class="col"><p class="arabic_center">بَ أَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَوَ</p></div>
                                        <div class="col"><p class="arabic_center">بَرَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَرَ</p></div>
                                        <div class="col"><p class="arabic_center">شَبَ</p></div>
                                    </div>
                                        <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ سَ</p></div>
                                        <div class="col"><p class="arabic_center">كَ يَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ ك  </p></div>
                                        <div class="col"><p class="arabic_center">طَ هَ</p></div>
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
                                        <div class="col"><p class="arabic_center">نَ بَ أَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ = نَ...</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَنَنَ</p></div>
                                        <div class="col"><p class="arabic_center">نَبَبَ</p></div>
                                        <div class="col"><p class="arabic_center"> نَتَ</p></div>
                                        <div class="col"><p class="arabic_center">نَنَنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَتَبَ</p></div>
                                        <div class="col"><p class="arabic_center">تَبَنَ</p></div>
                                        <div class="col"><p class="arabic_center">بَنَتَ</p></div>
                                        <div class="col"><p class="arabic_center">نَبَتَ    </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَبَذَ</p></div>
                                        <div class="col"><p class="arabic_center">بَذَنَ</p></div>
                                        <div class="col"><p class="arabic_center">بَنَرَ</p></div>
                                        <div class="col"><p class="arabic_center">رَبَنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَنَذَ</p></div>
                                        <div class="col"><p class="arabic_center">ذَنَبَ</p></div>
                                        <div class="col"><p class="arabic_center">بَذَرَ</p></div>
                                        <div class="col"><p class="arabic_center">بَدَرَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَبَأَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ بَ أَ</p></div>
                                        <div class="col"><p class="arabic_center">بَزَعَ    </p></div>
                                        <div class="col"><p class="arabic_center">ذَطَحَ    </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَوَف</p></div>
                                        <div class="col"><p class="arabic_center">وَنَأَ</p></div>
                                        <div class="col"><p class="arabic_center">تَشَبَ    </p></div>
                                        <div class="col"><p class="arabic_center">شَبَتَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَوَنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَنَنَ</p></div>
                                        <div class="col"><p class="arabic_center">دَنَتَ    </p></div>
                                        <div class="col"><p class="arabic_center">بَدَن</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
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
                                        <div class="col"><p class="arabic_center">ي ت = يَتَ</p></div>
                                        <div class="col"><p class="arabic_center">ي = ي...</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَنَرَ</p></div>
                                        <div class="col"><p class="arabic_center">رَنَيَ    </p></div>
                                        <div class="col"><p class="arabic_center">يَبَرَ</p></div>
                                        <div class="col"><p class="arabic_center">رَبَيَ    </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَنَتَ</p></div>
                                        <div class="col"><p class="arabic_center">يَدَنَ</p></div>
                                        <div class="col"><p class="arabic_center">بَنَيَ    </p></div>
                                        <div class="col"><p class="arabic_center">بَيَنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَدَيَ</p></div>
                                        <div class="col"><p class="arabic_center">نَذَرَ</p></div>
                                        <div class="col"><p class="arabic_center">نَزَلَ  </p></div>
                                        <div class="col"><p class="arabic_center">ذَهَبَ   </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَنَيَ</p></div>
                                        <div class="col"><p class="arabic_center">زَيَنَ    </p></div>
                                        <div class="col"><p class="arabic_center">بَتَرَ</p></div>
                                        <div class="col"><p class="arabic_center">بَتَرَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَيَتَ</p></div>
                                        <div class="col"><p class="arabic_center">يأَبَ</p></div>
                                        <div class="col"><p class="arabic_center">شَنَأَ    </p></div>
                                        <div class="col"><p class="arabic_center">أَشَشَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَنَتَ</p> </div>
                                        <div class="col"><p class="arabic_center">أَتَيَ</p></div>
                                        <div class="col"><p class="arabic_center">نَظَرَ  </p></div>
                                        <div class="col"><p class="arabic_center">رَزَقَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَنَ</p></div>
                                        <div class="col"><p class="arabic_center">سَيَ</p></div>
                                        <div class="col"><p class="arabic_center">نَمَ</p></div>
                                        <div class="col"><p class="arabic_center">يَيَيَ</p></div>
                                    </div>
                                    <hr>
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
                                        <div class="col"><p class="arabic_center">حَجَرَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ رَ = جَرَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَدَ</p></div>
                                        <div class="col"><p class="arabic_center">خَدَ  </p></div>
                                        <div class="col"><p class="arabic_center">حَبَ  </p></div>
                                        <div class="col"><p class="arabic_center">بَجَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَتَ</p></div>
                                        <div class="col"><p class="arabic_center">خَزَ</p></div>
                                        <div class="col"><p class="arabic_center">هَوَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَجَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَشَ</p></div>
                                        <div class="col"><p class="arabic_center">جَسَ  </p></div>
                                        <div class="col"><p class="arabic_center">حَيَ  </p></div>
                                        <div class="col"><p class="arabic_center">نَحَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَطَ</p></div>
                                        <div class="col"><p class="arabic_center">يَضَ  </p></div>
                                        <div class="col"><p class="arabic_center">رَصَ</p></div>
                                        <div class="col"><p class="arabic_center">مَشَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَفَ</p></div>
                                        <div class="col"><p class="arabic_center">َزَ</p></div>
                                        <div class="col"><p class="arabic_center">دَعَ  </p></div>
                                        <div class="col"><p class="arabic_center">ظَنَ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَيَ</p></div>
                                        <div class="col"><p class="arabic_center">خَجَحَ</p></div>
                                        <div class="col"><p class="arabic_center">يَتَمَ</p></div>
                                        <div class="col"><p class="arabic_center">يَقَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
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
                                        <div class="col"><p class="arabic_center">شَرَ = ثَرَ</p></div>
                                        <div class="col"><p class="arabic_center">سَ دَ = سَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَ رَ =  ضرَ</p></div>
                                        <div class="col"><p class="arabic_center">ص دَ = صَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَسَ</p></div>
                                        <div class="col"><p class="arabic_center">شَتَ  </p></div>
                                        <div class="col"><p class="arabic_center">بَسَ</p></div>
                                        <div class="col"><p class="arabic_center">سَنَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">َذَ</p></div>
                                        <div class="col"><p class="arabic_center">نَمَ  </p></div>
                                        <div class="col"><p class="arabic_center">صَحَ  </p></div>
                                        <div class="col"><p class="arabic_center">شَرَ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَقَ</p></div>
                                        <div class="col"><p class="arabic_center">غوَ</p></div>
                                        <div class="col"><p class="arabic_center">صَلَ  </p></div>
                                        <div class="col"><p class="arabic_center">سَيَ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَزَ</p></div>
                                        <div class="col"><p class="arabic_center">طَهَ  </p></div>
                                        <div class="col"><p class="arabic_center">ضَفَ</p></div>
                                        <div class="col"><p class="arabic_center">نَظَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَدَ</p></div>
                                        <div class="col"><p class="arabic_center">نَذَ</p></div>
                                        <div class="col"><p class="arabic_center">خَشَ  </p></div>
                                        <div class="col"><p class="arabic_center">َكَ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَضَ</p></div>
                                        <div class="col"><p class="arabic_center">يَيَ</p></div>
                                        <div class="col"><p class="arabic_center">شَأَ</p></div>
                                        <div class="col"><p class="arabic_center">جَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
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
                                        <div class="col"><p class="arabic_center">بَ عَ = بَعَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ دَ = عَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ عَ دَ = بَعَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَتَعَ</p></div>
                                        <div class="col"><p class="arabic_center">عَتَرَ    </p></div>
                                        <div class="col"><p class="arabic_center">تَعَرَ</p></div>
                                        <div class="col"><p class="arabic_center">رَعَتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَيَظَ</p></div>
                                        <div class="col"><p class="arabic_center">ىَ غَ ظَ</p></div>
                                        <div class="col"><p class="arabic_center">صَعَبَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ بَ صَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَبَعَ</p></div>
                                        <div class="col"><p class="arabic_center">شَطَكَ</p></div>
                                        <div class="col"><p class="arabic_center">جَعَلَ    </p></div>
                                        <div class="col"><p class="arabic_center">خَدَرَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَنَعَ</p></div>
                                        <div class="col"><p class="arabic_center">عَتَقَ    </p></div>
                                        <div class="col"><p class="arabic_center">ثَغَفَ    </p></div>
                                        <div class="col"><p class="arabic_center">غَيَرَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَثَعَ</p></div>
                                        <div class="col"><p class="arabic_center">رَهَقَ</p></div>
                                        <div class="col"><p class="arabic_center">نَظَمَ    </p></div>
                                        <div class="col"><p class="arabic_center">ثَقَلَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَغَضَ</p></div>
                                        <div class="col"><p class="arabic_center">غَوَض</p></div>
                                        <div class="col"><p class="arabic_center">نَعَسَ    </p></div>
                                        <div class="col"><p class="arabic_center">عَزَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
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
                                        <div class="col"><p class="arabic_center">رَخَقَ</p></div>
                                        <div class="col"><p class="arabic_center">هَدَمَ    </p></div>
                                        <div class="col"><p class="arabic_center">خَطَبَ</p></div>
                                        <div class="col"><p class="arabic_center">غَأَ غَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَسَعَ</p></div>
                                        <div class="col"><p class="arabic_center">عَنَقَ    </p></div>
                                        <div class="col"><p class="arabic_center">صَرَفَ</p></div>
                                        <div class="col"><p class="arabic_center">عَظَمَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَحَكَ</p></div>
                                        <div class="col"><p class="arabic_center">غسَقَ</p></div>
                                        <div class="col"><p class="arabic_center">شَغَلَ    </p></div>
                                        <div class="col"><p class="arabic_center">وَجَدَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">Jika bacaan sering di Panjang-panjangkan karena berfikir membacanya putus putus saja!<P></p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَخَرَ</p></div>
                                        <div class="col"><p class="arabic_center">وَضَعَ</p></div>
                                        <div class="col"><p class="arabic_center">أخَذَ </p></div>
                                        <div class="col"><p class="arabic_center">طَلَبَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَظَعَ</p></div>
                                        <div class="col"><p class="arabic_center">فَتَحَ    </p></div>
                                        <div class="col"><p class="arabic_center">بَتَقَ    </p></div>
                                        <div class="col"><p class="arabic_center">عَبَسَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَضَبَ</p></div>
                                        <div class="col"><p class="arabic_center">نَسَطَ    </p></div>
                                        <div class="col"><p class="arabic_center">حَسَبَ</p></div>
                                        <div class="col"><p class="arabic_center">غَزَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
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
                                        <div class="col"><p class="arabic_center">نَفَقَ</p></div>
                                        <div class="col"><p class="arabic_center">نَ فَ قَ</p></div>  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَفَلَ = قَ فَ لَ</p></div>
                                        <div class="col"><p class="arabic_center">فَفَمَ = فَ  قَ مَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَقَعَ</p></div>
                                        <div class="col"><p class="arabic_center">قَبَحَ</p></div>
                                        <div class="col"><p class="arabic_center">نَفَلَ</p></div>
                                        <div class="col"><p class="arabic_center">فَرَغَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَذَرَ</p></div>
                                        <div class="col"><p class="arabic_center">وَزَكَ</p></div>
                                        <div class="col"><p class="arabic_center">جَرَمَ</p></div>
                                        <div class="col"><p class="arabic_center">فَصَحَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَظَفَ</p></div>
                                        <div class="col"><p class="arabic_center">شَرَعَ</p></div>
                                        <div class="col"><p class="arabic_center">يَخَضَ</p></div>
                                        <div class="col"><p class="arabic_center">هَيَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَفَعَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَقَلَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَغَطَ</p></div>
                                        <div class="col"><p class="arabic_center">يَدَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَفَرَ</p></div>
                                        <div class="col"><p class="arabic_center">طَبَقَ</p></div>
                                        <div class="col"><p class="arabic_center">يَسَرَ</p></div>
                                        <div class="col"><p class="arabic_center">عَظَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَعَيَ</p></div>
                                        <div class="col"><p class="arabic_center">فَرَشَ</p></div>
                                        <div class="col"><p class="arabic_center">فَرَدَ</p></div>
                                        <div class="col"><p class="arabic_center">عَقَمَ</p></div>
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
                                        <div class="col"><p class="arabic_center">يَقَنَ</p></div>
                                        <div class="col"><p class="arabic_center">بَيَعَ</p></div>
                                        <div class="col"><p class="arabic_center">نَصَحَ</p></div>
                                        <div class="col"><p class="arabic_center">سَأَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَرَفَ</p></div>
                                        <div class="col"><p class="arabic_center">وَقَبَ</p></div>
                                        <div class="col"><p class="arabic_center">بَرَزَ</p></div>
                                        <div class="col"><p class="arabic_center">عَطَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَعَلَ</p></div>
                                        <div class="col"><p class="arabic_center">ذَهَبَ</p></div>
                                        <div class="col"><p class="arabic_center">سَفَقَ</p></div>
                                        <div class="col"><p class="arabic_center">خَرَجَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">Membacanya boleh PUTUS-PUTUS meskipun digandeng hurufnya</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَفَسَ</p></div>
                                        <div class="col"><p class="arabic_center">وَضَعَ</p></div>
                                        <div class="col"><p class="arabic_center">فَتَكَ</p></div>
                                        <div class="col"><p class="arabic_center">غَسَفَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَشَرَ</p></div>
                                        <div class="col"><p class="arabic_center">سَفَلَ</p></div>
                                        <div class="col"><p class="arabic_center">خَتَمَ</p></div>
                                        <div class="col"><p class="arabic_center">بَعَثَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَظَمَ</p></div>
                                        <div class="col"><p class="arabic_center">فَقَدَ</p></div>
                                        <div class="col"><p class="arabic_center">جَزَعَ</p></div>
                                        <div class="col"><p class="arabic_center">شَطَيَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَيَثَ</p></div>
                                        <div class="col"><p class="arabic_center">وَسَقَ</p></div>
                                        <div class="col"><p class="arabic_center">صَعَبَ</p></div>
                                        <div class="col"><p class="arabic_center">غَفَكَ</p></div>
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
                                        <div class="col"><p class="arabic_center">كَ  تَ بَ = كَتَبَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَ كَ تَ = سَكَتَ =سَكَتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَرَكَ</p></div>
                                        <div class="col"><p class="arabic_center">حَكَمَ</p></div>
                                        <div class="col"><p class="arabic_center">أَكَلَ</p></div>
                                        <div class="col"><p class="arabic_center">كَذَبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَتَيَ</p></div>
                                        <div class="col"><p class="arabic_center">نَكَحَ</p></div>
                                        <div class="col"><p class="arabic_center">نَقَضَ</p></div>
                                        <div class="col"><p class="arabic_center">كَفَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَطَيَ</p></div>
                                        <div class="col"><p class="arabic_center">زَكَأَ</p></div>
                                        <div class="col"><p class="arabic_center">حَفَظَ</p></div>
                                        <div class="col"><p class="arabic_center">كَدَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَعَكَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَنَأَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَرَبَ</p></div>
                                        <div class="col"><p class="arabic_center">كَتَعَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَصَلَ</p></div>
                                        <div class="col"><p class="arabic_center">وَيَرَ</p></div>
                                        <div class="col"><p class="arabic_center">غَسَقَ</p></div>
                                        <div class="col"><p class="arabic_center">كَشَفَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَدَكَ</p></div>
                                        <div class="col"><p class="arabic_center">هَكَذَ</p></div>
                                        <div class="col"><p class="arabic_center">خَدَكَ</p></div>
                                        <div class="col"><p class="arabic_center">كَظَمَ</p></div>
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
                                        <div class="col"><p class="arabic_center">أَ</p></div>
                                        <div class="col"><p class="arabic_center">لَنَأَ</p></div>
                                        <div class="col"><p class="arabic_center">لَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black" class="arabic_center">Bila dimuka/ditengah bukan أَ tapi لَ</p></div>
                                        <div class="col"><p class="arabic_center">...لَ...  لَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَ بَ دَ = لَبَدَ  = لَ أَ = لَأَ = لَأَ</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَجَلَ</p></div>
                                        <div class="col"><p class="arabic_center">جَلَلَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ لَ لَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَنَبَأَ</p></div>
                                        <div class="col"><p class="arabic_center">لَضَلَلَ</p></div>
                                        <div class="col"><p class="arabic_center">لَسَأَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَبَلَغَ</p></div>
                                        <div class="col"><p class="arabic_center">لَأَكَلَ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَلَأَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَخَلَأَ</p></div>
                                        <div class="col"><p class="arabic_center">وَخَطَأَ</p></div>
                                        <div class="col"><p class="arabic_center">لَسَلَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَحَلَلَ</p></div>
                                        <div class="col"><p class="arabic_center">لَلَأَمَ</p></div>
                                        <div class="col"><p class="arabic_center">سَأَلَكَ</p></div>
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
                                        <div class="col"><p class="arabic_center">جَمَعَ</p></div>
                                        <div class="col"><p class="arabic_center">جَ مَ عَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَخَدَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَلَمَ</p></div>
                                        <div class="col"><p class="arabic_center">صَمَدَ</p></div>
                                        <div class="col"><p class="arabic_center">عَمَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَسَدَ</p></div>
                                        <div class="col"><p class="arabic_center">غَنَمَ</p></div>
                                        <div class="col"><p class="arabic_center">نَفَحَ</p></div>
                                        <div class="col"><p class="arabic_center">هَمَزَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَمَرَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَمَأَ</p></div>
                                        <div class="col"><p class="arabic_center">بَلَغَ</p></div>
                                        <div class="col"><p class="arabic_center">يَمَنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَقَمَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَوَيَ</p></div>
                                        <div class="col"><p class="arabic_center">طَمَعَ</p></div>
                                        <div class="col"><p class="arabic_center">كَمَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأذَنَ</p></div>
                                        <div class="col"><p class="arabic_center">مَلَكَ</p></div>
                                        <div class="col"><p class="arabic_center">صَنَعَ</p></div>
                                        <div class="col"><p class="arabic_center">زَمَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَلَلَ</p></div>
                                        <div class="col"><p class="arabic_center">هَشَمَ</p></div>
                                        <div class="col"><p class="arabic_center">كَذَبَ</p></div>
                                        <div class="col"><p class="arabic_center">هَجَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَأَكَلَ</p></div>
                                        <div class="col"><p class="arabic_center">قَلَمَ</p></div>
                                        <div class="col"><p class="arabic_center">بَثَمَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَحَمَ</p></div>
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
                                        <div class="col"><p class="arabic_center">نَ هَ رَ = نَهَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَ لَ كَ = هَلَكَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ هَ دَ = شَهَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَلَفَ</p></div>
                                        <div class="col"><p class="arabic_center">سَهَيَ</p></div>
                                        <div class="col"><p class="arabic_center">كَهَنَ</p></div>
                                        <div class="col"><p class="arabic_center">رَهَقَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَخَذَ</p></div>
                                        <div class="col"><p class="arabic_center">هَيَمَ</p></div>
                                        <div class="col"><p class="arabic_center">كَهَلَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَهَشَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَجَزَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَهَشَ</p></div>
                                        <div class="col"><p class="arabic_center">عَهَدَ</p></div>
                                        <div class="col"><p class="arabic_center">لَهَبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَفَلَ</p></div>
                                        <div class="col"><p class="arabic_center">هَمَسَ</p></div>
                                        <div class="col"><p class="arabic_center">قَهَرَ</p></div>
                                        <div class="col"><p class="arabic_center">طَلَعَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَيَ</p></div>
                                        <div class="col"><p class="arabic_center">سَيَ</p></div>
                                        <div class="col"><p class="arabic_center">كَلَ</p></div>
                                        <div class="col"><p class="arabic_center">مَنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَجَ</p></div>
                                        <div class="col"><p class="arabic_center">سَهَجَ</p></div>
                                        <div class="col"><p class="arabic_center">سَهَجَ</p></div>
                                        <div class="col"><p class="arabic_center">مَكَ</p></div>
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
                                 <div class="col"><p align="center" style="color: black">Bila perlu bisa dikenalkan huruf Alif</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col"><p align="center" style="color: black">Bacalah panjang aa... baa...</p></div>
                                    <div class="col"><p align="center" style="color: black" class="arabic_center">baa...= باَ aa...= اَ..</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَا</p></div>
                                        <div class="col"><p class="arabic_center">نَا</p></div>
                                        <div class="col"><p class="arabic_center">كَا</p></div>
                                        <div class="col"><p class="arabic_center">لَا</p></div>      
                                        <div class="col"><p class="arabic_center">ذَا</p></div>
                                        <div class="col"><p class="arabic_center">هَا</p></div>
                                        <div class="col"><p class="arabic_center">مَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَايَ</p></div>
                                        <div class="col"><p class="arabic_center">يَانَ</p></div>
                                        <div class="col"><p class="arabic_center">تَانَ</p></div>
                                        <div class="col"><p class="arabic_center">بَاتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَاتَ</p></div>
                                        <div class="col"><p class="arabic_center">نَتَ</p></div>
                                        <div class="col"><p class="arabic_center">تَانَ</p></div>
                                        <div class="col"><p class="arabic_center">تَنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَايَ</p></div>
                                        <div class="col"><p class="arabic_center">بَيَ</p></div>
                                        <div class="col"><p class="arabic_center">يَابَ</p></div>
                                        <div class="col"><p class="arabic_center">يَبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَايَنَا</p></div>
                                        <div class="col"><p class="arabic_center">بَيَانَ</p></div>
                                        <div class="col"><p class="arabic_center">بَايَنَ</p></div>
                                        <div class="col"><p class="arabic_center">بَيَنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَابَدَا</p></div>
                                        <div class="col"><p class="arabic_center">عَبَادَ</p></div>
                                        <div class="col"><p class="arabic_center">عَابَدَ</p></div>
                                        <div class="col"><p class="arabic_center">عَبَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَاحَمَا</p></div>
                                        <div class="col"><p class="arabic_center">رَحَمَا</p></div>
                                        <div class="col"><p class="arabic_center">رَاحَمَ</p></div>
                                        <div class="col"><p class="arabic_center">رَحَمَ</p></div>
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
                                        <div class="col"><p align="center" style="color: black">Bacaan harus jelas BEDA <b>MANA PANJANG - MANA PENDEK</b></p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَابَتَا</p></div>
                                        <div class="col"><p class="arabic_center">ثَبَاتَا</p></div>
                                        <div class="col"><p class="arabic_center">ثَبَاتَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَابَتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَابَدَا</p></div>
                                        <div class="col"><p class="arabic_center">زَبَادَا</p></div>
                                        <div class="col"><p class="arabic_center">زَبَادَ</p></div>
                                        <div class="col"><p class="arabic_center">زَابَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَاوَبَا</p></div>
                                        <div class="col"><p class="arabic_center">تَوَابَا</p></div>
                                        <div class="col"><p class="arabic_center">تَوَابَ</p></div>
                                        <div class="col"><p class="arabic_center">تَاوَبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَاتَبَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَاقَلَ</p></div>
                                        <div class="col"><p class="arabic_center">فَاعَلَ</p></div>
                                        <div class="col"><p class="arabic_center">جَاهَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَالَمَ</p></div>
                                        <div class="col"><p class="arabic_center">غَازَوَ</p></div>
                                        <div class="col"><p class="arabic_center">طَالَبَ</p></div>
                                        <div class="col"><p class="arabic_center">نَاسَأَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَالَلَ</p></div>
                                        <div class="col"><p class="arabic_center">لاَهَبَ</p></div>
                                        <div class="col"><p class="arabic_center">نَاعَمَ</p></div>
                                        <div class="col"><p class="arabic_center">حَاسَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَنَانَ</p></div>
                                        <div class="col"><p class="arabic_center">نَنَا</p></div>
                                        <div class="col"><p class="arabic_center">نَنَنَانَ</p></div>
                                        <div class="col"><p class="arabic_center">نَنَانَ</p></div>
                                        <div class="col"><p class="arabic_center">نَانَنَا</p></div>
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
                                        <div class="col"><p class="arabic_center">ظَهَارَ</p></div>
                                        <div class="col"><p class="arabic_center">خَلاَقَ</p></div>
                                        <div class="col"><p class="arabic_center">اَعَادَ</p></div>
                                        <div class="col"><p class="arabic_center">أَصَابَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَمَعَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَمَأَ</p></div>
                                        <div class="col"><p class="arabic_center">اَقَامَ</p></div>
                                        <div class="col"><p class="arabic_center">يَشَأَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَامَعَ</p></div>
                                        <div class="col"><p class="arabic_center">وَاعَدَ</p></div>
                                        <div class="col"><p class="arabic_center">قَاتَلَ</p></div>
                                        <div class="col"><p class="arabic_center">غَاسَقَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col"><p class="arabic_center">لَاَثَرَ</p></div>
                                        <div class="col"><p align="center" style="color: black">   Keliru Baca Panjang - Pendek   </p></div>
                                        <div class="col"><p class="arabic_center">لاَمَنَعَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَهَمَنَ</p></div>
                                        <div class="col"><p align="center" style="color: black">   adalah KESALAHAN BESAR!!   </p></div> 
                                        <div class="col"><p class="arabic_center">لَاَخَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَاهَقَ</p></div>
                                        <div class="col"><p class="arabic_center">بَلَغَ</p></div>
                                        <div class="col"><p class="arabic_center">حَلَلَ</p></div>
                                        <div class="col"><p class="arabic_center">نَبَذَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلَهَا</p></div>
                                        <div class="col"><p class="arabic_center">مَلَكَا</p></div>
                                        <div class="col"><p class="arabic_center">غَمَدَ</p></div>
                                        <div class="col"><p class="arabic_center">اَفَلاَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَصَلَوَاتَ</p></div>
                                        <div class="col"><p class="arabic_center">مَاعَرَفَا</p></div>
                                        <div class="col"><p class="arabic_center">تَشَابَهَا</p></div>
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
                                        <div class="col"><p class="arabic_center">ضَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ</p></div>
                                        <div class="col"><p class="arabic_center">ذَ</p></div>
                                        <div class="col"><p class="arabic_center">غَ</p></div>
                                        <div class="col"><p class="arabic_center">خَ</p></div>
                                        <div class="col"><p class="arabic_center">قَ</p></div>
                                        <div class="col"><p class="arabic_center">هَ</p></div>
                                        <div class="col"><p class="arabic_center">حَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                        <div class="col"><p class="arabic_center">عَ</p></div>
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                        <div class="col"><p class="arabic_center">شَ</p></div>
                                        <div class="col"><p class="arabic_center">تَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">Disiplin PANJANG PENDEK adalah MUTLAK dan PASTI maka.....hati-hatilah</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَمَدَا</p></div>
                                        <div class="col"><p class="arabic_center">خَتَمَا</p></div>
                                        <div class="col"><p class="arabic_center">كَسَبَا</p></div>
                                        <div class="col"><p class="arabic_center">عَقَدَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَبَلاَ</p></div>
                                        <div class="col"><p class="arabic_center">خَلَفَا</p></div>
                                        <div class="col"><p class="arabic_center">غَفَلاَ</p></div>
                                        <div class="col"><p class="arabic_center">بَعَثَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَاسَبَا</p></div>
                                        <div class="col"><p class="arabic_center">بَايَنَا</p></div>
                                        <div class="col"><p class="arabic_center">مَالَهَا</p></div>
                                        <div class="col"><p class="arabic_center">خَاطَبَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَارَضَا</p></div>
                                        <div class="col"><p class="arabic_center">نَاشَرَا</p></div>
                                        <div class="col"><p class="arabic_center">عَاظَمَا</p></div>
                                        <div class="col"><p class="arabic_center">خَالَطَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَمَنَ</p></div>
                                        <div class="col"><p class="arabic_center">لَاَسَرَ</p></div>
                                        <div class="col"><p class="arabic_center">لَاَعَزَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَاَمَاتَهَا</p></div>
                                        <div class="col"><p class="arabic_center">اَمَانَتَهَا</p></div>
                                        <div class="col"><p class="arabic_center">صَدَقَاتَكَ</p></div>
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
                                        <div class="col"><p class="arabic_center">فَهَلَكَ</p></div>
                                        <div class="col"><p class="arabic_center">هَلَكَتَا</p></div>
                                        <div class="col"><p class="arabic_center">هَالَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَتَلاَ</p></div>
                                        <div class="col"><p class="arabic_center">قَتَلَتَا</p></div>
                                        <div class="col"><p class="arabic_center">قَاتَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَهَدَمَا</p></div>
                                        <div class="col"><p class="arabic_center">هَدَمَتَا</p></div>
                                        <div class="col"><p class="arabic_center">هَادَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَصَرَعَا</p></div>
                                        <div class="col"><p class="arabic_center">صَرَعَتَا</p></div>
                                        <div class="col"><p class="arabic_center">صَارَعَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَضَرَبَا</p></div>
                                        <div class="col"><p class="arabic_center">ضَرَبَتَا</p></div>
                                        <div class="col"><p class="arabic_center">ضَارَبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَهَجَمَا</p></div>
                                        <div class="col"><p class="arabic_center">هَجَمَتَا</p></div>
                                        <div class="col"><p class="arabic_center">هَاحَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَوَمَا</p></div>
                                        <div class="col"><p class="arabic_center">قَوَمَتَا</p></div>
                                        <div class="col"><p class="arabic_center">قَاوَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَرَذَلاَ</p></div>
                                        <div class="col"><p class="arabic_center">رَذَلَتَا</p></div>
                                        <div class="col"><p class="arabic_center">رَاذَلَ</p></div>
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
                                        <div class="col"><p align="center" style="color: black">Perhatikan terus PANJANG - PENDEKNYA</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلاَلَنَا</p></div>
                                        <div class="col"><p class="arabic_center">لَاَصَبَا</p></div>
                                        <div class="col"><p class="arabic_center">مَفَازَهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                    
                                        <div class="col"><p class="arabic_center">طَعَامَهَا</p></div>
                                        <div class="col"><p class="arabic_center">تَنَازَعَا</p></div>
                                        <div class="col"><p class="arabic_center">اَقَامَهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَتَمَشَ</p></div>
                                        <div class="col"><p class="arabic_center">لَبَعَثَ</p></div>
                                        <div class="col"><p class="arabic_center">فَهَلَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَصَحَكَا></div>
                                        <div class="col"><p class="arabic_center">مَلَكَتَا</p></div>
                                        <div class="col"><p class="arabic_center">فَقَتَلاَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَصَوَابَا</p></div>
                                        <div class="col"><p class="arabic_center">ظَهَرَهَا</p></div>
                                        <div class="col"><p class="arabic_center">لَاَخَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَتَيَاتَ</p></div>
                                        <div class="col"><p class="arabic_center">لَقَمَارَ</p></div>
                                        <div class="col"><p class="arabic_center">لَحَرَامَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَاسَعَد</p></div>
                                        <div class="col"><p class="arabic_center">لاَغَضَبَ</p></div>
                                        <div class="col"><p class="arabic_center">مَاسَكَنَ</p></div>
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
                                        <div class="col"><p class="arabic_center">بَ = بَا</p></div>
                                        <div class="col"><p class="arabic_center"> َ =  َ ا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَنَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَهَذَا</p></div>
                                        <div class="col"><p class="arabic_center">اَمَنَ</p></div>
                                        <div class="col"><p class="arabic_center">اَدَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَيَتَ</p></div>
                                        <div class="col"><p class="arabic_center">غَسَالَ</p></div>
                                        <div class="col"><p class="arabic_center">نَاعَمَ</p></div>
                                        <div class="col"><p class="arabic_center">وَذَاكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَارَضَ</p></div>
                                        <div class="col"><p class="arabic_center">كَسَبَا</p></div>
                                        <div class="col"><p class="arabic_center">جَاوَزَ</p></div>
                                        <div class="col"><p class="arabic_center">نَابَتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَلَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَكَانَا</p></div>
                                        <div class="col"><p class="arabic_center">خَاطَبَ</p></div>
                                        <div class="col"><p class="arabic_center">جَامَعَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَنَهَا</p></div>
                                        <div class="col"><p class="arabic_center">طَحَهَا</p></div>
                                        <div class="col"><p class="arabic_center">شَرَابَا</p></div>
                                        <div class="col"><p class="arabic_center">يَدَانَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَاَبَ</p></div>
                                        <div class="col"><p class="arabic_center">اَلاَفَ</p></div>
                                        <div class="col"><p class="arabic_center">مَقَامَ</p></div>
                                        <div class="col"><p class="arabic_center">وَذَاتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَلاَتَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَخَطَأَ</p></div>
                                        <div class="col"><p class="arabic_center">سَمَوَاتَ</p></div>
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
                                        <div class="col"><p align="center" style="color: black" class="arabic_center">ى = Dianggap tidak ada</p></div>
                                        <div class="col"><p class="arabic_center">|</p></div>
                                        <div class="col"><p class="arabic_center">سَجَا = سَجَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَنَادَى</p></div>
                                        <div class="col"><p class="arabic_center">يَتَامَى</p></div>
                                        <div class="col"><p class="arabic_center">فَاَوَى</p></div>
                                        <div class="col"><p class="arabic_center">وَاَتَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَضَى</p></div>
                                        <div class="col"><p class="arabic_center">لَعَلَى</p></div>
                                        <div class="col"><p class="arabic_center">وَعَصَى</p></div>
                                        <div class="col"><p class="arabic_center">فَهَدَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَحَهَا</p></div>
                                        <div class="col"><p class="arabic_center">ثَلَثَا</p></div>
                                        <div class="col"><p class="arabic_center">خَطَايَا</p></div>
                                        <div class="col"><p class="arabic_center">مَعَاشَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَرَابَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَالَلَ</p></div>
                                        <div class="col"><p class="arabic_center">صَوَابَ</p></div>
                                        <div class="col"><p class="arabic_center">خَالَطَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَهَادَ</p></div>
                                        <div class="col"><p class="arabic_center">غَمَامَ</p></div>
                                        <div class="col"><p class="arabic_center">وَعَاظَ</p></div>
                                        <div class="col"><p class="arabic_center">اَخَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَصَارَى</p></div>
                                        <div class="col"><p class="arabic_center">عَجَبَا</p></div>
                                        <div class="col"><p class="arabic_center">تَعَالَى</p></div>
                                        <div class="col"><p class="arabic_center">جَهَالاَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَبَصَلَهَا</p></div>
                                        <div class="col"><p class="arabic_center">مَاعَرَفَا</p></div>
                                        <div class="col"><p class="arabic_center">ثَمَرَاتَ</p></div>
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
                                        <div class="col"><p class="arabic_center">رَمَايَا</p></div>
                                        <div class="col"><p class="arabic_center">رَامَيَ</p></div>
                                        <div class="col"><p class="arabic_center">رَمَيَا</p></div>
                                        <div class="col"><p class="arabic_center">رَمَيَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَيَاعَا</p></div>
                                        <div class="col"><p class="arabic_center">بَايَعَ</p></div>
                                        <div class="col"><p class="arabic_center">بَيَعَا</p></div>
                                        <div class="col"><p class="arabic_center">بَاعَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَوَامَا</p></div>
                                        <div class="col"><p class="arabic_center">قَاوَمَ</p></div>
                                        <div class="col"><p class="arabic_center">قَوَمَا</p></div>
                                        <div class="col"><p class="arabic_center">قَامَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دَوَامَا</p></div>
                                        <div class="col"><p class="arabic_center">دَاوَمَ</p></div>
                                        <div class="col"><p class="arabic_center">دَوَمَا</p></div>
                                        <div class="col"><p class="arabic_center">دَامَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَنَايَا</p></div>
                                        <div class="col"><p class="arabic_center">عَانَيَ</p></div>
                                        <div class="col"><p class="arabic_center">عَنَيَا</p></div>
                                        <div class="col"><p class="arabic_center">عَانَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلَهَا</p></div>
                                        <div class="col"><p class="arabic_center">مَلَكَا</p></div>
                                        <div class="col"><p class="arabic_center">غَمَدَ</p></div>
                                        <div class="col"><p class="arabic_center">اَفَلاَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَاَبَ</p></div>
                                        <div class="col"><p class="arabic_center">اَلاَفَ</p></div>
                                        <div class="col"><p class="arabic_center">مَقَامَ</p></div>
                                        <div class="col"><p class="arabic_center">وَذَاتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَلاَوَا</p></div>
                                        <div class="col"><p class="arabic_center">قَاَلَوَ</p></div>
                                        <div class="col"><p class="arabic_center">قَلَوَا</p></div>
                                        <div class="col"><p class="arabic_center">قَالَ</p></div>
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
                                        <div class="col"><p class="arabic_center">لَمَا	 = لَمَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَجَزَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمَكَ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَانَهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَمَعَهَا</p></div>
                                        <div class="col"><p class="arabic_center">فَحَفَظَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَرَبَتَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَاَفَلاَ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمَقَ</p></div>
                                        <div class="col"><p class="arabic_center">سَقَى لَهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَطَلَعَا</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمَطَ</p></div>
                                        <div class="col"><p class="arabic_center">فَرَاشَهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَذَرَكَا</p></div>
                                        <div class="col"><p class="arabic_center">فَخَفَفَ</p></div>
                                        <div class="col"><p class="arabic_center">تَنَازَعَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَنَبَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمَحَ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَابَنَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَبَذَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَشَفَقَ</p></div>
                                        <div class="col"><p class="arabic_center">وَثَاقَهَا</p></div>
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
                                        <div class="col"><p class="arabic_center">نَبَاتَا</p></div>
                                        <div class="col"><p class="arabic_center">جَعَالَ</p></div>
                                        <div class="col"><p class="arabic_center">لَمَسَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَعَاشَا</p></div>
                                        <div class="col"><p class="arabic_center">نَهآ رَ</p></div>
                                        <div class="col"><p class="arabic_center">غَفَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَصَادَ</p></div>
                                        <div class="col"><p class="arabic_center">حَكَمَا</p></div>
                                        <div class="col"><p class="arabic_center">لَمَطَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَسَاقَا</p></div>
                                        <div class="col"><p class="arabic_center">أَصَابَ</p></div>
                                        <div class="col"><p class="arabic_center">لَبَثَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَاَبَا</p></div>
                                        <div class="col"><p class="arabic_center">خَطَايَ</p></div>
                                        <div class="col"><p class="arabic_center">نَظَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَرَابَا</p></div>
                                        <div class="col"><p class="arabic_center">أَتَكَ</p></div>
                                        <div class="col"><p class="arabic_center">لَمَزَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَدَنَا</p></div>
                                        <div class="col"><p class="arabic_center">قَبَاضَ</p></div>
                                        <div class="col"><p class="arabic_center">مَلَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَذَابَا/p></div>
                                        <div class="col"><p class="arabic_center">وَمَالَ</p></div>
                                        <div class="col"><p class="arabic_center">قَدَرَ</p></div>
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
                                        <div class="col"><p class="arabic_center">فَتَعَالَى</p></div>
                                        <div class="col"><p class="arabic_center">شَهَادَتَا</p></div>
                                        <div class="col"><p class="arabic_center">يَدَهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَتَاعَا</p></div>
                                        <div class="col"><p class="arabic_center">لَفَارَغَا</p></div>
                                        <div class="col"><p class="arabic_center">لَمَاطَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَقَامَا</p></div>
                                        <div class="col"><p class="arabic_center">لَاَذَنَ</p></div>
                                        <div class="col"><p class="arabic_center">اَثَاتَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَعَـازَا</p></div>
                                        <div class="col"><p class="arabic_center">حَيَوتَهَا</p></div>
                                        <div class="col"><p class="arabic_center">لَكَانَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَصَوَابَا</p></div>
                                        <div class="col"><p class="arabic_center">وَاَثَرَا</p></div>
                                        <div class="col"><p class="arabic_center">لَمَاقَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكَظَامَـا</p></div>
                                        <div class="col"><p class="arabic_center">طَهَارَهَا</p></div>
                                        <div class="col"><p class="arabic_center">فَنَادَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَيَدَهَا</p></div>
                                        <div class="col"><p class="arabic_center">زَكَتَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَكَانَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَضَلَلاَ</p></div>
                                        <div class="col"><p class="arabic_center">لَاَشَرَ</p></div>
                                        <div class="col"><p class="arabic_center">لَخَافَا</p></div>
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
                                        <div class="col"><p class="arabic_center">وَصَعَدَا</p></div>
                                        <div class="col"><p class="arabic_center">عَجَبَا</p></div>
                                        <div class="col"><p class="arabic_center">لَامَعَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَغَسَلَا</p></div>
                                        <div class="col"><p class="arabic_center">شَطَطَا</p></div>
                                        <div class="col"><p class="arabic_center">لَاصَبَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَغَدَقَا</p></div>
                                        <div class="col"><p class="arabic_center">حَرَسَـا</p></div>
                                        <div class="col"><p class="arabic_center">مَافَضَلَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاَمَدَا</p></div>
                                        <div class="col"><p class="arabic_center">قَــعَدَا</p></div>
                                        <div class="col"><p class="arabic_center">مَاحَسَنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَهَرَبَا</p></div>
                                        <div class="col"><p class="arabic_center">رَصَدَا</p></div>
                                        <div class="col"><p class="arabic_center">لَازَهَقَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَثَقَلَا</p></div>
                                        <div class="col"><p class="arabic_center">شَهَدَا</p></div>
                                        <div class="col"><p class="arabic_center">مَاعَضَمَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَهَجَرَ</p></div>
                                        <div class="col"><p class="arabic_center">رَهَقَا</p></div>
                                        <div class="col"><p class="arabic_center">لَامَرَضَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَسَجَدَ</p></div>
                                        <div class="col"><p class="arabic_center">خَطَبَا</p></div>
                                        <div class="col"><p class="arabic_center">مَاغَدَقَ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَسَقَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمَمَ</p></div>
                                        <div class="col"><p class="arabic_center">لَاَذَبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَشَرَابَا</p></div>
                                        <div class="col"><p class="arabic_center">فَحَدَثَ</p></div>
                                        <div class="col"><p class="arabic_center">وَنَاظَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَضَلَلَا</p></div>
                                        <div class="col"><p class="arabic_center">لَفَسَقَ</p></div>
                                        <div class="col"><p class="arabic_center">بَنَانَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَخَسَارَا</p></div>
                                        <div class="col"><p class="arabic_center">فَحَضَرَ</p></div>
                                        <div class="col"><p class="arabic_center">وَحَافَظَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَنَصَارَا</p></div>
                                        <div class="col"><p class="arabic_center">لَمَعَكَ</p></div>
                                        <div class="col"><p class="arabic_center">لَدَكَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلَزَادَ</p></div>
                                        <div class="col"><p class="arabic_center">فَغَفَرَ</p></div>
                                        <div class="col"><p class="arabic_center">وَاَخَرَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَخَطَايَا</p></div>
                                        <div class="col"><p class="arabic_center">وَنَبَذَ</p></div>
                                        <div class="col"><p class="arabic_center">اَمَامَكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَزَاغَا</p></div>
                                        <div class="col"><p class="arabic_center">يَظَهَرَ</p></div>
                                        <div class="col"><p class="arabic_center">تَدَرَكَ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 29</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">JELAS BEDAKAN Bunyi huruf dan   Panjang Pendeknya></p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَاثَ</p></div>
                                        <div class="col"><p class="arabic_center">سَاثَ</p></div>
                                        <div class="col"><p class="arabic_center">سَاشَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَاشَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَاهَـ</p></div>
                                        <div class="col"><p class="arabic_center">اَعَ</p></div>
                                        <div class="col"><p class="arabic_center">اَهَـ</p></div>
                                        <div class="col"><p class="arabic_center">شَأَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَاطَ</p></div>
                                        <div class="col"><p class="arabic_center">كَاقَ</p></div>
                                        <div class="col"><p class="arabic_center">خَاغَ</p></div>
                                        <div class="col"><p class="arabic_center">قَاخَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَاظَ</p></div>
                                        <div class="col"><p class="arabic_center">زَاذَ</p></div>
                                        <div class="col"><p class="arabic_center">زَاجَ</p></div>
                                        <div class="col"><p class="arabic_center">يَازَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ظَاضَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَ ضَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَاظَ</p></div>
                                        <div class="col"><p class="arabic_center">ظَاضَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَ</p></div>
                                        <div class="col"><p class="arabic_center">عَا</p></div>
                                        <div class="col"><p class="arabic_center">هَا</p></div>
                                        <div class="col"><p class="arabic_center">حَا</p></div>
                                        <div class="col"><p class="arabic_center">خَا</p></div>
                                        <div class="col"><p class="arabic_center">قَا</p></div>
                                        <div class="col"><p class="arabic_center">غَا</p></div>
                                        <div class="col"><p class="arabic_center">غَى...</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَابَارَا</p></div>
                                        <div class="col"><p class="arabic_center">مَكَ</p></div>
                                        <div class="col"><p class="arabic_center">سَجَ</p></div>
                                        <div class="col"><p class="arabic_center">سَمَ</p></div>
                                        <div class="col"><p class="arabic_center">يَهَسَ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 30</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">Bila bacaan telah benar Makhrajnya (walau pelan) dan betul semua PANJANG - PENDEKNYA bisa lanjut ke jilid selanjutnya</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَطَايَايَ</p></div>
                                        <div class="col"><p class="arabic_center">صَافَحَا</p></div>
                                        <div class="col"><p class="arabic_center">اَذَانَ</p></div>
                                        <div class="col"><p class="arabic_center">ثَابَتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَضَلَـلَا</p></div>
                                        <div class="col"><p class="arabic_center">خَافَتَا</p></div>
                                        <div class="col"><p class="arabic_center">هَمَزَ</p></div>
                                        <div class="col"><p class="arabic_center">تَوَابَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَجَمَاعَ</p></div>
                                        <div class="col"><p class="arabic_center">حَكَمَا</p></div>
                                        <div class="col"><p class="arabic_center">اَلَافَ</p></div>
                                        <div class="col"><p class="arabic_center">لَعَنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَالَ بَلَى</p></div>
                                        <div class="col"><p class="arabic_center">نَذَارَا</p></div>
                                        <div class="col"><p class="arabic_center">فَتَقَى</p></div>
                                        <div class="col"><p class="arabic_center">غَلَظَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاَطَاعَ</p></div>
                                        <div class="col"><p class="arabic_center">لَمَكَا</p></div>
                                        <div class="col"><p class="arabic_center">يَتَمَى</p></div>
                                        <div class="col"><p class="arabic_center">فَطَغَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَنَانَكَ</p></div>
                                        <div class="col"><p class="arabic_center">حَوَايَا</p></div>
                                        <div class="col"><p class="arabic_center">فَقَضَى</p></div>
                                        <div class="col"><p class="arabic_center">شَهَادَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَمَمَا</p></div>
                                        <div class="col"><p class="arabic_center">اَلَـلَ</p></div>
                                        <div class="col"><p class="arabic_center">عَجَلَا</p></div>
                                        <div class="col"><p class="arabic_center">مَلَأَ</p></div>
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