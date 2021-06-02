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
                                    <h4 align="center">Iqro 6</h4>
                                    <br>
                                </div>
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 1</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">نْ ( ً - ٍ -  ٌ ) Masuk dengan dengung. Ditekan & ditahan 2 harokat و</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رٌ - وَ - خَيْرٌوَأَبْقَى</p></div>
                                        <div class="col"><p class="arabic_center">مِنْ - وَ - مِنوَاحِدٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                       
                                        <div class="col"><p class="arabic_center" style="word-spacing: 79px;">حَبّاوَنَبَاتًا - سِرَاجًاوَهَّاجًا - زَجْرَةٌوَاجِدَةٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَدُوًّاوَحَزَنًا</p></div>
                                        <div class="col"><p class="arabic_center">رَحْمَةًوَعِلْمًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْ وَرَآىءِهِمْ مُّحِيْطٌ</p></div>
                                        <div class="col"><p class="arabic_center">وَإِلَهُكُمْ إِلَهٌ وَحِدٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَانَ فَحِشَةًوَمقْتًا</p></div>
                                        <div class="col"><p class="arabic_center">أَحْسَنُ أَثَيًاوَرِءْيًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَالْأَخِرَةُخَيْرٌوَأَبْقَى</p></div>
                                        <div class="col"><p class="arabic_center">إَلَّاحَمِيْمًاوَغَسَّاقًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْوَلِيٍّ وَلَانَصِيْرٍ</p></div>
                                        <div class="col"><p class="arabic_center">بُهْتَنًاوَإِثْمًامُّبِيْنًا</p></div>
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
                                        <div class="col"><p class="arabic_center">نُوْحٍ وَعَادٍوَثَمُوْدَ</p></div>
                                        <div class="col"><p class="arabic_center">وَوَالِدٍوَمَاوَلَدَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُدًى وَبُشْرَى لِلْمُؤْمِنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">سَبْعَةٌوَثَامِنُهُمْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ثَوَابًاوَخَيْرٌمَّرَدًّا</p></div>
                                        <div class="col"><p class="arabic_center">وَفِرْحُوْابِآلْحَيَوَاةِآلدُّنْيَا</p></div>
                                    </div>
                                    <hr> 
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَحْسَبُ أَنَّ مَالَهُ وَأَخْلَدَهُ</p></div>
                                        <div class="col"><p class="arabic_center">آلَّذِى جَمَعَ مَالًاوَعَدَّدَهُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَجَنَّتٍ وَعُيُونٍ</p></div>
                                        <div class="col"><p class="arabic_center">طَاعَةٌوَقَوْلٌ مَعْرُوْفٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَفَكِهَةًوَأَبًّا</p></div>
                                        <div class="col"><p class="arabic_center">نَضْرَةًوَسُرُوْرًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِىسَمُوْمٍ وَحَمِيْمٍ</p></div>
                                        <div class="col"><p class="arabic_center">لَابَارِدٍوَلَاكَرِيْمٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَغْفِرَةٌوَأَجْرٌعَظِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">مِنْ وَرَآءِهِ عَذَابٌ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَأَنَّ آللَّهَ قَدْأَحَاطَ بِكُلِّ شَىءٍعِلْمَا</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَوَلَّيْتَ مِنْهُمْ فِرَارًاوَلَمُلِئْتَ مِنْهُمْ رُعْبًا</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلَنَقُصَّنَّ عَلَيْهِمْ بِعِلْمٍ وَمَاكُنَّاغَآئِبِيْنَ</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَذَابَيَانٌ لِّلنَّاسِ وَهُدًى وَمَوْعِظَةٌ لِّلْمُتَّقِيْنَ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَقَدْجَعَلْنَافِىالسَّمّآءِبُرُوْجًاوَزَيَّنَّهَالِلنَّظِرِيْنَ</p></div>                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِنَّ وَعْدَآللَّهِ حَقٌّ وَلاَيَسْتَخِفَّنَّكَآلَّذِيْنَلاَيُوْقِنُوْنَ</p></div>                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَهُمْ فِيهَآأَزْوَاجٌ مُطَهَّرَةٌوَهُمْ فِيْهَاخَلِدُوْنَ</p></div>                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">آتَّبِعُوْامَنْلاَّيَسْئَلُكُمْ أَجْرًاوَهُمْ مُّهْتَدُونَ</p></div>                                        
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
                                        <div class="col"><p class="arabic_center">نْ ( ً - ٍ -  ٌ ) Masuk dengan dengung. Ditekan & ditahan 2 harokat ي</p></div>                                       
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مٌ - يُ - قَوْمٌ يُوقِنُونَ</p></div>
                                        <div class="col"><p class="arabic_center">أَنْ - يُ - أَن يُوصَلَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِللَّآأَنْ يَشَآءَآللَّهُ</p></div>
                                        <div class="col"><p class="arabic_center">مَنْ يُؤْمِنُ بِآللَّهِ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَنْ يَأْتِيَنِى بِهِمْ جَمِيْعًا</p></div>
                                        <div class="col"><p class="arabic_center">إِنْ يَقُولُونَ إِلاَّكَذِبًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَاحِكَةٌمُّسْتَبْشِرَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">وُجُوْهٌ يَوْمَئِذٍمُّسْفِرَةٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَلَّمَهُ شَدِيْدُالْقُوَى</p></div>
                                        <div class="col"><p class="arabic_center">إِنْهُوَإِلاَّوَحْىٌ يُوْحَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لِمَنْ يَشَآءُوَيَرْضَى</p></div>
                                        <div class="col"><p class="arabic_center">لَعِبْرَةًلِّمَنْ يَحْشَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِى جَنَّتٍ يَتَسَآءَلُونَ</p></div>
                                        <div class="col"><p class="arabic_center">وَيْلٌ يَوْمَئِذٍلِّلْمُكَذِّبِيْنَ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَظِلٍّ مِنْ يَحْمُومٍ o أَوَءَبَآؤُنَاالْأَوَّلُونَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">َلَنْ يَغْفِرُاللَّهُ لَهُم   o  أِلَّآأَنْ يَشَآءَللَّهُ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                       
                                        <div class="col"><p class="arabic_center">وَمَآيُرِيْدُ مِنْهُمْ مِنْ رِّزْقٍ وَمَآأُرِيْدُأَنْ يُطْعِمُوْنِ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">فَوَيْلُ لِّلَّذِيْنَ كَفَرُوأمِنْ يَوْمِهِمُ ألَّذِى يُوعَدُونَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">فَمَاأسْطَاعُوْاأَنْ يَظْهَرُوهُ وَمَاأسْتَطَاعُوألَهُ نَقْبًا </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                       
                                        <div class="col"><p class="arabic_center">وَمَاتَشَاءُونَ إِلَّآأَنْ يَشَاءَأللهُ رَبُّ ألْعَلَمِيْنَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                    
                                        <div class="col"><p class="arabic_center">كُلُّ يَجْرِى إِلَى أَجَلٍ مُّسَمَّى وَأَنَّ أللَّهُ بِمَا تَعْمَلُونَ خَبِيرٌ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                   
                                        <div class="col"><p class="arabic_center">وَمَنْ يَتَبَدَّ لِ ألْكُفْرَبِالْإِيْمَانِ فَقَدْضَلَّ سَوَآءَالسَّبِيْلِ </p></div>
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
                                        <div class="col"><p class="arabic_center">وَمَنْ يُضْلِلْ فَلَنْ تَجِدَ لَهُ وَلِيًّامُرْشِدًا </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">إَنَّ هَاذَاكَانَ لَكُمْ جَزَآءًوَكَانَ سَعْيَكُمْ مَّشْكُوْرًا </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                       
                                        <div class="col"><p class="arabic_center">قاَلَ وَمَنْ يَقْنَطُ مِنْ رَّحْمَةِ رَبِّهِ إِلَّآألضَّآ لُّونَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                    
                                        <div class="col"><p class="arabic_center">يَوْمَئِذٍ يَصْدُرٌ أنَّاسٌ أَشْتَاتًالِّيُرَوْاأَعْمَالَهُمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">يَآأَيُّهَاألنَّبِيُّ ا تَّقِ اللَّهَ وَلَاتُطِعِ الْكَافِرِيْنَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                       
                                        <div class="col"><p class="arabic_center">وَأَقْرَضُواأللَّهَ قَرْضًاحَسَنًايُضَاعَفُ لَهُمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                   
                                        <div class="col"><p class="arabic_center">مَآأُرِيْدُمِنْهُمْ مِنْ رِّزْقٍ وَمَآأُرِيْدُأَنْ يُطْعِمُوْنِ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center">فَيُضِلُّ اللَّهُ مَنْ يَشَآءُوَيَهْدِى مَنْ يَشَآءُ </p></div>
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
                                        <div class="col"><p class="arabic_center">نْ( ً ٍ ُ )  Nun sukun/tanwin berubah menjadi ب = م</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رٌ - بَ - نُورُم بَيْتِي</p></div>
                                        <div class="col"><p class="arabic_center">مِنْ - بَ - مِنْم بَعْضِ     </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center" style="word-spacing: 79px;">أَبَدَمابِمَا - كَافِرِمبِهِ - عَوَانُمبَيْنَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                    
                                        <div class="col"><p class="arabic_center" style="word-spacing: 79px;">ألْأَنبِيَآءُ - وَضَآئِقُمبِهِ - مِنْمبَأسٍ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">                                        
                                        <div class="col"><p class="arabic_center" style="word-spacing: 79px;">بَغْبَامبَيْنَهُمْ - حِلُّمبِهَاذَا - بِجَنبِهِ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَالِكَ رَجْعُمبَعِيْدٌ </p></div>
                                        <div class="col"><p class="arabic_center">مِنْ كُلِّ زَوْجِمبِهِيجٍ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَبِيْرُمبِمَاتَعْمَلُونَ</p></div>
                                        <div class="col"><p class="arabic_center">كُلُّ نَفْسِمبِمَاكَسَبَتْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِكُلِّ شَيْئٍمبَصِيْرٌ</p></div>
                                        <div class="col"><p class="arabic_center">أللَّهُ لَطِيفُمبِعِبَادِهِ </p></div>
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
                                        <div class="col"><p class="arabic_center"> فَأَنْبَتْنَا فِيْهَا حَبًّا</p></div>
                                        <div class="col"><p class="arabic_center"> فَكَانَتْ هَبَآءً مُّنْبَثًّا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> رَسُوْلًا يَتْلُواْ عَلَيْكُمْ</p></div>
                                        <div class="col"><p class="arabic_center"> وَمَايَنْبَغِى لَهُمْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> أَضْعَٰفًا مُّضَٰعَفَةً</p></div>
                                        <div class="col"><p class="arabic_center"> قُلُوْبٌ يَوْمَئِذٍ وَاجِفَةٌ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> كَلَّالَيُنْبَذَنَّ فِى الْحُطَمَةِ</p></div>
                                        <div class="col"><p class="arabic_center"> وَمَآ اَدْرَىٰكَ مَاالْحُطَمَةُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> جَزَآءًبِمَاكَانُواْ يَعْلَمُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center"> أُوْلَٰٓئِكَ فِى ضَلَٰلٍ بَعِيْدٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> كُلُّ أُمَّةٍ بِرَسُوْلِهِمْ</p></div>
                                        <div class="col"><p class="arabic_center"> وَهُوَ وَاقِعٌ بِهِمْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاللهُ رَءُوْفٌ بِالْعِبَادِ</p></div>
                                        <div class="col"><p class="arabic_center"> لَفِى ضَلَٰلٍ بَعِيْد</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لَنَسْفَعًابِالنَّاصِيَةِ</p></div>
                                        <div class="col"><p class="arabic_center"> مَالَمْ يَأْذَنْ بِهِ اللهُ</p></div>
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
                                        <div class="col"><p class="arabic_center"> فَاصْبِرْ ٳِنَّ وَعْدَاللهِ حَقٌّ وَاسْتَغْفِرْ لِذَنْبِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَسَبِّحْ بِحَمْدِ رَبِّكَ بِالْعَشِىِّ وَالٳِبْكَٰرِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  فَمَنْ يَهْدِيْهِ مِنْ بَعْدِاللهِ أَفَلَاتَذَكَّرُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمَالَهُم بِذَٰلِكَ مِنْ عِلْمٍ ٳِنْ هُمْ ٳلاَّ يَظُنُّوْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  وَمَا جَعَلَ أَزْوَٰجَكُمُ الَّٰٓئِ تُظَٰهِرُوْنَ مِنْهُنَّ أُمَّهَٰتِكُمْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فِىٓ أَدْنَى الأَرْضِ وَهُم مِّنْ بَعْدِ غَلَبِهِمْ سَيَغْلِبُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمَن يُضْلِلِ اللهُ فَمَالَهُ مِنْ وَلِىٍّ مِّنْ بَعْدِهِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَٳمْسَاكُ بِمَعْرُوْفٍ أَوْتَسْرِيْحٌ بِٳحْسَٰنٍ</p></div>
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
                                        <div class="col"><p class="arabic_center"> أَوْزِعْنِى ـ وَهَيِّئْ لَنَا ـ قُرَّةَ أَعْيُنٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَىُّ الْحِزْبَيْنِ ـ أَووَّزَنُوْهُمْ ـ مَنَاسِكَكُمْ</p> </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُعْجِزُوْنَ ـ يَأْجُوجَ ـ  مَأْجُوجَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">الْأَفْئِدَةِ ـ ٳلَٰهَهٗ هَوَىٰهُ ـ الصَّلَوٰةُ والزَّكَٰوةُ</p> </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> مِن مُّضْغَةٍ ـ فَلِلّٰهِ الْمَكْرُ ـ الْمُزَّمِّلُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يُعْجِبُكَ ـ  فَأْوُٓاْ ٳلَى الْكَهْفِ ـ وَالْمُنْخَنِقَةُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ـ وَيَسْتَنْبِئُوْنَكَ ـ فِى بَحْرٍلُّجِىٍّ ـ لاَتُلْهِيهِمْ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَلآَءَآمِّينَ ـ شَنَئَانُ قَوْمٍ ـ جَنَّٰتُ الْمَأْوَىٰ</p></div>
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
                                        <div class="col"><p class="arabic_center">  ـًـٍــٌ) نْ) (Dibaca samar-samar  & dengung)/(bila bertemu dengan salah satu dari 15 huruf dibawah ini)</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ١) ـ ـ ـ ت | أَنْتَ ـ وَأَنْتُمْ تُتْلَىٰ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمَنْ تَطَوَّعَ ـ وَأَنْ تَقُوْلُواْ ـ وَأَكْنَنتُمْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> جَنَّٰتٍ تَجْرِىْ مِن تَحْتِهَاالْأَنْهَٰرُ خَٰلِدِيْنَ فِيْهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٳنَّانَحْنُ نَزَّلْنَا الذِّكْرَ وَٳنَّا لَهُ لَحَٰفِظُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٢) ـ ـ ـ ث | بِالْأُنْثَىٰ ـ وَكُنْتُمْ أَزْوَٰجًا ثَلَٰثَةً </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> خَلَقَ الذَّكَرَ وَالْأُنْثَىٰ </p></div>
                                        <div class="col"><p class="arabic_center"> مِثْلُ حَظِّ الْأُنْثَيَيْنِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> عَلَى الْحِنْثِ الْعَظِيْمِ</p></div>
                                        <div class="col"><p class="arabic_center"> وَرَيْحَانٌ وَجَنَّةُ نَعِيمٍ</p></div>
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
                                        <div class="col"><p class="arabic_center"> نُمَتِّعُهُمْ قَلِيْلًا ثُمَّ نَضْطَرُّهُمْ ٳلَىٰ عَذَابٍ غَلِيْظٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٣) ـ ـ ـ ج | مِن جُوْعٍ ـ وَمَن جَآءَ ـ مُوصٍ جَنَفًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> التَّوْرَىٰةُ وَالْٳنْجِيلُ</p></div>
                                        <div class="col"><p class="arabic_center"> ٳنَّ الْأَبْرَارَ لَفِى نَعِيْمٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَتَرَىٰ كُلَّ أُمَّةٍ جَاثِيَةً </p></div>
                                        <div class="col"><p class="arabic_center">  كُلُّ أُمَّةٍ تُدْعَىٰٓ ٳلَىٰ كِتَٰبِهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَنَادَيْنَٰهُ مِن جَانِبِ الطُّورِ الْأَيْمَنِ وَقَرَّبْنَٰهُ نَجِيَّا </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٤) ـ ـ ـ د | مِن دُونِهَا ـ عِندَ سِدْرَةِ الْمُنْتَهَىٰ۞</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَفِى خَلْقِكُمْ وَمَايَبُثُّ مِن دَآبَّةٍ ءَايَٰتٌ لِّقَوْمٍ يُوقِنُونَ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p> بَل لَّهُمْ مَّوعِدٌ لَّنْ يَجِدُواْ مِن دُونِهٖ مَوْئِلاً</div>
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
                                        <div class="col"><p class="arabic_center"> وَمَالِأَحَدٍ عِنْدَهٗ مِن نِّعْمَةٍ تُجْزَىٰٓ۞</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٥) ـ ـ ـ ذ | مِن ذُرِّيَّةٍ ـ عَن ذِى الْقَرْنَيْنِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يَتِيْمًا ذَامَقْرَبَةٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ءَأَنْذَرْتَهُمْ أَمْ لَمْ تُنذِرْهُمْ لاَيُؤْمِنُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَلاَتَقُولَنَّ لِشَىْءٍ ٳنِّى فَاعِلٌ ذَٰلِكَ غَدًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٦) ـ ـ ـ ز | أُنْزِلَ ـ ٳنْ زَلَلْتُمْ ـ لَنَنزِعَنَّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> أَوْيُلْقَىٰٓ ٳلَيْهِ كَنزٌ أَوتَكُونُ لَهٗ جَنَّةٌ يَأْكُلُ مِنْهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> تَنزِيلُ الْكِتَٰبِ مِنَ اللهِ الْعَزِيْزِ الْحَكِيْمِ</p></div>
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
                                        <div class="col"><p class="arabic_center"> وَأَنزَلْنَا فِيهَآ ءَايَٰتٍ بَيِّنَٰتٍ لَّعَلَّكُمْ تَذَكَّرُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٧) ـ ـ ـ س | مِنْ ءَايَةٍ أَونُنْسِهَا ـ قَوْلاً سَدِيدًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> خَمْسَةٌ سَادِسُهُمْ</p></div>
                                        <div class="col"><p class="arabic_center"> قُتِلَ الْٳنْسَٰنُ مَآ أَكْفَرَهٗ۞</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَٳذَآ أَرَادَ اللهُ بِقَومٍ سُوٓءًا فَلاَ مَرَدَّلَهٗ۞</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لاَيَايْئَسُ مِن رَّوْحِ اللهِ ٳلاَّ الْقَومُ الْكَٰفِرُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٨) ـ ـ ـ ش | مِن شَعَآئِرِ ـ قُلْنَآ ٳذًاشَطَطًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَيُنشِئُ السَّحَابَ الثِّقَالَ</p></div>
                                        <div class="col"><p class="arabic_center"> ثُمَّ ٳذَاشَآءَ أَنشَرَهٗ۞</p></div>
                                    </div>
                                    <hr>
                                <div class="row">
                                        <div class="col"><p class="arabic_center"> مِن شَرِّمَا خَلَقَ</p></div>
                                        <div class="col"><p class="arabic_center"> وَمِن شَرِّغَاسِقٍ ٳذَا وَقَبَ</p></div>
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
                                        <div class="col"><p class="arabic_center"> وَنُخْرِجُ لَهٗ يَومَ الْقِيَٰمَةِ كِتَٰبًا يَلْقَٰهُ مَنشُورًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٩) ـ ـ ـ ص | مِن مَّآءٍ صَدِيدٍ ـ مَن صَلَحَ مِنءَابَآئِهِمْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يَومَ لاَيُغْنِى عَنْهُمْ كَيْدُهُمْ شَيْئًا وَلاَهُمْ يُنصَرُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَلْيَعْمَلْ عَمَلاً صَٰلِحًا وَلاَ يُشْرِكْ بِعِبَادَةِ رَبِّهٖٓ أَحَدًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> قَوْلٌ مَّعْرُوفٌ وَمَغْفِرَةٌ خَيْرٌ مِّن صَدَقَةٍ يَتْبَعُهَآ أَذًى</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ١٠) ـ ـ ـ ض | وَطَلْحٍ مَّنضُوْدٍ</p></div>
                                        <div class="col"><p class="arabic_center">  لَهٗ ذُرِّيَّةٌ ضُعَفَآءُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَكُلًّا ضَرَبْنَالَهُ الْأَمْثَٰلَ وَكُلًّا تَبَّرْنَا تَتْبِيْرًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَقَالَ الظَّٰلِمُونَ ٳن تَتَّبِعُونَ ٳلاَّ رَجُلاً مَّسْحُورًا</p></div>
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
                                        <div class="col"><p class="arabic_center"> وَمَن ضَلَّ فَقُلْ ٳنَّمَآ أَنَاْمِنَ الْمُنْذِرِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ١١) ـ ـ ـ ط | فِدْيَةٌ طَعَامُ ـ حَلَٰلاً طَيِّبًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمَايَنطِقُ عَنِ الْهَوَىٰٓ۞</p></div>
                                        <div class="col"><p class="arabic_center"> ٳن هُوَ ٳلاَّ وَحْىٌ يُوحَىٰ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمِنَ الَّيْلِ فَاسْجُدْ لَهٗ وَسَبِّحْهُ لَيْلاً طَوِيْلاً</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَوَقَعَ الْقَوْلُ عَلَيْهِمْ بِمَا ظَلَمُواْفَهُمْ لاَيَنطِقُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ١٢) ـ ـ ـ ظ | هُمْ يَنظُرُوْنَ ـ عَلَى الْأَرَآئِكِ يَنْظُرُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٳلاَّ مِرَآءً ظَٰهِرًا وَلاَتَسْتَفْتِ فِيْهِمْ مِّنْهُمْ أَحَدًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> قَالَ سَنَنْظُرُ أَصَدَقْتَ أَمْ كُنْتَ مِنَ الْكَٰذِبِيْنَ</p></div>
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
                                        <div class="col"><p class="arabic_center"> ١٣) ـ ـ ـ ف | وَأَنْفِقُواْ خَيْرٌ لَّكُمْ ـ فَتَنَفَعَهُ الذِّكْرَىٰٓ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> إِذَا السَّمَآءُ انْفَطَرَتْ۞ وَإِذَالْكَوَاكِبُ انْتَثرَتْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يَٰرَبِّ إِنَّ قَوْمِى اتَّخَذُواْ هَٰذَا الْقُرْءَانَ مَهْجُوْرًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ِإنَّارَآدُّوْهُ إِلَيْكِ وَجَاعِلُوْهُ مِنَ الْمُرْسَلِيْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ١٤) ـ ـ ـ ق | مِنْ قَبْلِكُمْ ـ بِأَىِّ ذَنْبٍ قُتِلَتْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يُوفُوْنَ بِعَهْدِاللهِ وَلَايَنقُضُوْنَ الْمِيْثَاقَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَالْجَآنَّ خَلَقْنَٰهُ مِن قَبْلُ مِن نَّارِ السَّمُوْمِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> بَلْ كَذَّبُواْ بِالْحَقِّ لَمَّاجَآءَهُمْ فَهُمْ فِىٓ أَمْرٍمَّرِيْجٍ</p></div>
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
                                        <div class="col"><p class="arabic_center"> ١٥) ـ ـ ـ ك |  فَمَنْ كَانَ ـ خَيرًا كَثِيرًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَفَٰكِهَةٍ كَثِيْرَةٍ</p></div>
                                        <div class="col"><p class="arabic_center"> وَلَتَعْلُنَّ عُلُوًّا كَبِيرًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ٳنَّا مَكَّنَّالَهٗ فِى الْأَرْضِ وَءَاتَيْنَٰهُ مِنْ كُلِّ شَىْءٍ سَبَبًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> يَٰأَيُّهَا الْمَلَؤُاْ إِنِّىٓ أُلْقِىَ ٳلَىَّ كِتَٰبٌ كَرِيْمٌ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  إذَاجَعَلَهٗ نَارًا قَالَ ءَانُوْنِىٓ أُفْرِغْ عَلَيْهِ قِطْرًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> إِنْ كَانَتْ ٳلَّاصَيْحَةً وَاحِدَةً فَإِذَاهُمْ خَٰمِدُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> یَوْمَ يَرَونَهَا لَمْ يَلْبَثُوٓاْ إلَّاعَشِيَّةً أَوْضُحَٰهَا </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَإِنَّ لَهٗ مَعِيْشَةً ضَنْكًا وَنَحْشُرُهٗ يَوْمَ الْقِيَٰمَةِ أَعْمَىٰ</p></div>
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
                                        <div class="col"><p class="arabic_center">
                                            Boleh waqof boleh terus : ج
                                            Bukan tempat waqof utama terus : لا
                                            Dibaca terus lebih utama : صلى
                                            </p></div>
                                        </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">
                                            Harus waqof : م
                                            Berhenti lebih dahulu : قلى
                                            Boleh waqof di salah satu tanda tsb. : ∴ ∴
                                            </p></div>
                                        </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> فَتَوَلَّ عَنْهُمْ يَوْمَ يَدْعُ الدَّاعِ إلَى ىشَىءٍ نُّكُرٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَإنَّ رَبَّكَ هُوَ يَحْشُرُهُمْ ۚ ٳِنَّهٗ حَكِيْمٌ عَلِيْمٌ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> أَفَمَن يَخْلُقُ كَمَنْ لَّايَخْلُقُ ۗ أَفَلَاتَذَكَّرُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> إِلَّا امْرَأتَهٗ قَدَّرْنَآ ۙ إِنَّهَا لَمِنَ الْغَٰبِرِينَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> ذَالِكَ الْكِتَٰبُ لَارَيْبَ ۛ فِيْهِ ۛ هُدًى لِّلْمُتَّقِينَ</p></div>>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاتْرُكِ الْبَحْرَ رَهْوًا  ۖ إِنَّهُمْ جُندٌ مُّغْرَقُونَ</p></div>
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
                                        <div class="col"><p class="arabic_center"> الَّذِينَ تَتَوَفَّٰهُمُ الْمَلَىٰٓئِكَةُ طَيِّبِينَ ۙ يَقُولُوْنَ سَلَٰمٌ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> مَتَٰعٌ قَلِيْلٌ ثُمَّ مَأْوَىٰهُمْ جَهَنَّمُ ۚ وَبِئْسَ الْمِهَادُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> قَالَ أَنْتُمْ شَرٌّمَكَانًا  ۖ وَاللهُ أَعْلَمُ بِمَا تَصِفُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> إِنَّ وَعْدَاللهِ حَقٌّ  ۖ فَلَاتَغُرَّنَّكُمُ الْحَيَٰوةُ الدُّنْيَا ۖ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَمَنْ يَبْتَغِ غَيْرَ اْلٳسْلَٰمِ دِيْنًافَلَن يُقْبَلَ مِنْهُ ۚ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> حَتَّىٰٓ إذَا سَاوَىٰ بَيْنَ الصَّدَفَيْنِ قَالَ انْفُخُواْ  ۖ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> إِنْ يَمْسَسْكُمْ قَرْحٌ فَقَدْمَسَّ الْقَوْمَ قَرْحٌ مِّثْلُهُ ۚ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اللهُ أَعْلَمُ بِمَا لَبِثُواْ  ۖ لَهٗ غَيْبُ السَّمَٰوَٰتِ وَالْأَرْضِ  ۖ</p></div>
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
                                        <div class="col"><p class="arabic_center">هُنَّ لِبَا سٌ لَّكُمْ وَأَنتُمْ لِبَا سٌ لَّهُنَّ عَلِمَ اُللهُ أَنَّكُمْ كُنتُمْ تَخْتَا نُونَ أَنفُشَكُم</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَإِن لَّمْ يُحِبْهَاوَابِلٌ فَطَلٌّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَمَايَقُمومُ اُلَّذِئ يَتَخَبَّطُهُ اُلشَّيْطَنُ مِنَ ألْمَسِّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَالَهُم بِهِ مِنْ عِلْمٍ إِن يَتَّبِعُونَ إِ لاَّاُلظَّنَّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَالَ أَنبِءُوْنِئ بِأَسْمَآءِهَؤُلَآءِإِن كُنتُمْ صَدِقِينَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قُلِ اُ لَّهُمَّ مَـلِكَ اُلْمُلْكِ تُؤْتِى اُلْمُلْكَ مَن تَشَآءُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">إِذَاقَضَىَ أَمْرَآفَإِنَّمَايَقُولُ لَهُ كُنْ فَيَكُونُ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَبَثَّ مِنْهُمَارِجَالًاكَشِيرًاوَنِسـَآءً</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> كَمَثَلِ اٌلَّذِى يَنْعِقُ بِمَالَايَسْمَعُ إِلَّادُعآءًوَنِدَآءً</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> قُلْ مَنْ رَّبُّ اُ لسَّمَوَتِووَاُلْأَرْضِ قُـلِ اُللَّهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَإِذْقَالَ رَبُّكَ لِلْمَلَءِكَقِ إِنِّى جَاعِلٌ فِى الْأَرْضِ خَلِيفَةً</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَمَنِ اُضْطُرَّغَيْرَبَاغٍوَلَاعَادٍفَلَآإِشْمَ عَلَيْهِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ِنَّامَكَّنَّالَهُ فِي لْأَرْضِوَءَاتَيْنَهُ مِنْ كُلِّ شَىءٍسَبَبًا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">الَّذِى جَعَلَ لَكُمُ لأَرْضَ فِرَشًاوَلسَّمَآءَبِنَآءً</p></div>
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
                                        <div class="col"><p class="arabic_center">َ لْفَجْرِ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَيَالٍ عَشّرٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلشَّفْعِ وَلْوَ تْرِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَسَبِّحْ بِحَمْدِرَنِكَ وَسْتَغَفِرْه إِنَّهُ كَانَ تَوَّابَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">َوْمَ تَكُونُ لسَّمَآءُكَالْمُهْلِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَتَكُونُ لْجِبَالُكَالْعِهْرِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلصَّبِرِينَ فِى لْبَأْسَآءِوَلضَّرَّآءِوَحِينَ لْبَأْسِ</p></div>
                                    </div>
                                    <hr>                              
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَوَلَمْ يَرَوْإِلَى لطَّيْرِفَوْقَهُمْ صَفَّتٍ وَيَقْبِضْنَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اُعْلَمُوْأَنَّمَالْحَيَوةُلدَّنْيَالَعِبٌ وَلَهْوٌوَزِيْنَةٌ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اُصطَفَهُ عَلَيْكُمْ وَزَادَهُ بَسْطَةًفِى لْعِلْمِ وَلْجسْمِ</p></div>
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
                                        <div class="col"><p class="arabic_center">تَبَّتْ يَدَآأَبِى لَهَبٍ وَتَبَّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قُلْ هِىَ مَوَاقِيتُ لِلنَّاسِ وَلْحَجّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اُعْلَمُوْأَنَّ للَّهَ يُحْىِ اُلْأَرْضَ بَعْدَ مَوْتِهَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">َحْنُ نَقُصُّ عَلَيْكَ نَبَأَهُم بِالْحَقِّ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَأَيُّهَالَّذِينَءَمَنُوْكُونُوْاقَوَّمِينَ لِلَّهِشُهَدَآءَبِالْقِسْطِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَاتَعَاوَنُوْاعَلَى لْإِثْمِ وَلْعُدْوَنِ وَتَقُوْللَّهَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلِيَعْلَمَ للَّهُ لَّذِينَءَامَنُوْاوَيَتَّخِذَمِنكُمْ شُهَدَآءَ</p></div>
                                    </div>
                                    <hr>                              
                                    
                                    </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تِلْكَءَآيَتُ للَّهِ نَتْلُو هَا عَلَيْكَ بِالْحَقِّ</p></div>
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
                                        <div class="col"><p class="arabic_center">وَمَاجَعَلْنَآأَصْحَبَ لنَّارِإِلَّاَمَلَءِكَةً وَمَاجَعَلْنَا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَتَوَاصَوْبِالْحَقِّ وَتَوَاصَوْابِالصَّبْرِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَبَرَّابِوَالِدَتِى وَلَمْ يَجْعَلْنِى جَبَّارًاشَقِيًّا</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَهُمْ عَذَابٌ شَدِيدٌ وَللَّهُ عَزِيزٌذُونتِقَامٍ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَاتُفْسِدُواْفِى لْأَرْضِ قَالُوآإِنَّمَاخَحْنُ مُصْلِحُوزَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَوْكُنتَ فظَّأغَلِيظَ لقَلْبِ لَاُنفَضُّواْمِنْحَوْلِكً</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلَايَحْزُنكَ قَوْ لُهُمْإِنَّانَعْلَمُ مَايُسِرُّونَ وَمَا يُعلِنُونَ</p></div>
                                    </div>
                                    <hr>                              

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَدَأْبِءَالِ فِرْعَوْنَ وَلَّذِينَ مِن قَبْلِهِمْ</p></div>
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
                                        <div class="col"><p class="arabic_center">إِناَّنَحْنُ نَزَّلْناَ اٌلذِّ كْرَوَ إِ ناَّ لَهُ لَحَٰفِظُو نَ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمِمَّنْ حَوْ لَكُم مِّنَ اُلْأَ عْرَابِ مُناَفِقُونَ ۖ  وَمِنْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَهْلِ اٌلْمَدِينَةِۖ مَرَدُواْعَلَى اٌلنِّفاَقِ لَا تَعْلَمُهُمْ  ۖ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فىِ قُلُوبِهِم مَّرَضٌ فَزَادَهُمْ اٌللَّهُ مَرَضًا  ۖ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَهُمْ عَذَابٌ أَلِيمُ بِماَ كاَنُواْيَكْذِبُونَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَماَيَأْتِيهِم مِّن رَّسولٍ إِلَّاكاَنُواْبِهِ يَسْتَهْزِءُونَ  </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَآإِكْرَاهَ فِى آلذِّ ينِقَدتَّبَيَّنَ ۖ  آلرُّشْدُمِنَ آلْغَىِّ ۖ  </p></div>
                                    </div>
                                    <hr>         

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَٰنِتَتٍٰ تَٰئِبَٰتٍ عَٰبِدَٰتٍ سَٰئِحَٰتٍ شَيِّبَٰتٍ وَأَبْكَارًا </p></div>
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
                                        <div class="col"><p class="arabic_center">سبلوم كڤريݞكت ڤنيلاين ايلوقله موريد۲</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">دڤركنكن دان داجركن حروف۲داول سورة</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">برايكوت اين دݞن چاراباچاءن يݞ بتول مݞيكوت ق عدل ة تجويد</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">الٓمٓ . الٓمٓصٓ . الٓر . الٓمٓر.</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كٓهيعٓصٓ . طه . طسٓمٓ . طسٓ .</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يسٓ . صٓ . حمٓ . عٓسٓقٓ . قٓ . نٓ .</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ڤنيلاين اونتوق بوكوانم</p></div>
                                    </div>
                                    <hr>                              
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اونتوق ممبوي ڤڤاكوان لولوس كڤد موريد۲ݢوروڤرلومݞوجي</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">موريد ۲ ممباچ ڤد ها لمن ۲ يݞلاءين جوݢ . ستله موريد ۲ داڤت ممباچ دݞن</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بتول هالمن ۲ يݞبركناءن ايت بوليهله دڤراءكوي لولوس .</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ  o الٓمٓ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذٰلِكَ الْكِتٰبُ لَا رَيْبَ ۛ فِيْهِ ۛ ھُدًى لِّلْمُتَّقِيْنَ</p></div>
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
                                        <div class="col"><p class="arabic_center">سَبِيلَ مَنْ أَنَابَ إِلَىَّ ۚ ثُمَّ إِلَىَّ مَرْجِعُكُمْ فَأُنَبِّئُكُم</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِمَا كُنتُمْ تَعْمَلُونَ يَٰبُنَىَّ إِنَّهَآ إِن تَكُ مِثْقَالَ حَبَّةٍ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِّنْ خَرْدَلٍ فَتَكُن فِى صَخْرَةٍ أَوْ فِى ٱلسَّمَٰوَٰتِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">أَوْ فِى ٱلْأَرْضِ يَأْتِ بِهَا ٱللَّهُ ۚ إِنَّ ٱللَّهَ لَطِيفٌ خَبِيرٌ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَٰبُنَىَّ أَقِمِ ٱلصَّلَوٰةَ وَأْمُرْ بِٱلْمَعْرُوفِ وَٱنْهَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَنِ ٱلْمُنكَرِ وَٱصْبِرْ عَلَىٰ مَآ أَصَابَكَ ۖ إِنَّ ذَٰلِكَ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْ عَزْمِ ٱلْأُمُورِوَلَا تُصَعِّرْ خَدَّكَ لِلنَّاسِ</p></div>
                                    </div>
                                    <hr>                              
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَا تَمْشِ فِى ٱلْأَرْضِ مَرَحًا ۖ إِنَّ ٱللَّهَ لَا يُحِبُّ كُلَّ</p></div>
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
                                        <div class="col"><p class="arabic_center">مُخْتَالٍ فَخُورٍوَٱقْصِدْ فِى مَشْيِكَ وَٱغْضُضْ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> مِن صَوْتِكَ ۚ إِنَّ أَنكَرَ ٱلْأَصْوَٰتِ لَصَوْتُ ٱلْحَمِيرِ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ءَامَنَ ٱلرَّسُولُ بِمَآ أُنزِلَ إِلَيْهِ مِن رَّبِّهِۦ وَٱلْمُؤْمِنُونَ ۚ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كُلٌّ ءَامَنَ بِٱللَّهِ وَمَلَٰٓئِكَتِهِۦ وَكُتُبِهِۦ وَرُسُلِهِۦ لَا نُفَرِّقُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَيْنَ أَحَدٍ مِّن رُّسُلِهِۦ ۚ وَقَالُوا۟ سَمِعْنَا وَأَطَعْنَا ۖ </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غُفْرَانَكَ رَبَّنَا وَإِلَيْكَ ٱلْمَصِيرُلَا يُكَلِّفُ ٱللَّهُ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَفْسًاإِلَّا وُسْعَهَا ۚ لَهَا مَا كَسَبَتْ وَعَلَيْهَا</p></div>
                                    </div>
                                    <hr>                              
                                    
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَا ٱكْتَسَبَتْ ۗ رَبَّنَا لَا تُؤَاخِذْنَآ إِن نَّسِينَآأَوْ</p></div>
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