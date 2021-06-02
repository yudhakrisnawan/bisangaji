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
                                        <div class="col"><p class="arabic_center">وَوَضَعَ آلْمِيْزَانَ</p></div>
                                        <div class="col"><p class="arabic_center">وَآلْقَمَرُبِحُسْبَانٍ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُضَعَفُ لَهُمُ آلْعَذَابُ</p></div>
                                        <div class="col"><p class="arabic_center">فَأَكْثَرُوْافِيْهَاآلْفَسَدَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَالِكَ آلْحِزْىُ آلْعَظِيْمُ</p></div>
                                        <div class="col"><p class="arabic_center">وَتَضْحَكُوْنَ وَلاَتَبْحَكُوْنَ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَلْ يَسْتَوِيَنِ مَثَلاً</p></div>
                                        <div class="col"><p class="arabic_center">لاَتَقُمْ لفِيْهِ أَبَدًا</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَحَشَرَفَنَادَى</p></div>
                                        <div class="col"><p class="arabic_center">وَهُوَبِآلْأُفُقِ آلْأَعْلَى</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهُوَآلْحَكِيْمُ آلْخَبِيْرُ</p></div>
                                        <div class="col"><p class="arabic_center">أَلَمْيَأْتِكُمْ نَذِيْرٌ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَهَشِيْمِ آلْمُحْتَظِرِ</p></div>
                                        <div class="col"><p class="arabic_center">فَآرْتَقِبْهُمْ وَآصْطَبِرْ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَتَوَاصَوْابِآلْمَرْحَمَةِ</p></div>
                                        <div class="col"><p class="arabic_center">وَنَمَارِقُ مَصْفُوفَةٌ</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> dibaca panjang 5 harakat. Huruf و dianggap tidak ada.<p></div>
                                        <div class="col"><p class="arabic_center"> لآَاَعْبُدُ -  اُولٰٓىِٕكَ<p></div>
                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لآَاَعْبُدُ مَاتَعْبُدُوْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> اُولٰٓىِٕكَ هُمُ الْمُفْلِحُوْنَ  <p></div>
                                    </div>                                  
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَلٰٓى اٰثَارِ هِمْ يُهْرَعُوْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> وَ سَلٰمٌ عَلَى الْمُرْسَلِيْنَ<p></div>                                
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اُولٰٓىِٕكَ عَلٰى هُدًى<p></div>
                                        <div class="col"><p class="arabic_center"> مَاكِثِيْنَ فِيْهِ اَبَدًا<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ◌ اَلَمْ نَجْعلِ اْلاَرْضَ مِهَا دًا<p></div>
                                        <div class="col"><p class="arabic_center"> بِهٰذَا الْحَدِ يْثِ اَسَفًا<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> مِنْ اَوْلِيَٓاءَ<p></div>
                                        <div class="col"><p class="arabic_center"> اُو لٰٓىِٕكَ هُمُ الْكَفَرَةُ الْفَجَرَةُ<p></div> 
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> آَ اِلٰى هٰٓؤُ لآَءِوَلآَاِلٰى هٰٓؤُلآَ<p></div>               
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
                                        <div class="col"><p class="arabic_center"> Setiap bacaan yang menghadap tasydid (  ّ  ) suara ditekan, ditahan 2 harakat dan berdengung<p></div>      
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِ نْ نَ =  ا نَّ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَنَ اَنَّ عَمَ عَمَّ<p></div>
                                        <div class="col"><p class="arabic_center"> اِنَّهُ اِنَّهَااُمُّهَ اُمَّهَا<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّهُمْ كَانُوْا مُجْرِمِيْنَ<p></div>
                                        <div class="col"><p class="arabic_center"> وَاِنَّٓا اِلَيْهِ رٰجِعُوْنَ <p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  ثُمَّ اَدْبَرَ يَسْعٰى <p></div>
                                        <div class="col"><p class="arabic_center"> فَاِنَّ الْجَحِيْمَ هِيَ الْمَأْوٰى<p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لٰبِثِيْنَ فِيْهَٓا اَحْقَا باً <p></div>
                                        <div class="col"><p class="arabic_center">  حَدَٓ اىِٕقَ وَاَ عْنَا بًا <p></div>
                                </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّ هٰذِهٖ تَذْكِرَةٌ<p></div>
                                        <div class="col"><p class="arabic_center"> ثُمَّ اَمَا تَهُ فَاَ قْبَرَهُ <p></div>
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
                                        <div class="col"><p class="arabic_center"> نُ  (  ًٌٍ )  ن / مMasuk dengan suara dengung<p></div>  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> خَيْرٌ ← نِّسَٓاءٌ ◌ مِنْ ← مَّٓاءٍ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمَا لَهُمْ مِّنْ نّٰصِرِ يْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> هُوَ فِيْ ضَلٰلٍ مُّبِيْنٍ <p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَلٰى صِرَاطٍ مُّسْتَقِيْمٍ <p></div>
                                        <div class="col"><p class="arabic_center">  ثُمَّ دَمَّرْنَا اْلاٰ خَرِيْنَ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> قَلِيلاً مَّا تَشْكُرُوْنَ<p></div>
                                        <div class="col"><p class="arabic_center"> قَالَ اِنَّكُمْ مَّا كِثُوْنَ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لِيُقْضٰٓى اَجَلٌ مُّسَمًّى <p></div>
                                        <div class="col"><p class="arabic_center"> اِنَّ كَيْديْ مَتِيْنٌ<p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَلَنْ نُّعْجِزَ هُ هَرَبًا<p></div>
                                        <div class="col"><p class="arabic_center"> فَكُلُوْهُ هَنِٓيْىًٔا مَّرِيْىًٔا <p></div>                                  
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَامِلَةٌ  نَّا صِبَةٌ<p></div>
                                        <div class="col"><p class="arabic_center"> خُشُبٌ مُّسَنَّدَةٌ <p></div>
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
                                        <div class="col"><p class="arabic_center"> ا ل  ّ(Alief Lam) dianggap tidak ada<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> بِالنُّذُرِ                                      وَالنَّاسُ                            وَالنَّهَارُ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فِيْ صُدُوْرِ النَّاس    الْوَسْوَاسِ ا لْخَنَّاسِ<p></div>
                                        <div class="col"><p class="arabic_center"> وَ النّٰزِعٰتِ غَرْقًا<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَالنّٰشِطٰتِ نَشْطًا<p></div>
                                        <div class="col"><p class="arabic_center"> وَ كُنَّا نَخُوْضُ مَعَ الْخَٓا ىِٕضِيْنَ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَمْ كَانَ مِنَ الْغَٓا ىِٕبِيْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> اَنِّيْ لَكُمْ نَذِيْرٌ مُّبِيْنٌ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  وَمَا لَكُمْ مِّنْ نّٰصِرِ يْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> عَمَّ يَتَسَٓاءَلُوْنَ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَنِ النَّبَاِ الْعَظِيْمِ<p></div>
                                        <div class="col"><p class="arabic_center"> ءَاِذَاكُنَّا عِظَامًا نَّخِرَةً <p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اُولٰٓىِٕكَ اَصْحٰبُ الْجَنَّةِ<p></div>
                                        <div class="col"><p class="arabic_center"> <p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> اَلنَّارِذَاتِ الْوَقُوْدِ<p></div>
                                        <div class="col"><p class="arabic_center"> اِذْ هُمْ عَلَيْهَا قُعُوْدٌ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّ جَهَنَّمَ كَانَتْ مِرْ صَادًا <p></div>
                                        <div class="col"><p class="arabic_center"> ◌ لِلطّٰغِيْنَ مَا بًا <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّهُ لَمِنَ الْكٰذِبِيْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> ثُمَّ اَغْرَقْنَا اْلاٰخَرِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَ لاَ تُبْطِلُٓوْا اَ عْمَالَكُمْ <p></div>
                                        <div class="col"><p class="arabic_center"> ثُمَّ قَضٰٓى اَجَلاً<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فِيْهَا سُرُرٌمَّرْفُوْعَةٌ<p></div>
                                        <div class="col"><p class="arabic_center"> وَاَكْوَابٌ مَّوْضُوْعَةٌ <p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّ هٰذَا لَشَيْىٌٔ عَجِيْبٌ <p></div>
                                        <div class="col"><p class="arabic_center"> اِنَّهُ حَمِيْدٌ مَّجِيْدٌ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّ اِلَيْنَٓا اِيَابَهُمْ <p></div>
                                        <div class="col"><p class="arabic_center"> ثُمَّ اِنَّ عَلَيْنَا حِسَابَهُمٔ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَادْخُلِيْ فِيْ عِبَادِيْ <p></div>
                                        <div class="col"><p class="arabic_center">  وَادْ خُلِيْ جَنَّتِيْ <p></div>
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
                                        <div class="col"><p class="arabic_center"> Setiap bacaan yang menghadap tasydid agar ditekan dan ditahan 2 harakat<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يُرَتِّلُ                            رَتَّلَ                        يُكَبِّرُ                       كَبَّرَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يُعَجِّل                           عَجَّلَ                       يُؤَثِّرُ                        اَثَّرَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يُسَخِّرُ                           سَخَّرَ                       يُلَحِّنُ                      لَحَّنَ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> رَبِّ زِدْنِيْ عِلْمًا<p></div>
                                        <div class="col"><p class="arabic_center"> وَارْزُقْنِيْ فَهْمًا<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَلْهٰكُمُ التَّكَاثُرُ<p></div>
                                        <div class="col"><p class="arabic_center"> حَتّٰى زُرْتُمُ الْمَقَابِرَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّ اْلاَبْرَارَلَفِيْ نَعِيْمٍ<p></div>
                                        <div class="col"><p class="arabic_center"> وَاِنَّ الْفُجَّارَ لَفِيْ جَحِيْمٍ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> سُبْحٰنَ الَّذِيْ سَخَّرَ لَنَا هٰذَا <p></div>
                                        <div class="col"><p class="arabic_center"> وَمَا كُنَّا لَهُ مُقْرِنِيْنَ<p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> بَدَّلَ                       يُبَدِّلُ                     اَذَّنَ                      يُؤَ ذِّنُ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> كَرَّمَ                      يُكَرِّمُ                    وَزَّرَ                      يُوَزِّرُ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَسَّرَ                      يُفَسِّرُ                    بَشَرَ                       يُبَشِّرُ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاٰثَرَ الْحَيٰوةَ الدُّنْيَا <p></div>
                                        <div class="col"><p class="arabic_center"> وَكَذَّبَ بِالْحُسْنٰى<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَالْمَلَكُ عَلٰٓى اَرْجَٓاىِٕهَا <p></div>
                                        <div class="col"><p class="arabic_center"> فَكَذَّبُوْهُ فَعَقَرُوْهَا <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  فِيْ صُحُفٍ مُّكَرَّمَةٍ <p></div>
                                        <div class="col"><p class="arabic_center"> مَّرْفُوْعَةٍ مُّطَهَّرَةٍ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> مَٓا اُوْحِيَ اِلَيْكَ <p></div>
                                        <div class="col"><p class="arabic_center"> سَنَدْعُ الزَّبَانِيَةَ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  وَهُوَ السَّمِيْعُ الْعَلِيْمُ <p></div>
                                        <div class="col"><p class="arabic_center">  لَنَكُوْنَنَّ مِنَ الشّٓكِرِ يْنَ <p></div>
                                    
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
                                        <div class="col"><p class="arabic_center"> خَفَّفَ  يُخَفِّفُ  وَقَرَّ  يُوَقِرُ<p></div> 
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> سَكَّنَ يُسَكِنُ عَلَّمَ يُعَلِّمُ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَمَّنَ يُؤَمِّنُ مَنَّعَ يُمَنِّعُ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> كَاَنَّهُمْ لُؤُلُؤٌ مَّكْنُوْن<p></div>
                                        <div class="col"><p class="arabic_center"> عَلٰى سُرُ رٍ مُّتَقٰبِلِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَلَقَدْ مَكَّنّٰهُمْ فِيْمَٓا اِنْ مَّكَّنّٰكُمْ فِيْهِ<p></div>
                                        <div class="col"><p class="arabic_center"> اَرَءَ يْتَ الَّذِيْ يَنْهٰى<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَبْدً ا اِذَا صَلّٰى<p></div>
                                        <div class="col"><p class="arabic_center"> حَقًّا عَلَى الْمُحْسِنِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاِلاَّ تَغْفِرْ لِيْ وَتَرْحَمْنِيْ <p></div>
                                        <div class="col"><p class="arabic_center"> مِنْ عَسَلٍ مُّصَفًّى<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاتَّبَعَ هَوٰ ىهُ فَتَرْدٰى<p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> خَفَّفَ                يُخَفِّفُ                       وَ قَرَّ                         يُوَقِرُ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> سَكَّنَ                 يُسَكِنُ                        عَلَّمَ                          يُعَلِّمُ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَمَّنَ                  يُؤَمِّنُ                         مَنَّعَ                         يُمَنِّعُ<p></div>                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> كَاَنَّهُمْ لُؤُلُؤٌ مَّكْنُوْنٌ <p></div>
                                        <div class="col"><p class="arabic_center"> عَلٰى سُرُ رٍ مُّتَقٰبِلِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَلَقَدْ مَكَّنّٰهُمْ فِيْمَٓا اِنْ مَّكَّنّٰكُمْ فِيْهِ<p></div>
                                        <div class="col"><p class="arabic_center"> اَرَءَ يْتَ الَّذِيْ يَنْهٰى<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَبْدً ا اِذَا صَلّٰى<p></div>
                                        <div class="col"><p class="arabic_center"> حَقًّا عَلَى الْمُحْسِنِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاِلاَّ تَغْفِرْ لِيْ وَتَرْحَمْنِيْ <p></div>
                                        <div class="col"><p class="arabic_center"> مِنْ عَسَلٍ مُّصَفًّى<p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاتَّبَعَ هَوٰ ىهُ فَتَرْدٰى<p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> وَا لشَّمْسِ وَضُحٰهَا<p></div>
                                        <div class="col"><p class="arabic_center">  وَالْقَمَرِ اِذَا تَلٰهَا <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَلَّذِيْ خَلَقَ فَسَوّٰى<p></div>
                                        <div class="col"><p class="arabic_center">  وَالَّذِيْ قَدَّ رَ فَهَدٰ ى<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاِبْرٰ هِيْمَ الَّذِيْ وَ فّٰى<p></div>
                                        <div class="col"><p class="arabic_center"> اَفَرَ ءَيْتُمُ الّٰلتَ وَ الْعُزّٰ ی<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاِذَا اْلاَرْضُ مُدَّتْ <p></div>
                                        <div class="col"><p class="arabic_center"> وَاَلْقَتْ مَافِيْهَا وَ تَخَلَّتْ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِنَّهُ عَلٰى رَجْعِهٖ لَقَا دِر<p></div>
                                        <div class="col"><p class="arabic_center"> يَوْمَ تُبْلَى السَّرَٓاىِٕرُ <p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَفَاكِهَةٍ مِّمَّايَّتَخَيَّرُ وْن<p></div>
                                        <div class="col"><p class="arabic_center"> وَلَحْمِ طَيْرٍ مِّمَّا يَشْتَهُوْنَ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  وَرَبَّ اٰبَٓاىِٕكُمُ اْلاَوَّلِيْنَ <p></div>
                                        <div class="col"><p class="arabic_center"> هُوَ الَتَّوَّابُ الرَّحِيْمُ<p></div>
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
                                        <div class="col"><p class="arabic_center"> رَبَّنَااطْمِسْ                           وَلاَ تُحَمِّلْنَا                           لاَ يُكَلِّفُ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  فَالْمُدَبِّرٰ تِ                            فِيْشَكٍّ                                 اِلاَّذُرِّيَّةٌ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يَفِرُّ الْمَرْءُ                                     هُمُ الطَّاغُوْ تَ             مِنَ الشَّيْطٰنِ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَلضَّلٰلَةُ                                بِالْغُدُ وِّ                           اٰمَنَ السُّفَهَٓاءُ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> جُيُوْبِهِنَّ                             اَوْاٰ بَٓاىِٕهِنَّ                           اَوِالتَّابِعِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لاَ شَرْ قِيَّةٍ                            لِلْمُتَّقِيْنَ                          اَلَّذِيْنَ اشْتَرَ وْا<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ثَمَّ اقْضُوْا                           وَ مَلٰٓىِٕكَتِهٖ                            فِى السَّرَّٓاءِ<p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَالضَّرَّٓاءِ                            اَوْلِيٰٓىُٔهُمْ                            فِى الظُّلُمٰتِ<p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> Ketemu اَ كَفَرُ تُمْ بَعْدَ اِيْمَا نِكُمْ   مْ   ن Dibaca dengung<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَبَشِّرْ هُمْ بِعَذَابٍ اَلِيْمٍ <p></div>
                                        <div class="col"><p class="arabic_center"> وَزَوَّجْنٰهُمْ جِحُوْرٍ عِيْنٍ<p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> تَرْمِيْهِمْ جِحَجَارَةٍ <p></div>
                                        <div class="col"><p class="arabic_center"> وَمَا هُمْ بِمُؤْمِنِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَجَزَيٰهُمْ بِمَاصَبَرُوْا <p></div>
                                        <div class="col"><p class="arabic_center"> وَمَاصَاحِبُكُمْ بِمَجْنُونٍ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِلآَّاَسَاطِيْرُ اْلاَوَّلِيْنَ<p></div>
                                        <div class="col"><p class="arabic_center"> كَاَنَّهُنَّ قَيْضٌ مَكْنُوْنٌ <p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَلَيْهِمْ بِاْلاِ ثْمِ وَالْعُدْوَانِ<p></div>
                                        <div class="col"><p class="arabic_center"> وَهُوَ خَيْرُا لرّٰزِقِيْنَ<p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَ يُطَهِّرَكُمْ تَطْهِيْرًا<p></div>
                                        <div class="col"><p class="arabic_center"> ذُوْاَلْجَلَٰلِ وَاْلإِكْرَامِ <p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَكَفِّرْ عَنَّاسَيِّاٰ تِناَ <p></div>
                                        <div class="col"><p class="arabic_center"> وَتَوَفَّنَا مَعَ اْلاَبْرَارِ <p></div>
                                        
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
                                     <div class="container">

                                <div class="row">
                                    <div class="col"><p class="arabic_center">قَدْأَفْلَحَ الْمُؤْمِنُوْنَ o آلَّذِيْنَ هُمْ فِى صَلاَتِهِمْ خَشِعُوْنَ</p></div>
                                   
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center">وَالَّذِيْنَ هُمْ عَنِ الَّغْوِمُعْرِضٌوْنَ o وَالَّذِيْنَ هُمْ</p></div>
                                    
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center">لِلزَّكَوةِفَعِلُوْنَ o وَالَّذِيْنَ هُمْ لِفُرٌوْجِهِمْ حَفِظٌوْنَ</p></div>
                                   
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"> إِلاَّعَلَىأَزْوَجِهِمْ أَوْمَامَلَكَتْ أَيْمَنُهُمْ فَإِنَّهُمْ o</p></div>
                                    
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center">غَيْرُمَلُوْمِيْنَ o فَمِنْ آبْتَغَى وَرَآءَذَلِكَ فَأُوْلَئِكَ هُمُ</p></div>
                                   
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center">o آوَآلَّذِيْنَ هُمْ لِأَمَنَتِهِمْ وَعَهْدِهِمْ رَاعُوْنَ o آلْعَدُوْنَ </p></div>
                                    
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center">أُوْلَئِكَ هُمُ o وَآلَّذِيْنَ هُمْ عَلَى صَلَوَاتِهِمْ يُحَافِظُوْنَ  </p></div>
                                   
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"> آلَّذِيْنَ يَرِثُوْنَ الْفِرْدَوْسَ هُمْ فِيْهَاخَالِدُوْنَ o آلْوَارِثُوْنَ </p></div>
                                    
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
                                        <div class="col"><p class="arabic_center">Bila sebelumnya berharokat A atau U maka dibaca LOH وَاللَّهُ - رَسُوْلُ اللَّهِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قُلْ هٌوَاللَّهُ أَحَدٌ</p></div>
                                        <div class="col"><p class="arabic_center">آللَّهُ الصَّمَدُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَأَكْثَرُوْافِيْهَا الْفَسَدَ</p></div>
                                        <div class="col"><p class="arabic_center">آلَّذِيْنَ طَغَوْافِى الْبِلَدِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَأِذَاهُمْ بِآلسَّهِرَةِ</p></div>
                                        <div class="col"><p class="arabic_center">تِلْكَءَايَتُ اللَّهِ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَضَّلَ اللَّهُ الْمُجَهِدِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَصْلَوْنَهَايَوْمَ الَّذِيْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَرَبُ الْعَرْشِ الْعَظِيْمِ</p></div>
                                        <div class="col"><p class="arabic_center">وَاللَّهُ وَلِيُّ الْمُؤْمِنِيْنَ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُبَيِّنُ اللَّهُءَايَتِهِ</p></div>
                                        <div class="col"><p class="arabic_center">تِلْكَ  حُدُوْدُاللَّهِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاتَّقُوْاللَّهَ الَّذيْ تَسَآءَلُوْنَ بِهِ وَالْاَرْحَامَ</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center">Bila sebelumnya berharokat I maka bacalh LAH لِلَّهِ  بِآللَّهِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْحَمْدُلِلَّهِ</p></div>
                                        <div class="col"><p class="arabic_center">بِسْمِ اللَّهِ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَلَقَ الْمَوْتَ وَالْحَيَوَاتَ</p></div>
                                        <div class="col"><p class="arabic_center">وَلاَقُوَّةَإِلاَّبِآللَّهِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَيُرْسِلُ عَلَيْكٌمْ حَفَظَةً</p></div>
                                        <div class="col"><p class="arabic_center">أَفَأَمِنُوْامَكْرَآللَّهِ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهُوَالْعَلِيُّ الْعَظِيْمُ</p></div>
                                        <div class="col"><p class="arabic_center">وَهُوَبِكُلَّ شَيْءٍعَلِيْمٌ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآللَّهُ بِمَاتَعْمَلُوْنَ عَلِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">يُحَاسِبْكُمْ بِهِ اللَّهِ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَكَفَى بِآللَّهِ شَهِيْدَا</p></div>
                                        <div class="col"><p class="arabic_center">قُلِ اللَّهُ أسْرَعُ مَكْرًا</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَجَعَلَهُ غُثَآءًأَحْوَى</p></div>
                                        <div class="col"><p class="arabic_center">وَآلَّذِىْ أَخْرَجَ الْمَرْعَى</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center">Masuk dengan suara tak dengung ر Jadi suara نْ /tanwin hilang (-ً-ٍ-ٌ) نْ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَنْ رَءَاى   =   مَنْ رَّءَاى</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَافِضَةٌ - رَافِعَةٌ  =  خَافِضَةٌ - رَّافِعَةٌ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآللَّهُ غَفُوْرٌحَلِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">وَآللَّهُ غَفُوْرٌرَّحِيْمٌ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِنَّ إِلَى رَبِّكَ آلرًّجْعَى</p></div>
                                        <div class="col"><p class="arabic_center">أَنْرَّءَاهُسْتَغْنَى</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَللَّهِ آلْأَخِرَةِوَآلْأُوْلَى</p></div>
                                        <div class="col"><p class="arabic_center">لَهُ شِهَابًارَّصَدًا</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلِلَّهِ آلْأَسْمَآءُآلْحُسْنَى</p></div>
                                        <div class="col"><p class="arabic_center">عَلَى آللَّهِ تَوَكَّلْنَا</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَهَزَمُوْهُمْ بِإِذْنِ آللَّهِ</p></div>
                                        <div class="col"><p class="arabic_center">فِى عِيْشَةٍرَّضِيَةٍ</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center">Masuk dengan suara tak dengung ل Jadi suara نْ /tanwin hilang (-ً-ٍ-ٌ) نْ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَيْرٌ - لَكَ - خَيْرٌلَّكَ</p></div>
                                        <div class="col"><p class="arabic_center">مَنْ - لَمْ - مَنْ لَّمْ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِنَّهُ بِهِمْ رَءُفُرَّحِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">ذِكْرٌلِلْعَلَمِيْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآللَّهُ غَنِيٌّ حَلِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">يَوْمَئِذٍلَّلْمُكَذِّبِيْنَ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَنْ لَمْ يَجِدْفَصِيَامُ ثَلَثَةِأَيَّمٍ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَرِيْ ضَةًمِّنَ آللَّهِ</p></div>
                                        <div class="col"><p class="arabic_center">فَإِنْ لَّمْ يَكُنْ لَّهُ وَلَدٌ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْ مَّغْرَمٍ مُّثْقَلُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَكِنْ لاَّتَشْعُرُوْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَعْلَمُ آلسِّرَّوَأَخْفَى</p></div>
                                        <div class="col"><p class="arabic_center">خَيْرٌلَّكَ مِنَ آلْأُوْلَى</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center">وَهَدَيْنَهُ آلنَّجْدَيْنِ</p></div>
                                        <div class="col"><p class="arabic_center">أَلَمْ نَجْعَلْ لَّهُ عَيْنَيْنِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَإِنَّ عَلَيْكُمْ لَحَفِظِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">طَآئِفَةٌمَّنَ آلْمُؤْمِنِيْنَ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تُوْسُوْنَ بِهَآأَوْدَيْنٍ</p></div>
                                        <div class="col"><p class="arabic_center">يَوَيْلَنَآإِنَّاكُنَّاطَغِيْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِنَّآإِلَى اللَّهِ رَاغِبُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَآللَّهُ خَيْرُآلرَّزِقِيْنَ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَآتَّقُوْآللَّهَ وَأَطِيْعُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">بُعْدًالِّقَوْمٍ لاَّيُؤْمِنُوْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قُتِلَ أَصْحَبُ آلْأُحْدُوْدِ</p></div>
                                        <div class="col"><p class="arabic_center">وَمَامَسَّنَامِنْ لُّغُوْبٍ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِلاَّمَنْ رَّحِمَ آللَّهُ</p></div>
                                        <div class="col"><p class="arabic_center">مِنْ أَيِّ شَيْءٍخَلَقَهُ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُؤْتِى مَالَهُ يَتَزَكَّى</p></div>
                                        <div class="col"><p class="arabic_center">سَيَقُوْلُوْنَ لِلَّهِ</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center"> ( ّ ~) Bacaan harus panjang 6 harokat baru diikuti dengan tasydid - وَلاَالضَّآلِّيْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِنَّ مَعَ آلْعُسْرِيُسْرًا</p></div>
                                        <div class="col"><p class="arabic_center">جَآءَتِ آلطَّآمَّةُآلْكُبْرَى</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">الْحَآقَّةُ مَاآلْحَآقَّةُ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمْ يَكُنْ لَّهُ كُفُوًاأَحَدٌ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآلْأَمْرُيَوْمَئِذٍلِّلَّهِ</p></div>
                                        <div class="col"><p class="arabic_center">فَإِذَاجَآءَتِ آلصَّآخَّةُ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلاَتَحَآلضُّوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَكُلُوْامِنْ رِّزْقِهِ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَوَجَدَكَ ضَآلاًّفَهَدَى</p></div>
                                        <div class="col"><p class="arabic_center">بَلْ هُوَخَيْرٌلَّكُمْ</p></div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَآللَّهُ وَلِيُّ آلْمُتَّقِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَإِنَّالَنَحْنُ آلصَّآفُّوْنَ</p></div>
                                    
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إنَّهُ كَانَ مِنَ آلضَّآلِّيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">آلَّذِى يَدُعُّ آلْيَتِيْمَ</p></div>
                                        
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
                                        <div class="col"><p class="arabic_center">اِنَّ اِلىَ رَبِّكَ الرُّجْعَى</p></div>
                                        <div class="col"><p class="arabic_center">اِنْ اَرَدْنَآاِلاَّاْلحُسْنَ</p></div>                                          
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَالزَّجِرَتِ زَجْرًا</p></div>  
                                        <div class="col"><p class="arabic_center">وَالصَّفَّتِ صَفًّا</p></div> 
                                    </div>
                                        <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاْلمُؤْتَفِكَةَ اَهْوَى</p></div>
                                        <div class="col"><p class="arabic_center">وَكَفَى بِاللَّهِ شَهِيْدًا</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَتَاعًا لَّكُمْ وَلِاَنْعَامِكُمْ</p></div>
                                        <div class="col"><p class="arabic_center">نِسَآؤُكُمْ حَرْثٌ لَّكُمْ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَلآاِنَّهَاقُرْبَةٌ لَّكُمْ</p></div>
                                        <div class="col"><p class="arabic_center">فُضِّلُوْابِرَآدِّيْ رِزْقِهِمْ</p></div>                                      
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِنَّ اللَّهَ مَعَ الصَّبِرِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَقُوْمُوْالِلَّهِ قَنِتِيْنَ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاَنَّ اللَّهَ تَوَّابٌ حَكِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">اِنَّ اللَّهَ سَمِيْعٌ عَلِيْمٌ</p></div>                                           
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَافِضَةٌرَّافِعَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">حَتَّى تَأْتِيَهُمُ اْلبَيِّنَةُ</p></div>                                  
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
                                        <div class="col"><p class="arabic_center">EBTA > Bila telah benar semuanya walaupun pelan pembacanya boleh dinaikkan ke jilid 6</p></div>                                          
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مُحَمَّدٌرَّسُوْلُ اللَّهِ</p></div>  
                                        <div class="col"><p class="arabic_center">لآاِلَهَ اِلاَّاللَّهُ</p></div> 
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَلَّذِيْنَ يُؤْمِنٌوْنَ بِاْلغَيْبِ وَيُقِيْمُوْنَ الصَّلَوةَ</p></div>                                     
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِنَّ اْلفَضْلَ بِيَدِاللَّهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَيُؤْتُوْنَ الزَّكَوةَ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهُوَاللَّطِيْفُ اْلخَبِيْرُ</p></div>
                                        <div class="col"><p class="arabic_center">لِكٌلِّ اَوَّابٍ حَفِيْظٍ</p></div>                                      
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَرَاَهُ فِيْ سَوَآءِاْلجَحِيْمِ</p></div>
                                        <div class="col"><p class="arabic_center">اِنْ هُمْ اِلاَّيَظُنُّوْنَ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُمْ اَصْحَبُ اْلمَشْئَمَةِ</p></div>
                                        <div class="col"><p class="arabic_center">وَيْلٌ لِّكُلِّ هُمَزَةٍ لُّمَزَةٍ</p></div>                                           
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَلَّتِيْ تَطَّلِعُ عَلَى اْلاَفْئِدَةِ</p></div>
                                        <div class="col"><p class="arabic_center">نَارُاللَّهِ اْلمُوْقَدَةُ</p></div>                                  
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
                                            <div class="col"><p class="arabic_center">وَاِنْ لَّمْ تَغْفِرْلَنَاوَتَرْحَمْنَا لَنَكُوْنَنَّ مِنَ اْلخَسِرِيْنَ</p></div>                                         
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">فَطَافَ عَلَيْهَاطَآئِفٌ مِّنْ رَّبِّكَ وَهُمْ نَآئِمُوْنَ</p></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">وَاِذَارَاَوْهُمْ قَالُوَآاِنَّ هَؤُلآءِلَضَآلُّوْنَ</p></div>                                     
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">وَلاَنُكَذِّبُ بِاَيَتِ رَبِّنَاوَنَكُوْنَنَّ مِنَ اْلمُؤْمِنِيْنَ</p></div>                                      
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">فَلَمَّاجَآءَهُمْ بِاَيَتِنَآاِذَاهُمْ مِّنْهَايَضْحَكُوْنَ</p></div>                                    
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">وَرَاَيْتَ النَّاسَ يَدْخُلُوْنَ فِيْ دِيْنِ اللَّهِ اَفْوَاجًا</p></div>                                      
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">فَسَبِّحْ بِحَمْدِرَبِّكَ وَاسْتَغْفِرْهُ اِنَّهَ كَانَ تَوَّابًا</p></div>                                         
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col"><p class="arabic_center">MAAF ! Bila belum benar semuanya sebaiknya tak segan mengulang</p></div>                                 
                                        </div>                    
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