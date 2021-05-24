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