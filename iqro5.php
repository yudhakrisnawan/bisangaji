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
        <?php
            if($r['id_level'] == 2){
        ?>
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
                        <a class="collapse-item" href="video.php">Video Belajar Mengaji</a>
                    </div>
                </div>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        <?php
            } else if($r['id_level'] == 1){
        ?>
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
            <li class="nav-item active">
                <a class="nav-link" href="manajemen_user.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manajemen user</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSatu"
                    aria-expanded="true" aria-controls="collapseSatu">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Manajemen Konten</span>
                </a>
                <div id="collapseSatu" class="collapse" aria-labelledby="headingSatu" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="video_admin.php">Video</a>
                    </div>
                </div>
            </li>
            <br>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        <?php
            }
        ?>
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
                                <a class="dropdown-item" id="custom-dropdown" href="user_setting.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    User Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" id="custom-dropdown" href="logout.php" data-toggle="modal" data-target="#logoutModal">
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
                                    <h4 align="center">Iqro 5</h4>
                                    <br>
                                </div>
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 1</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْحَمْدُ</p></div>
                                        <div class="col"><p class="arabic_center">آ لْحَمْدُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَكَ آ لْحَمْدُ</p></div>
                                        <div class="col"><p class="arabic_center">بِآلْحَمْدِ</p></div>
                                        <div class="col"><p class="arabic_center">مَعَ آ لْحَمْدِ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِآلْفَاتِحَة</p></div>
                                        <div class="col"><p class="arabic_center">وَآلْفَجْرِ</p></div>
                                        <div class="col"><p class="arabic_center">وَآلْعَصْرِ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْإِيْمَانِ</p></div>
                                        <div class="col"><p class="arabic_center">بِآلْإِسْلاَمِ</p></div>
                                        <div class="col"><p class="arabic_center">فِىآلْكِتَابِ</p></div>    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآقْتَرِبْ</p></div>
                                        <div class="col"><p class="arabic_center">وَآسْتَغْفِرْهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَآمْرَأَتُهُ</p></div>                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْعَادِيَآتِ</p></div>
                                        <div class="col"><p class="arabic_center">مَاآلْقَارِعَةُ</p></div>
                                        <div class="col"><p class="arabic_center">بِآسْمِكَ</p></div>                                  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَلَىآلْأَفْعِدَةِ</p></div>
                                        <div class="col"><p class="arabic_center">فِىآلْأَرْضِ</p></div>
                                        <div class="col"><p class="arabic_center">بِآلْمَرْحَمَةِ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْمُشْرِكِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">لِلْكَفِرِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فِىآلْجَحِىمِ</p></div>      
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
                                        <div class="col"><p class="arabic_center">فِى آلْأَرْضِ</p></div>
                                        <div class="col"><p class="arabic_center">مَاآقْتَتَلُوْا</p></div>
                                        <div class="col"><p class="arabic_center">مَاآكْتَسَبَتْ</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَبِآلْأَخِرَةِ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَقَامِى</p></div>
                                        <div class="col"><p class="arabic_center">سَيُبْتِلُهُ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مُذْعِنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَآلْأَفْءِدَةَ</p></div>
                                        <div class="col"><p class="arabic_center">مِنَآلْغَيْظِ</p></div>                               
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنَآلْمُشْرِكِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">مُعْجِزِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">غِشَاوَةٌ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَوْعِضَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">بِآلْمُوءْمِنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَأْوَاهُمْ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَمِشْكَوَاتٍ</p></div>
                                        <div class="col"><p class="arabic_center">وَآلْأَصَالِ</p></div>
                                        <div class="col"><p class="arabic_center">فِى تُغْيَانِهِمْ</p></div>
                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غُفْرَانَكَ</p></div>
                                        <div class="col"><p class="arabic_center">لاَتُوءَاحِذْنَا</p></div>
                                        <div class="col"><p class="arabic_center">فِيهَاسْمُهُ</p></div>                                       
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
                                        <div class="col"><p class="arabic_center">Bila waqof/berhenti huruf terakhir dibaca mati</p></div>
                                        <div class="col"><p class="arabic_center">ءَامِينَ = ءَامِينْ</p></div>  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مُهْتَدِينَ...</p></div>
                                        <div class="col"><p class="arabic_center">نَسْتَعِينُ...</p></div>  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَطَوْرِسِينِينَ...</p></div>
                                        <div class="col"><p class="arabic_center">ينَ آلْيَقِينِ...</p></div> 
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَسْتَهْزِءُوْنَ...</p></div>
                                        <div class="col"><p class="arabic_center">يَكْذِبَوْنَ...</p></div>
                                    </div>  
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَصْلِحُونَ...</p></div>
                                        <div class="col"><p class="arabic_center">مَعْرِضُونَ...</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِذَاحَسَدَ...</p></div>
                                        <div class="col"><p class="arabic_center">فِى آلْعُقَدِ...</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَصْحَبِ آلْفِيلِ...</p></div>
                                        <div class="col"><p class="arabic_center">فِى تَضْلِيلٍ...</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنَ آلْمُمْتَرِينَ...</p></div>
                                        <div class="col"><p class="arabic_center">يَحْتَلِفَونَ...</p></div>                                   
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
                                        <div class="col"><p class="arabic_center">وَمَابَينَهُمَالَعِبِينَ</p></div>
                                        <div class="col"><p class="arabic_center">وَقَوْمُهُمَالَنَاعَبِدُونَ</p></div>                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَذَآلِكَ نَجْزِىآلْمُحْسِنِينَ</p></div>
                                        <div class="col"><p class="arabic_center">ذَالِكَآلْفَوْزُآلْعَظِيمُ</p></div>                                                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُمْ فِيهَاخَلِدُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَآرْتَقِبْهُمْ وَآصْطَبِرْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَالَكُمْ لاَتَنَاصَرُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فِى آلْعَذَابِ مُشْتَرِكُونَ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَالَهُمْلاَيُوءْمِنُونَ</p></div>
                                        <div class="col"><p class="arabic_center">وَأَكْثَرُهُمُ آلْفَسِقُونَ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْ حَيثُلاَيَشْعُرُونَ</p></div>
                                        <div class="col"><p class="arabic_center">أَعْلَمُ مَالاَتَعْلَمُونَ</p></div>                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَتَوَاصَوْابِآلْمَرْحَمَةِ</p></div>
                                        <div class="col"><p class="arabic_center">كَهَشِيمِ آلْمُحْتَظِرِ</p></div>                                  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَفِرَعَوْنَ ذِى آلْأَوْتَادِ</p></div>
                                        <div class="col"><p class="arabic_center">إِرَمَ ذَاتِ آلْعِمَادِ</p></div>                                 
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 5</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَنَحْنُ لَهُ مُسْلِمُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فِى آلْفُلْكِ آلْمَشْحُوْنِ</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَاكَانُوْامِنَ آلْمُهْتَدِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">فَمَالَكُمْ كَيْفَ تَحْكُمُوْنَ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُوَآلْحُسْرَانُ آلْمُبِينُ</p></div>
                                        <div class="col"><p class="arabic_center">لاَيُفْلِحُوْ آلْكَفِرُوْنَ</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهُمْلاَيَشْعُرٌونَ</p></div>
                                        <div class="col"><p class="arabic_center">بِآلْأَخِرَتِ هُمْ يُوْقِنٌونض</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَذَآلِكَ نَفْعَلُ بِآلْمُجْرِمينَ</p></div>
                                        <div class="col"><p class="arabic_center">بَلْ عَجِبْتَ وَيَسخُرُونَ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهَذَ آلْبَلَدِآلْأَمِينَ</p></div>
                                        <div class="col"><p class="arabic_center">سَنَسِمُهُ عَلَى آلْخُرْطُومِ</p></div>                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَاكَانُوْامِنَ آلْمُشْرِكِينَ</p></div>
                                        <div class="col"><p class="arabic_center">مَاكَانُوْابِهِ يَسْتَهْزِءُوْنَ</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صِرًاطَكَ آلْمُسْتَكِيمَ</p></div>
                                        <div class="col"><p class="arabic_center">هُمُ آلْيَوْمَ مُسْتَسْلِمُونَ</p></div>                                   
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
                                        <div class="col"><p class="arabic_center">Bila waqo/berhenti tanwin ً dihilangkan dan dibaca panjang</p></div>
                                        <div class="col"><p class="arabic_center">أَبَدًا = أَبَدَا</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْعَدِيَتِ ضَبْحًا</p></div>
                                        <div class="col"><p class="arabic_center">يَوْمَ آلْقِيَمَةِوَزْنًا</p></div>                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَآلْمُغِيرَاتِ صُبْحًا</p></div>
                                        <div class="col"><p class="arabic_center">فَآلْمُوْرِيَتِ قَدْحًا</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَوَسَطْنَ بِهِ جَمْعًا</p></div>
                                        <div class="col"><p class="arabic_center">فَأَثَرْنَبِهِ نَقْعًا</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَجَعَلْنَانَوْمَكُمْ سُبَاتَا</p></div>
                                        <div class="col"><p class="arabic_center">وَخَلَقْنَكُمْ أَزْوَاجًا</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُحْسِنُوْنَ صُنْعًا</p></div>
                                        <div class="col"><p class="arabic_center">بِآلْأَخْسَرِيْنَ أَعْمَلاً</p></div>                                      
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَزِدْنَهُمْ هُدًى</p></div>
                                        <div class="col"><p class="arabic_center">كَانُوْامِنْءَايَتِنَا عَجَبًا</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَيَصْلَى سَعِيْرًا</p></div>
                                        <div class="col"><p class="arabic_center">فَسَوْفَيَدْعُوْاثُبُوْرًا</p></div>                                       
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
                                        <div class="col"><p class="arabic_center">Bila waqof/berhenti ىة berubah menjadi ىه sukun mati</p></div>
                                        <div class="col"><p class="arabic_center">ءَانِيَةٍ = ءَانِيَهْ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تُسْقَى مِنْ عَيْنٍ ءَانِيَةً</p></div>
                                        <div class="col"><p class="arabic_center">تَصْلَى نَارًاحَامِيَةً</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لاَتَسْمَعُ فِيْهَالَغِيَةً</p></div>
                                        <div class="col"><p class="arabic_center">لِسَعْيِهَارَاضِيَةٌ</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْ أَمْرِنَارَشَدًا</p></div>
                                        <div class="col"><p class="arabic_center">مَالَمْ تُحِطْ بِهِ حُبْرًا</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهُوَخَيْرُآلْحَكِمِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">مَانَحْنُ بِمُسْتَيْقِنِيْنَ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِرْعَوْنَ وَثَمُوْدَ</p></div>
                                        <div class="col"><p class="arabic_center">هَلْ أَتَكَ حَدِيْثُ آلْجُنُوْدِ</p></div>
                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَيْسَ لِوَقْعَتِهَاكَاذِيَةٌ  </p></div>
                                        <div class="col"><p class="arabic_center">إِذَاوَقَعَتِ آلْوَاقِعَةُ</p></div>
                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْأَرْضِوَمَاطَحَهَا</p></div>
                                        <div class="col"><p class="arabic_center">وَآلْقَمَرِإِذَاتَلَهَا</p></div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
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