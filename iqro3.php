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
                                    <h4 align="center">Iqro 3</h4>
                                    <br>
                                </div>
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 1</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Bi = بِ</p></div>
                                        <div class="col"><p class="arabic_center"> I = --ِ-</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">SEMUA DIBACA PENDEK TIDAK BOLEH DIPANJANG-PANJANGKAN</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> مَ مِ </p></div>
                                        <div class="col"><p class="arabic_center">نَ نِ  </p></div>
                                        <div class="col"><p class="arabic_center">دَ دِ  </p></div>
                                        <div class="col"><p class="arabic_center">تَ تِ  </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تِ تِ </p></div>
                                        <div class="col"><p class="arabic_center">تَ تِ  </p></div>
                                        <div class="col"><p class="arabic_center">بِ بِ  </p></div>
                                        <div class="col"><p class="arabic_center">بَ بِ  </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَجَسِ</p></div>
                                        <div class="col"><p class="arabic_center">نَجَسَ</p></div>
                                        <div class="col"><p class="arabic_center">نَبَتِ</p></div>
                                        <div class="col"><p class="arabic_center">نَبَتَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"> <p class="arabic_center">حَسَنِ</p> </div>
                                        <div class="col"><p class="arabic_center">حَسَنَ</p></div>
                                        <div class="col"><p class="arabic_center">بَلَدِ</p></div>
                                        <div class="col"><p class="arabic_center">بَلَدَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"> <p class="arabic_center">لَزِمَ</p> </div>
                                        <div class="col"><p class="arabic_center">فَهِمَ</p></div>
                                        <div class="col"><p class="arabic_center">شَهِدَ</p></div>
                                        <div class="col"><p class="arabic_center">عَمِلَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"> <p class="arabic_center" style="word-spacing: 53px;">بِ تِ جِ خَ دَ دِ دِ فِ فِ اِ مَ مِ</p> </div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 2</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">Ingat, jangan keliru. Mana bacaan MAD (yang panjang) dan mana yang bukan MAD (yang pendek)</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حاَ سِدِ</p></div>
                                        <div class="col"><p class="arabic_center">حَسَدَ</p></div>
                                        <div class="col"><p class="arabic_center">فاَ عِلِ</p></div>
                                        <div class="col"><p class="arabic_center">فَعَلَ</p></div>
                                    </div>
                                    <hr>
        
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جاَ لِسِ</p></div>
                                        <div class="col"><p class="arabic_center">جَلَسَ</p></div>
                                        <div class="col"><p class="arabic_center">كاَ تِبِ</p></div>
                                        <div class="col"><p class="arabic_center">كَتَبَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قاَ رِئِ</p></div>
                                        <div class="col"><p class="arabic_center">قَرَاَ</p></div>
                                        <div class="col"><p class="arabic_center">خاَ طِبِ</p></div>
                                        <div class="col"><p class="arabic_center">خَطَبَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ماَ لِكِ</p></div>
                                        <div class="col"><p class="arabic_center">ماَلَكَ</p></div>
                                        <div class="col"><p class="arabic_center">باَيِنِ</p></div>
                                        <div class="col"><p class="arabic_center">باَ يَنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شاَ هِدِ</p></div>
                                        <div class="col"><p class="arabic_center">شاَ هَدَ</p></div>
                                        <div class="col"><p class="arabic_center">عاَ لِمِ</p></div>
                                        <div class="col"><p class="arabic_center">عاَ لَمَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِلاَ دِ</p></div>
                                        <div class="col"><p class="arabic_center">طِباَ قَ</p></div>
                                        <div class="col"><p class="arabic_center">جِهاَ دِ</p></div>
                                        <div class="col"><p class="arabic_center">صِرَا طَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غِفاَ رَ</p></div>
                                        <div class="col"><p class="arabic_center">فاَ عِلِ</p></div>
                                        <div class="col"><p class="arabic_center">عِماَ دِ</p></div>
                                        <div class="col"><p class="arabic_center">لباَ سِ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 3</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قاَ دِرَ</p></div>
                                        <div class="col"><p class="arabic_center">باَ طِلَ</p></div>
                                        <div class="col"><p class="arabic_center">عاَ صِفَ</p></div>
                                        <div class="col"><p class="arabic_center">ثاَ بِتَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نِعاَ مِ</p></div>
                                        <div class="col"><p class="arabic_center">مِهاَ دِ</p></div>
                                        <div class="col"><p class="arabic_center">فِرَا شِ</p></div>
                                        <div class="col"><p class="arabic_center">جِهاَ دَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">باَ طِنَ</p></div>
                                        <div class="col"><p class="arabic_center">ظاَ هِرَ</p></div>
                                        <div class="col"><p class="arabic_center">ناَ عِمَ</p></div>
                                        <div class="col"><p class="arabic_center">هاَ دِيَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شِقاَ قِ</p></div>
                                        <div class="col"><p class="arabic_center">خِياَ مَ</p></div>
                                        <div class="col"><p class="arabic_center">فِصاَ لِ</p></div>
                                        <div class="col"><p class="arabic_center">كِراَ مَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَذاَ بِ</p></div>
                                        <div class="col"><p class="arabic_center">عِقاَ بَ</p></div>
                                        <div class="col"><p class="arabic_center">فَلاَ قِ</p></div>
                                        <div class="col"><p class="arabic_center">لِجاَ مَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ناَظِراَ</p></div>
                                        <div class="col"><p class="arabic_center">غاَسِقاَ</p></div>
                                        <div class="col"><p class="arabic_center">ساَ خِطاَ</p></div>
                                        <div class="col"><p class="arabic_center">حاَ فِظاَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثاَقِلاَ</p></div>
                                        <div class="col"><p class="arabic_center">لاَ زِماَ</p></div>
                                        <div class="col"><p class="arabic_center">دَافِعاَ</p></div>
                                        <div class="col"><p class="arabic_center">لاَيِناَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شاَ طِءَهاَ</p></div>
                                        <div class="col"><p class="arabic_center">عاَ بِدَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">وَماَ هِيَ</p></div>
                                        <div class="col"><p class="arabic_center">قاَ نِتاَ تِ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 4</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خاَ شِعاَ تِ</p></div>
                                        <div class="col"><p class="arabic_center">عاَ بِدَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">حاَ ضِرَا تِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لاَ عِبَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">غِنَا عِيَا</p></div>
                                        <div class="col"><p class="arabic_center">عِا قَا بَهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَا شِطَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">نَا زِعَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">رَا فِعَا تِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَا لِئَ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَا لِيَ</p></div>
                                        <div class="col"><p class="arabic_center">صَا دِقَا تِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَوَا قِعَ</p></div>
                                        <div class="col"><p class="arabic_center">فَوَا حِشَ</p></div>
                                        <div class="col"><p class="arabic_center">زَكَا تِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَا رِيَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">جَنَا حِكَ</p></div>
                                        <div class="col"><p class="arabic_center">فَهَا لِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَضَا جِعَ</p></div>
                                        <div class="col"><p class="arabic_center">مَغَا رِبَ</p></div>
                                        <div class="col"><p class="arabic_center">كَذَا لِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَرَا ضِعِ</p></div>
                                        <div class="col"><p class="arabic_center">مَنَا مِهَا</p></div>
                                        <div class="col"><p class="arabic_center">لَهَا تِفَ</p></div>
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
                                        <div class="col"><p class="arabic_center">رَضِيَ</p></div>
                                        <div class="col"><p class="arabic_center">غَنِمَ</p></div>
                                        <div class="col"><p class="arabic_center">لَعِبَ</p></div>
                                        <div class="col"><p class="arabic_center">شَهِدَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَا تِبِ</p></div>
                                        <div class="col"><p class="arabic_center">كِتَا بَ</p></div>
                                        <div class="col"><p class="arabic_center">فَا عِلِ</p></div>
                                        <div class="col"><p class="arabic_center">فِعَا لاَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَا فِرِ</p></div>
                                        <div class="col"><p class="arabic_center">غِفَا رَ</p></div>
                                        <div class="col"><p class="arabic_center">جَا هِدِ</p></div>
                                        <div class="col"><p class="arabic_center">جِهَا دَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                    <div class="col"><p align="center" style="color: black">Biar Pelan, asal betul PANJANG PENDEK-nya</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طِبَا قَ</p></div>
                                        <div class="col"><p class="arabic_center">عَا طَى</p></div>
                                        <div class="col"><p class="arabic_center">قَا نِتَا تِ</p></div>
                                        <div class="col"><p class="arabic_center">لَا قَى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِشَا رِكَ</p></div>
                                        <div class="col"><p class="arabic_center">حَا سِدِ</p></div>
                                        <div class="col"><p class="arabic_center">بَصَلِهَا</p></div>
                                        <div class="col"><p class="arabic_center">عَدَسِهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَا طِءَهَا</p></div>
                                        <div class="col"><p class="arabic_center">سَا فِلَهَا</p></div>
                                        <div class="col"><p class="arabic_center">عَا لِيَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَمَا هِىَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَوَالِىَ</p></div>
                                        <div class="col"><p class="arabic_center">عَابِدَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">فَيَتَامَى</p></div>
                                        <div class="col"><p class="arabic_center">قَانِتَاتِ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 6</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center">Bii = بِى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِ فِي</p></div>
                                        <div class="col"><p class="arabic_center">لِ لِي</p></div>
                                        <div class="col"><p class="arabic_center">نِ نِي</p></div>
                                        <div class="col"><p class="arabic_center">جِ جِي</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قِيتَالاَ</p></div>
                                        <div class="col"><p class="arabic_center">قَاتَلَ</p></div>
                                        <div class="col"><p class="arabic_center">فِيعَالَ</p></div>
                                        <div class="col"><p class="arabic_center">فَاعَل</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَيسَارَ</p></div>
                                        <div class="col"><p class="arabic_center">يَاسَرَ</p></div>
                                        <div class="col"><p class="arabic_center">مِيعَادَ</p></div>
                                        <div class="col"><p class="arabic_center">وَاعَدَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                    <div class="col"><p align="center" style="color: black">Harus tepat PANJANG PENDEK-nya !</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَدِيرِ</p></div>
                                        <div class="col"><p class="arabic_center">قَادِرَ</p></div>
                                        <div class="col"><p class="arabic_center">بَصِيرِ</p></div>
                                        <div class="col"><p class="arabic_center">بَاصِرَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَكِيمِ</p></div>
                                        <div class="col"><p class="arabic_center">حَاكِمَ</p></div>
                                        <div class="col"><p class="arabic_center">سَمِيعِ</p></div>
                                        <div class="col"><p class="arabic_center">سَامِعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَغِيرَ</p></div>
                                        <div class="col"><p class="arabic_center">كَبِيرِ</p></div>
                                        <div class="col"><p class="arabic_center">نَذِيرِ</p></div>
                                        <div class="col"><p class="arabic_center">بَشِيرَ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 7</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                    <div class="col"><p align="center" style="color: black">Bacaan yang PENDEK bacalah dengan BETUL-BETUL PENDEK</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَاشِعَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">جَاشِعِينَ</p></div>
                                        <div class="col"><p class="arabic_center">خَشِعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَغِيرَكَ</p></div>
                                        <div class="col"><p class="arabic_center">خَاضِعِينَ</p></div>
                                        <div class="col"><p class="arabic_center">خَضَعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَافِظَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">حَافِظِينَ</p></div>
                                        <div class="col"><p class="arabic_center">حَفِظَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَالِبِينَ</p></div>
                                        <div class="col"><p class="arabic_center">لَأَزِيدَ</p></div>
                                        <div class="col"><p class="arabic_center">رَوَاسِىَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَادِقَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">صَادِقِينَ</p></div>
                                        <div class="col"><p class="arabic_center">صَدَقَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَاضِرَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">حَاضِرِينَ</p></div>
                                        <div class="col"><p class="arabic_center">حَضَرَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لاَعِبَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">لاَعِبِينَ</p></div>
                                        <div class="col"><p class="arabic_center">لَعِبَ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 8</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Hii = هِى = ىهِى = ىهِ = هِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَذِهِ</p></div>
                                        <div class="col"><p class="arabic_center">لَفِيهِ</p></div>
                                        <div class="col"><p class="arabic_center">نَهَرَ</p></div>
                                        <div class="col"><p class="arabic_center">هَلَكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَكَرِهَ</p></div>
                                        <div class="col"><p class="arabic_center">وَبِهِ</p></div>
                                        <div class="col"><p class="arabic_center">شَهِدَ</p></div>
                                        <div class="col"><p class="arabic_center">هَمَزَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عِبَادِهِ</p></div>
                                        <div class="col"><p class="arabic_center">أَبِيهِ</p></div>
                                        <div class="col"><p class="arabic_center">فِيهِمَا</p></div>
                                        <div class="col"><p class="arabic_center">هَدَمَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                    <div class="col"><p align="center" style="color: black">BIAR PELAN... ASAL BENAR</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِبَالِغِهِ</p></div>
                                        <div class="col"><p class="arabic_center">فِىجِيدِهَا</p></div>
                                        <div class="col"><p class="arabic_center">لَأَزِيدَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَجَسَادِهِ</p></div>
                                        <div class="col"><p class="arabic_center">بِضَنِينِ</p></div>
                                        <div class="col"><p class="arabic_center">بِغَلِيظِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِيثَاقِهِ</p></div>
                                        <div class="col"><p class="arabic_center">بِيَمِينِكَ</p></div>
                                        <div class="col"><p class="arabic_center">وَطَاغِينَ</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 9</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شَاهِدِهِ</p></div>
                                        <div class="col"><p class="arabic_center">خَالِدِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">طَاهَرَيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حِسَابِهِ</p></div>
                                        <div class="col"><p class="arabic_center">ثَاقِفِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">طَالِمِيْنَ</p></div>
                                    </div>
                                    <hr> 

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَذَانِهِ</p></div>
                                        <div class="col"><p class="arabic_center">زَكَاتِكَ</p></div>
                                        <div class="col"><p class="arabic_center">لَهَاتِفَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَوَاضِعِهِ</p></div>
                                        <div class="col"><p class="arabic_center">سَالِكِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">حَافِظِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَصَابِعِهِ</p></div>
                                        <div class="col"><p class="arabic_center">ذَكِرِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">طَالِبِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِزِيَادِهِ</p></div>
                                        <div class="col"><p class="arabic_center">مَوَالِيَ</p></div>
                                        <div class="col"><p class="arabic_center">فَهَالِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِنَاصِرِهِ</p></div>
                                        <div class="col"><p class="arabic_center">مَسَكِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَيَتَمَى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ULANG-ULANGILAH! <br>SAMPAI TIADA KELIRU LAGI</p></div>
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
                                        <div class="col"><p class="arabic_center" style="word-spacing: 53px;">تِ = تِىى = ىةِ = ةِ</p></div>
                                    </div>
                                    <hr> 

                                    <div class="row">
                                        
                                        <div class="col"><p class="arabic_center" style="word-spacing: 63px;">ىهِ  ىةِ  --هِ  --ةِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَبَرَةِ</p></div>
                                        <div class="col"><p class="arabic_center">رَافِقَةِ</p></div>
                                        <div class="col"><p class="arabic_center">اَلحِرَةِ</p></div>
                                        <div class="col"><p class="arabic_center">فَاتِحَةِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جِاَرَةِ</p></div>
                                        <div class="col"><p class="arabic_center">اَلِهَةِ</p></div>
                                        <div class="col"><p class="arabic_center">صَالِحَ</p></div>
                                        <div class="col"><p class="arabic_center">عَامِلَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَصَرِمِ</p></div>
                                        <div class="col"><p class="arabic_center">وَأَبِيْهِ</p></div>
                                        <div class="col"><p class="arabic_center">خَطَايَ</p></div>
                                        <div class="col"><p class="arabic_center">وَنَاَد</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَاشِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center">دَاحِضَةِ</p></div>
                                        <div class="col"><p class="arabic_center">مَحِيْصَا</p></div>
                                        <div class="col"><p class="arabic_center">عَقِيْمَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَدِهِ</p></div>
                                        <div class="col"><p class="arabic_center">طَعَامِهِ</p></div>
                                        <div class="col"><p class="arabic_center">اَمِنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">مَضَاجِعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَتَرَة</p></div>
                                        <div class="col"><p class="arabic_center">زَباَنِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center">مَرِيْضاَ</p></div>
                                        <div class="col"><p class="arabic_center">بِصِحَافِ</p></div>
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
                                        <div class="col"><p class="arabic_center"> Nii=   ii= <br> dianggap tidak ada = ى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَصاَنِيْ</p></div>
                                        <div class="col"><p class="arabic_center">حَامِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center">بَصِيْرَ</p></div>
                                        <div class="col"><p class="arabic_center">سَبَعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِبَنِى</p></div>
                                        <div class="col"><p class="arabic_center">حَفِظَتِ</p></div>
                                        <div class="col"><p class="arabic_center">خَبِيْرَا</p></div>
                                        <div class="col"><p class="arabic_center">لَطِيْفاَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَقَا مِيْ</p></div>
                                        <div class="col"><p class="arabic_center">بَطَيِهِ</p></div>
                                        <div class="col"><p class="arabic_center">صَغِيْرِ</p></div>
                                        <div class="col"><p class="arabic_center">شَفَالعَةِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَذَابِى</p></div>
                                        <div class="col"><p class="arabic_center">نِعَاجِهِ</p></div>
                                        <div class="col"><p class="arabic_center">حَكِيْمِ</p></div>
                                        <div class="col"><p class="arabic_center">عَزِيْزِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَاذِبَةِ</p></div>
                                        <div class="col"><p class="arabic_center">نَاصِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center">قَدِيْرِ</p></div>
                                        <div class="col"><p class="arabic_center">حَلِيْمِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَطَرَنِيْ</p></div>
                                        <div class="col"><p class="arabic_center">تِجَارَةَ</p></div>
                                        <div class="col"><p class="arabic_center">مِيْعَادَ</p></div>
                                        <div class="col"><p class="arabic_center">نَوَا صِىْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِيْ عَقِبِهِ</p></div>
                                        <div class="col"><p class="arabic_center">فِيْ نَارِهِ</p></div>
                                        <div class="col"><p class="arabic_center">شَاطِئِ </p></div>
                                        <div class="col"><p class="arabic_center">شَاطِءِ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَحَفِيْظَ</p></div>
                                        <div class="col"><p class="arabic_center">غِشَوَةِ</p></div>
                                        <div class="col"><p class="arabic_center">لَبِتِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَءَالِهَتِى</p></div>
                                        <div class="col"><p class="arabic_center">جَنَحِكَ</p></div>
                                        <div class="col"><p class="arabic_center">خَطِئِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِمَفَازَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَزَكَواتَ</p></div>
                                        <div class="col"><p class="arabic_center">وَاعِظِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَبِلِيْهِ</p></div>
                                        <div class="col"><p class="arabic_center">فَخَشِتَ</p></div>
                                        <div class="col"><p class="arabic_center">بِأَخِيْكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِى زِيْنَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">مَراَضِعَ</p></div>
                                        <div class="col"><p class="arabic_center">شَيَطِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَحِلَلِهِ</p></div>
                                        <div class="col"><p class="arabic_center">صَلَوَتِ</p></div>
                                        <div class="col"><p class="arabic_center">كَفَى بِنَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَلَى غَنَمِى</p></div>
                                        <div class="col"><p class="arabic_center">وَهَـذِهِ</p></div>
                                        <div class="col"><p class="arabic_center">خَاضِعِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عِبَدَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">أَساَطِيْرَ</p></div>
                                        <div class="col"><p class="arabic_center">اِذَاقَضَى</p></div>
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
                                        <div class="col"><p class="arabic_center">بِأَلِهَتِنَ</p></div>
                                        <div class="col"><p class="arabic_center">سَمَوَاتِ</p></div>
                                        <div class="col"><p class="arabic_center">كَ َذِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَضِيَلَهَا</p></div>
                                        <div class="col"><p class="arabic_center">حَامِلَتِ</p></div>
                                        <div class="col"><p class="arabic_center">فَباَطِلَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِضَيِيْنِ</p></div>
                                        <div class="col"><p class="arabic_center">فَشاَطِئِ<ْ/p></div>
                                        <div class="col"><p class="arabic_center">عَاصِفَةَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِلِساَنِتَا</p></div>
                                        <div class="col"><p class="arabic_center">وَجَعَلَنِيْ</p></div>
                                        <div class="col"><p class="arabic_center">لَاحَيَوَتِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَيِجاَبَا</p></div>
                                        <div class="col"><p class="arabic_center">طاَغِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">مَنَافِعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَأَصِيْلَا</p></div>
                                        <div class="col"><p class="arabic_center">هَامِدَةِ</p></div>
                                        <div class="col"><p class="arabic_center">حَفِظِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِيَمِيْنِكَ</p></div>
                                        <div class="col"><p class="arabic_center">وَاِلَهَ</p></div>
                                        <div class="col"><p class="arabic_center">اَحَادِيْثَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاَخِـرِهِ</p></div>
                                        <div class="col"><p class="arabic_center">صَاحِبَتِه</p></div>
                                        <div class="col"><p class="arabic_center">لِاَبِيْهِ</p></div>
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
                                        <div class="col"><p class="arabic_center">Bu = بُ</p></div>
                                        <div class="col"><p class="arabic_center"> u = --ُ-</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَ جِ جُ</p></div>
                                        <div class="col"><p class="arabic_center">تَ تِ تُ</p></div>
                                        <div class="col"><p class="arabic_center">بَ بِ بُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دُ دِ دُ</p></div>
                                        <div class="col"><p class="arabic_center">دُ دِ دَ</p></div>
                                        <div class="col"><p class="arabic_center">دُ دِ دِ</p></div>
                                        <div class="col"><p class="arabic_center">دَ دِ دُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كُتِبَ</p></div>
                                        <div class="col"><p class="arabic_center">كَتَبَ</p></div>
                                        <div class="col"><p class="arabic_center">فُيِلَ</p></div>
                                        <div class="col"><p class="arabic_center">فَعَلَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضُرِبَ</p></div>
                                        <div class="col"><p class="arabic_center">ضَرَبَ</p></div>
                                        <div class="col"><p class="arabic_center">قُرِئَ</p></div>
                                        <div class="col"><p class="arabic_center">قَرَاَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَحُمَ</p></div>
                                        <div class="col"><p class="arabic_center">يَمُنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَهُوَ</p></div>
                                        <div class="col"><p class="arabic_center">حَسُنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَوُمَ</p></div>
                                        <div class="col"><p class="arabic_center">لَأُمَة</p></div>
                                        <div class="col"><p class="arabic_center">قَرُبَ</p></div>
                                        <div class="col"><p class="arabic_center">كَرُمَ  </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رُسُلُ</p></div>
                                        <div class="col"><p class="arabic_center">كَثُرَ</p></div>
                                        <div class="col"><p class="arabic_center">عَظُمَ</p></div>
                                        <div class="col"><p class="arabic_center">رَجُلَ</p></div>
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
                                        <div class="col"><p class="arabic_center">بَاسِطُ</p></div>
                                        <div class="col"><p class="arabic_center">قاَبِضُ</p></div>
                                        <div class="col"><p class="arabic_center">بَارِ ئُ</p></div>
                                        <div class="col"><p class="arabic_center">خَالِقُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَلِيْلُ</p></div>
                                        <div class="col"><p class="arabic_center">حَفِظُ</p></div>
                                        <div class="col"><p class="arabic_center">عَظِيْمُ</p></div>
                                        <div class="col"><p class="arabic_center">حَلِيْمُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَقَرَةِ</p></div>
                                        <div class="col"><p class="arabic_center">أَتِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center">بَصَيِرِم</p></div>
                                        <div class="col"><p class="arabic_center">وَإِلَهَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَاجِدِ</p></div>
                                        <div class="col"><p class="arabic_center">بَاعِثِ</p></div>
                                        <div class="col"><p class="arabic_center">وَاسِعِ</p></div>
                                        <div class="col"><p class="arabic_center">رَافِعِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكِيْلُ</p></div>
                                        <div class="col"><p class="arabic_center">شَهِيْدُ</p></div>
                                        <div class="col"><p class="arabic_center">تَجِيْدُ</p></div>
                                        <div class="col"><p class="arabic_center">رَقِىْبُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مُجِيْبُ</p></div>
                                        <div class="col"><p class="arabic_center">مُقِيْتُ</p></div>
                                        <div class="col"><p class="arabic_center">مُمِيْتُ</p></div>
                                        <div class="col"><p class="arabic_center">مُعِيْدُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَوَاصِى</p></div>
                                        <div class="col"><p class="arabic_center">شُكَرَى</p></div>
                                        <div class="col"><p class="arabic_center">وَعِيْسَى</p></div>
                                        <div class="col"><p class="arabic_center">رَوَاسِى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مُتَعَالِى</p></div>
                                        <div class="col"><p class="arabic_center">بِأَيَتِى</p></div>
                                        <div class="col"><p class="arabic_center">عِبَادِهِ</p></div>
                                        <div class="col"><p class="arabic_center">عَبَاِدِه</p></div>
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
                                        <div class="col"><p class="arabic_center">وَمَهِيْنُا</p></div>
                                        <div class="col"><p class="arabic_center">كَوَكِبُ</p></div>
                                        <div class="col"><p class="arabic_center">ظُامُاَتِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَخَشِتَ</p></div>
                                        <div class="col"><p class="arabic_center">حَامِلَتِ</p></div>
                                        <div class="col"><p class="arabic_center">بِمَثَلِهِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَيَرِثٌهَا</p></div>
                                        <div class="col"><p class="arabic_center">سَيُصِيْبُ</p></div>
                                        <div class="col"><p class="arabic_center">مَقاَلِيْدُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَاشِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center">مَايَغِيْظُ</p></div>
                                        <div class="col"><p class="arabic_center">صَدِقِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِصَلِهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَيُمِيْتُ</p></div>
                                        <div class="col"><p class="arabic_center">بِغُلَامِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِكَلِمَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">صَوَامِعُ</p></div>
                                        <div class="col"><p class="arabic_center">سَرَابِيْلَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِى صُحُفِى</p></div>
                                        <div class="col"><p class="arabic_center">فَتُثِيْرُ</p></div>
                                        <div class="col"><p class="arabic_center">سَتَجِدُنِى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">شِيْعَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">طَامِعِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَزَادَهُمَ</p></div>
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
                                    <div class="col"><p class="arabic_center">Buu = بو</p></div>
                                    <div class="col"><p class="arabic_center">uu = و</p></div>
                                    </div>
                                <hr>

                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Guru boleh mengenalkan nama WAU sukun atau WAU mati</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَقُوْلَ</p></div>
                                        <div class="col"><p class="arabic_center">قَالَ</p></div>
                                        <div class="col"><p class="arabic_center">يَتُوْبُ</p></div>
                                        <div class="col"><p class="arabic_center">تَابَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَكًوْنُ</p></div>
                                        <div class="col"><p class="arabic_center">كَانَ</p></div>
                                        <div class="col"><p class="arabic_center">يَعُوْدُ</p></div>
                                        <div class="col"><p class="arabic_center">عَادَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مُقِيْمِيْنَ  </p></div>
                                        <div class="col"><p class="arabic_center">يُقِيْمُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يُرِيْدُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِنَاصِرِهِ</p></div>
                                        <div class="col"><p class="arabic_center">يَتَخَافَتُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَتَلاَوَمُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نِعَاجِهِ</p></div>
                                        <div class="col"><p class="arabic_center">يُغِيْثُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يُفِيْضُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَرِثُنِى </p></div>
                                        <div class="col"><p class="arabic_center">رَاغِبُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">سَامِدًوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَلٌوْمٌوْنِي</p></div>
                                        <div class="col"><p class="arabic_center">فَعَقَرٌوْهَا</p></div>
                                        <div class="col"><p class="arabic_center">هُناَلِكَ</p></div>
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
                                        <div class="col"><p class="arabic_center">قَالُوْا<br> اْ = dianggap tidak ada</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاتَخُوْنُوْا</p></div>
                                        <div class="col"><p class="arabic_center">فَإِذَارَكِبُوْا</p></div>
                                        <div class="col"><p class="arabic_center">قَالُوْابَلَي</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَمَنُوْا وَعَمِلُوْا</p></div>
                                        <div class="col"><p class="arabic_center">كَانُُوْالَنَاعَبِدِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ءَامَنُوْاوَعَمِلُوْ</p></div>
                                        <div class="col"><p class="arabic_center">صَابِرُوْاوَرَابِطُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَدَقُوْا مَا عَاهَدُوْا</p></div>
                                        <div class="col"><p class="arabic_center">وَجَدُ وامَاعَمِلُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكَانُوْالَنَا جَشِعِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَيَكِيْدُوْالَكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَالَ مَانَهَكُمَ</p></div>
                                        <div class="col"><p class="arabic_center">فَلاَتَلُوْمٌوْنِيْوَلُوْمُوْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">MAAF, JANGAN DITERUSKAN DULU! <br> bila masih keliru panjang pendeknya</p></div>
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
                                        <div class="col"><p class="arabic_center">Huu = ىهُ---</p></div>
                                        <div class="col"><p class="arabic_center">Uu = --ُ-</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَرَهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَهُ</p></div>
                                        <div class="col"><p class="arabic_center">يَدَهُ</p></div>
                                        <div class="col"><p class="arabic_center">مَعَهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَوَازِيْنُهُ</p></div>
                                        <div class="col"><p class="arabic_center">فِيْمَا كَانُوْا</p></div>
                                        <div class="col"><p class="arabic_center">إِذَاسَجَرَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَافِظِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَعَجِبُوْا</p></div>
                                        <div class="col"><p class="arabic_center">يَنَابِيْعَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِيْجِيِدْهَا</p></div>
                                        <div class="col"><p class="arabic_center">مُتَقَابِلِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَنُسُكِيْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جُنُوْدُهُ</p></div>
                                        <div class="col"><p class="arabic_center">تُظَهِرُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">لَقُضِيَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَثَلُهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَأُتُوْابِهِ</p></div>
                                        <div class="col"><p class="arabic_center">أُوْتِيْتُهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَسَلَكَهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَثَاقَهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَايُوْثِقُ</p></div>
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
                                        <div class="col"><p class="arabic_center">فَجَعَلَهُ</p></div>
                                        <div class="col"><p class="arabic_center">يُزِيْلُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">اَجِيْرُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَرَسُوْلُهُ</p></div>
                                        <div class="col"><p class="arabic_center">يُقِمُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">أَقِيْمُوا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَلَاتَهُ</p></div>
                                        <div class="col"><p class="arabic_center">يُفِيْضُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">أَفِيْضُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَمَـرَهُ</p></div>
                                        <div class="col"><p class="arabic_center">يُطِيْقُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">أَطِيْقُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَارَأَى</p></div>
                                        <div class="col"><p class="arabic_center">يُطِيْعُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">أَطِيْعُوْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِيْ صُحُفِىْ</p></div>
                                        <div class="col"><p class="arabic_center">يُمِيْتُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">اَمِيْتُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَزِيْلُوْا</p></div>
                                        <div class="col"><p class="arabic_center">فَحَلَقَةَ</p></div>
                                        <div class="col"><p class="arabic_center">يَزِيْلُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">WALAU LANCAR, TAPI TAK BENAR <br> MAKA JANGAN DILANJUTKAN <br> Ulangi sampai betul semua.</p></div>
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
                                        <div class="col"><p class="arabic_center">لَيُوْفُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَسُوْقُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَخَافُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُغِيْثُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يُضِيْعُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يُحِيْطُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَذُوْقُوْا</p></div>
                                        <div class="col"><p class="arabic_center">وَظَلُوْا</p></div>
                                        <div class="col"><p class="arabic_center">فَعَلُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَعَقَرُوْهَا</p></div>
                                        <div class="col"><p class="arabic_center">لَنُذِيْقُةُ</p></div>
                                        <div class="col"><p class="arabic_center">جَنَحُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَتَجِدُنِيْ</p></div>
                                        <div class="col"><p class="arabic_center">خَطِئِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">مَنَامِهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِيَمِيْنِهِ</p></div>
                                        <div class="col"><p class="arabic_center">فَطُوْبَى</p></div>
                                        <div class="col"><p class="arabic_center">مَعِيْشَتَهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَارَثَيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">إِذَاقَضَي</p></div>
                                        <div class="col"><p class="arabic_center">مَنَـازِلَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَشَارِقَ</p></div>
                                        <div class="col"><p class="arabic_center">شَعَفَهَا</p></div>
                                        <div class="col"><p class="arabic_center">بِجَهَازِمِ</p></div>
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
                                        <div class="col"><p class="arabic_center">مَفَاتِحَهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَتَشِيْرُ </p></div>
                                        <div class="col"><p class="arabic_center">نَاكِسُوْهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كِتَابَهُ</p></div>
                                        <div class="col"><p class="arabic_center">كَالِحُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَوَكَزَهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَايَثُوُدْهُ</p></div>
                                        <div class="col"><p class="arabic_center">شُخُوْمَهٌمَا</p></div>
                                        <div class="col"><p class="arabic_center">تَذُوْدَنِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَكِبُوْا</p></div>
                                        <div class="col"><p class="arabic_center">شُبُلَتَا</p></div>
                                        <div class="col"><p class="arabic_center">صَاغِرُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَرَقُوْالَهُ</p></div>
                                        <div class="col"><p class="arabic_center">لِمَايُوْحَى</p></div>
                                        <div class="col"><p class="arabic_center">خَطِيْعِنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تُبَاشِرُوْا</p></div>
                                        <div class="col"><p class="arabic_center">فَعَقَرُهَا</p></div>
                                        <div class="col"><p class="arabic_center">ظُهُوْرِكِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاتَنَابَزُوْا</p></div>
                                        <div class="col"><p class="arabic_center">تَلُوْمُوْنِيْ</p></div>
                                        <div class="col"><p class="arabic_center">كَرِهُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَئِسُوْا</p></div>
                                        <div class="col"><p class="arabic_center">مَقَالِيْدُ</p></div>
                                        <div class="col"><p class="arabic_center">يُوْزَعٌوْنَ</p></div>
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
                                        <div class="col"><p class="arabic_center">لَيُوْسُفُ وَاَخُوْهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَإِذَا سَأَلَكَ عِبَادِيْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَخَرَقُوْالَهُ بَنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">نَسِيَاخُوْتَهُمَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكَفَى بِنَاحَسِبِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">اَرُوْنِيْ مَاذَاخَلَقُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَثُلَثَ وَرُبَعَ</p></div>
                                        <div class="col"><p class="arabic_center">هَذِهِ بِضَاعَتُنَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِمَاكَسَبُوْامَاتَرَكَ</p></div>
                                        <div class="col"><p class="arabic_center">قَالُوْاتَقَاسَمُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Membacanya boleh terputus-putus <br> ASAL BENAR WALAU PELAN</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لِبَاسُهُمَالِيُرِيَهُمَا</p></div>
                                        <div class="col"><p class="arabic_center">قَالَ مَانَهَكُمَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَلَى شَاكِلَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">صَلَاتَكَ  </p></div>
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
                                        <div class="col"><p class="arabic_center">حَدِيْثُ مُوْسَى</p></div>
                                        <div class="col"><p class="arabic_center">صَدَقُوْا مَا عَاهَدٌوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَانَ عِقَابِ</p></div>
                                        <div class="col"><p class="arabic_center">كَفَرُوْا بِاَيَتِيْ  </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَالَ لَاتَخَافَا</p></div>
                                        <div class="col"><p class="arabic_center">بِمَاخَلَقَ وَلَعَـلَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَتَاعِنَا فَاَكَلَهُ</p></div>
                                        <div class="col"><p class="arabic_center">فَمَايَكُوْنُ لَكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهَا مَنَ وَقَارُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَهُوَ يَعِظُـُه</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَرُوْنَ وَمُوْسَى</p></div>
                                        <div class="col"><p class="arabic_center">فِيْهَا فَوَاكِهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلُعِنُوْا بِمَاقَالُوْا</p></div>
                                        <div class="col"><p class="arabic_center">لَهَا مَالِكُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">MAAF, ULANGILAH ..... ! <br> Sampai benar semuanya.</p></div>
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
                                        <div class="col"><p class="arabic_center">قَالَ لَاغَالِبَ</p></div>
                                        <div class="col"><p class="arabic_center">فِيْ صُحُفِ مُوْسَى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلُعِنُوْا بِمَاقَالُوْ</p></div>
                                        <div class="col"><p class="arabic_center">هَهُنَاقَاعِدُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلِيَ فِيْهَا مَاَرِبُ</p></div>
                                        <div class="col"><p class="arabic_center">وَكَفَىْ بِنَاحَسِبِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُرِيْدُوْاخِيَانَتَكَ</p></div>
                                        <div class="col"><p class="arabic_center">كَفَرُوْاسَبَقُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكَانُوْالَنَاخَشِعِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">صَدَقُوْا مَاعَاهَدُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَحَدَنَامَكَانَهُ</p></div>
                                        <div class="col"><p class="arabic_center">جَاهَدُوْاوَصَبَرُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَانُوْايُسَارِعُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَنَ أَبِجَانِبِهِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَاكَانُوْاسَبِقِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">مَاكَادَيَزِيْغُ</p></div>
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
                                        <div class="col"><p class="arabic_center">رَاغِبُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">غَفِلُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَتَلَاوَمُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَطِئِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">خَشِعِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">حَفِظِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَالَ لِاَبِيْهِ</p></div>
                                        <div class="col"><p class="arabic_center">بِعِبَادِهِ</p></div>
                                        <div class="col"><p class="arabic_center">فِيْ بُطُوْنِهِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَايَشُوْدُهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَسَنَزِيْدُ</p></div>
                                        <div class="col"><p class="arabic_center">مَقَالِيْدُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَتُهَاجِرُوْا</p></div>
                                        <div class="col"><p class="arabic_center">هُوَيَ عِطُهُ</p></div>
                                        <div class="col"><p class="arabic_center">سَيًصِيْبُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَارَ ءُوْفُ</p></div>
                                        <div class="col"><p class="arabic_center">يَابَاعِثُ</p></div>
                                        <div class="col"><p class="arabic_center">يَامَجِيْدُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَامَنَعَكَ</p></div>
                                        <div class="col"><p class="arabic_center">بِعَصَاكَ</p></div>
                                        <div class="col"><p class="arabic_center">وَكَذَلِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَامُتَعَالِى</p></div>
                                        <div class="col"><p class="arabic_center">شِيْعَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَجَعَلَنِىْ</p></div>
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
                                        <div class="col"><p class="arabic_center">كَانُوْافِيْهَا فَكِهِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">تُرَوِدُفَتَهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَيَقٌوْلُوْنَ مَتَى</p></div>
                                        <div class="col"><p class="arabic_center">وَحِيْنَ تَضَـعُوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَابَ وَاَمَنَ وَعَمِلَ</p></div>
                                        <div class="col"><p class="arabic_center">هَدَنَا سُبُلَنَا </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِاَيَتِنَايُوْقِنُوْ نَ</p></div>
                                        <div class="col"><p class="arabic_center">فِيْهَا مَعَايِشَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَجَاهِدُوْافِيْ سَبِيْلِهِ</p></div>
                                        <div class="col"><p class="arabic_center">صَابِرُوْا وَرَابِطُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكُتُبِهِوَرُسُلِهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَأُوْذُوْفِى سَبِيْلِى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَطُوْرِسِيْنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَقَعُوْا لَهُ سَجِدِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَخَرَقُوْالَهُ بَنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">لَسَحِرَانِ يُرِيْدَانِ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَجَعَلَ فِيْهَا رَوَاسِيَ</p></div>
                                        <div class="col"><p class="arabic_center">وَيَذَرَكَ وَاَلِهَتَكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَعَلَ هَذَا بِاَلِهَتِتَا</p></div>
                                        <div class="col"><p class="arabic_center">هَارُوْتَ وَمَارُوْتَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَتَعَاطَىفَعَـقَرَ</p></div>
                                        <div class="col"><p class="arabic_center">قَالُوْاتَقَاسَمُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَانُوْافِيْهَا فَكِهِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">كَانَ قَمِيْصُهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكَفَى بِنَالحَسِبِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَإِذَاسَاَلَكَ عِبَادِيْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَصَحِبَتِهِ وَبَنِيْهِ</p></div>
                                        <div class="col"><p class="arabic_center">فَكَانَ عَاقِبَتَهُمَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَخَافُوْنَ عَذَابَه</p></div>
                                        <div class="col"><p class="arabic_center">فَلَاتَلُوْمُوْنِيْ وَلُوْمُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Jika belum benar semua, jangan diteruskan <br> ke halaman EBTA. Coba diulangi lagi !</p></div>
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
                                        <div class="col"><p class="arabic_center">EBTA
                                        <br> Salah besar, bila keliru bacaan <br> PANJANG-PENDEKNYA</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَوْتِيَ كِتَبَهُ بِيَمِيْنِهِ فَيَقُوْلُ</p></div>
                                        <div class="col"><p class="arabic_center">فَإِذَا رَكِبُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَايَكاَدُ يُسِيْنُةُ</p></div>
                                        <div class="col"><p class="arabic_center">إِلَهَهُ هُوَاهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَفُوْمِهَاوَعَدَسهِاَ وَبَصَلِهَا</p></div>
                                        <div class="col"><p class="arabic_center">مَالُهُ وَوَلَدُهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَذُوْقُوْاعَذَابِيْ وَنُذُرِ</p></div>
                                        <div class="col"><p class="arabic_center">كَفَرُوْاسَبَقُوْا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِيْهَامَنَافِعُ وَمَشَارِبُ</p></div>
                                        <div class="col"><p class="arabic_center">فَكَانَ عَاقِبَتَهُمَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَافَ مَقَامِي وَخَافَ وَعِيْدِ</p></div>
                                        <div class="col"><p class="arabic_center">وَبَرَكَ فِيْهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهَامَنَ وَجُنُوْدَهُمَا كَانُوْاخَطِئِيْنَ</p></div>
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
                                        <div class="col"><p class="arabic_center">لَاتَقُوْلُوارَاعِنَاوَقُوْلُوْ</p></div>
                                        <div class="col"><p class="arabic_center">بِيْمَاتُفِيْضُوْنَ فِيْهِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَالَ لِصَاحِبِهِ وَهُوَ يُحَاوِرُهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَايَكَادُ يُبِيْنُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَرَكَ َاَلُ مُوْسَى وَاَلُهَرُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَغَلِبُوْاهُنَالِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَرَسُوْلَهُ كُبِتُوْاكَمَاكُبِتَ</p></div>
                                        <div class="col"><p class="arabic_center">كَاِمَتُنَالِعِبَادِنَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُقَاتِلُوْنَ فِيْ سَبِيْلِهِ</p></div>
                                        <div class="col"><p class="arabic_center">كَانُوْالَنَاعَبِدِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أُلْقُوافِيْهَاسَمِعُوالَهَا</p></div>
                                        <div class="col"><p class="arabic_center">لَهُ بِرَزِقِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Bila belum betul semua, lebih-lebih.....<br>PANJANG PENDEKNYA <br> STOP ! <br> JANGAN DINAIKKAN! <br> Sabarlah..... Mengulang</p></div>
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