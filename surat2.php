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
                    <h1 class="h3 mb-0 text-gray-800">Surat-surat pendek</h1>
                </div>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="kad">
                                    <h4 align="center">Ad-Duha</h4>
                                    <p class ="arabic_center">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>                   
                                </div>
                                <br>
                                <div class="kad">
                                    <p class ="arabic">وَالضُّحَىٰ ﴿<span class="arabic_number">١</span>﴾</p> 
                                    <p class ="latin" align="right">Wad duhaa</p>                       
                                    <p class ="latin">[1] Demi waktu matahari sepenggalahan naik,</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَاللَّيْلِ إِذَا سَجَىٰ ﴿<span class="arabic_number">٢</span>﴾</p> 
                                    <p class ="latin" align="right">Wal laili iza sajaa</p>                        
                                    <p class ="latin">[2] dan demi malam apabila telah sunyi (gelap),</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">مَا وَدَّعَكَ رَبُّكَ وَمَا قَلَىٰ ﴿<span class="arabic_number">٣</span>﴾</p> 
                                    <p class ="latin" align="right">Ma wad da'aka rabbuka wa ma qalaa</p>                        
                                    <p class ="latin">[3] Tuhanmu tiada meninggalkan kamu dan tiada (pula) benci kepadamu.</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَلَلْآخِرَةُ خَيْرٌ لَكَ مِنَ الْأُولَىٰ ﴿<span class="arabic_number">٤</span>﴾</p>  
                                    <p class ="latin" align="right">Walal-aakhiratu khairul laka minal-uula</p>                       
                                    <p class ="latin">[4] Dan sesungguhnya hari kemudian itu lebih baik bagimu daripada yang sekarang (permulaan).</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَلَسَوْفَ يُعْطِيكَ رَبُّكَ فَتَرْضَىٰ ﴿<span class="arabic_number">٥</span>﴾</p>  
                                    <p class ="latin" align="right">Wa la sawfa y'utiika rabbuka fatarda</p>                       
                                    <p class ="latin">[5] Dan kelak Tuhanmu pasti memberikan karunia-Nya kepadamu , lalu (hati) kamu menjadi puas.</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">أَلَمْ يَجِدْكَ يَتِيمًا فَآوَىٰ ﴿<span class="arabic_number">٦</span>﴾</p>
                                    <p class ="latin" align="right">Alam ya jidka yatiiman fa aawaa</p>                         
                                    <p class ="latin">[6] Bukankah Dia mendapatimu sebagai seorang yatim, lalu Dia melindungimu?</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَوَجَدَكَ ضَالًّا فَهَدَىٰ ﴿<span class="arabic_number">٧</span>﴾</p>   
                                    <p class ="latin" align="right">Wa wa jadaka daal lan fahada</p>                      
                                    <p class ="latin">[7] Dan Dia mendapatimu sebagai seorang yang bingung, lalu Dia memberikan petunjuk.</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَوَجَدَكَ عَائِلًا فَأَغْنَىٰ ﴿<span class="arabic_number">٨</span>﴾</p> 
                                    <p class ="latin" align="right">Wa wa jadaka 'aa-ilan fa aghnaa</p>                        
                                    <p class ="latin">[8] Dan Dia mendapatimu sebagai seorang yang kekurangan, lalu Dia memberikan kecukupan.</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">فَأَمَّا الْيَتِيمَ فَلَا تَقْهَرْ ﴿<span class="arabic_number">٩</span>﴾</p> 
                                    <p class ="latin" align="right">Fa am mal yatiima fala taqhar</p>                        
                                    <p class ="latin">[9] Sebab itu, terhadap anak yatim janganlah kamu berlaku sewenang-wenang.</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَأَمَّا السَّائِلَ فَلَا تَنْهَرْ ﴿<span class="arabic_number">١٠</span>﴾</p>  
                                    <p class ="latin" align="right">Wa am mas saa-ila fala tanhar</p>                       
                                    <p class ="latin">[10] Dan terhadap orang yang minta-minta, janganlah kamu menghardiknya.</p>                    
                                </div>
                                <hr>
                                <div class="kad">
                                    <p class ="arabic">وَأَمَّا بِنِعْمَةِ رَبِّكَ فَحَدِّثْ ﴿<span class="arabic_number">١١</span>﴾</p>
                                    <p class ="latin" align="right">Wa amma bi ni'mati rabbika fahad dith</p>                         
                                    <p class ="latin">[11] Dan terhadap nikmat Tuhanmu, maka hendaklah kamu siarkan.</p>                    
                                </div>
                            </div>
                        </div>   
                    </div>
                </section>
            </div>
            <br>
            <!-- End of Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-light-grey">
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