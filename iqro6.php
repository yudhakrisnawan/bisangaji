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
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h4 align="center">Iqro 6</h4>
                                <br>
                            </div>
                            <div class="judul">
                                <h3 align="center">Halaman 1</h3>
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
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 2</h3>
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
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 3</h3>
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
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 4</h3>
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
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 5</h3>
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
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 6</h3>
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
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 7</h3>
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
                                <hr>                                
                                
                            </div>
                        </div>
                    </div>         
                </section>

                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h3 align="center">Halaman 8</h3>
                                <br>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col"><p class="arabic_center"></p></div>
                                    <div class="col"><p class="arabic_center"></p></div>
                                </div>
                                <hr>                                
                                
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