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
                                    <h4 align="center">Iqro 4</h4>
                                    <br>
                                </div>
                                <div class="judul">
                                    <h4 align="center" style="color:white; background-color:black">Halaman 1</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">Bi = بًأ <p></div>
                                        <div class="col"><p class="arabic_center"> an = --ِ- </p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black">BAN DIBACA PENDEK!<P></p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> ا = DIANGGAP TIDAK ADA <P></p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بَ بًأ  </p></div>
                                        <div class="col"><p class="arabic_center">تَ تًأ  </p></div>
                                        <div class="col"><p class="arabic_center">ثَ ثًأ  </p></div>
                                        <div class="col"><p class="arabic_center">ج جًأ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذَ ذًأ  </p></div>
                                        <div class="col"><p class="arabic_center">زَ زًأ  </p></div>
                                        <div class="col"><p class="arabic_center">فَ فًأ  </p></div>
                                        <div class="col"><p class="arabic_center">كَ كًأ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَ غًأ  </p></div>
                                        <div class="col"><p class="arabic_center">ظَ ظًأ  </p></div>
                                        <div class="col"><p class="arabic_center">يَ يًأ  </p></div>
                                        <div class="col"><p class="arabic_center">لَ لًأ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَحَدَ</p></div>
                                        <div class="col"><p class="arabic_center">اَحَدًأ</p></div>
                                        <div class="col"><p class="arabic_center">عَمَلَ</p></div>
                                        <div class="col"><p class="arabic_center">عَمَلًأ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَسَنَ</p></div>
                                        <div class="col"><p class="arabic_center">حَسَنًأ </p></div>
                                        <div class="col"><p class="arabic_center">صَألِحَ</p></div>
                                        <div class="col"><p class="arabic_center">صَألِحًأ</p></div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَذِيْرًأ</p></div>
                                        <div class="col"><p class="arabic_center">بَشِيْرًأ</p></div>
                                        <div class="col"><p class="arabic_center">جُوْعًأ</p></div>
                                        <div class="col"><p class="arabic_center"> نُوْحًأ </p></div>
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
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَهُدًى</p></div>
                                        <div class="col"><p class="arabic_center">قَعَدًأ</p></div>
                                        <div class="col"><p class="arabic_center">مُبَأرَكًأ</p></div>
                                        <div class="col"><p class="arabic_center">شَهَأدَةً</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَمِيْعًأ</p></div>
                                        <div class="col"><p class="arabic_center">قُرُوْنًأ</p></div>
                                        <div class="col"><p class="arabic_center">عَضُدًأ </p></div>
                                        <div class="col"><p class="arabic_center"> سَبِيْلَهَأ</p></div>
                                    </div> 
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">زَلَقًأ</p></div>
                                        <div class="col"><p class="arabic_center">رَغَدًأ </p></div>
                                        <div class="col"><p class="arabic_center">طَعَأمًأ</p></div>
                                        <div class="col"><p class="arabic_center">ضَللً</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> HARUS SELALU DIPERHATIKAN <P></p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> Bacaan Mad (Panjang) <P></p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> Dan yang bukan Mad (Pendek) <P></p></div>
                                    </div>
                                    
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَمِيْعًأ </p></div>
                                        <div class="col"><p class="arabic_center">عَلِيْمًأ</p></div>
                                        <div class="col"><p class="arabic_center">عَزِيْلًأ </p></div>
                                        <div class="col"><p class="arabic_center">حَكَيْمًأ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَذَأبًأ </p></div>
                                        <div class="col"><p class="arabic_center"> اَلِيْمًأ  </p></div>
                                        <div class="col"><p class="arabic_center">وَاَصِيْلًأ</p></div>
                                        <div class="col"><p class="arabic_center">ظَألِمًأ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَتِيْمًأ </p></div>
                                        <div class="col"><p class="arabic_center">فَقِيْرًأ</p></div>
                                        <div class="col"><p class="arabic_center">صَعِيْدًأ</p></div>
                                        <div class="col"><p class="arabic_center">خُرُزًأ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَسُوْلًأ  </p></div>
                                        <div class="col"><p class="arabic_center">طَهُوْرًأ</p></div>
                                        <div class="col"><p class="arabic_center">حَلِيْمًأ</p></div>
                                        <div class="col"><p class="arabic_center">غَفُوْرًأ</p></div>
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
                                        <div class="col"><p class="arabic_center">Bin = بٍ <p></div>
                                        <div class="col"><p class="arabic_center"> in = --ِ- </p></div>
                                    </div>

                                <hr>

                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَ تِ  </p></div>
                                        <div class="col"><p class="arabic_center"> تِ تٍ  </p></div>
                                        <div class="col"><p class="arabic_center">دَ دِ  </p></div>
                                        <div class="col"><p class="arabic_center">دِ دٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">َ مًأ  </p></div>
                                        <div class="col"><p class="arabic_center">مِ مٍ  </p></div>
                                        <div class="col"><p class="arabic_center">وَوًأ</p></div>
                                        <div class="col"><p class="arabic_center">وِوٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَأسِدًأ</p></div>
                                        <div class="col"><p class="arabic_center">حَأسِدٍ</p></div>
                                        <div class="col"><p class="arabic_center">غَأسِقًأ</p></div>
                                        <div class="col"><p class="arabic_center">غَأسِقٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذلِكَ</p></div>
                                        <div class="col"><p class="arabic_center">لَهَبٍ</p></div>
                                        <div class="col"><p class="arabic_center">لآعَأدٍ</p></div>
                                        <div class="col"><p class="arabic_center">حِجَأرَةٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَرَضٍ</p></div>
                                        <div class="col"><p class="arabic_center">كُفُوًأ</p></div>
                                        <div class="col"><p class="arabic_center">مَفَأزًأ </p></div>
                                        <div class="col"><p class="arabic_center"> لِسَأنِيْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عِيْشَةٍ </p></div>
                                        <div class="col"><p class="arabic_center"> فِيْدِيْنٍ   </p></div>
                                        <div class="col"><p class="arabic_center">مِيْزَأنٍ</p></div>
                                        <div class="col"><p class="arabic_center">اَلِيْمًأ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَأصِيَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">كَأذِبَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">خَأطِئَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">جَحِيْمًأ</p></div>
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
                                        <div class="col"><p class="arabic_center">قَلَمً</p></div>
                                        <div class="col"><p class="arabic_center">قَفَصٍ</p></div>
                                        <div class="col"><p class="arabic_center">عِنَبً    </p></div>
                                        <div class="col"><p class="arabic_center">عِمَدٍ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  كِتاَبِهِ</p></div>
                                        <div class="col"><p class="arabic_center">رَسُوْلُهُ</p></div>
                                        <div class="col"><p class="arabic_center">غَنَمٍ    </p></div>
                                        <div class="col"><p class="arabic_center">عَلَقٍ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَهُوْرٍ</p></div>
                                        <div class="col"><p class="arabic_center">كَدِبٍ    </p></div>
                                        <div class="col"><p class="arabic_center">هَشِيْمًا</p></div>
                                        <div class="col"><p class="arabic_center">هُزُوًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ضَاحِكَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">  وَاحِدَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">  وَاحِدَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">غَضَبٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَاغُوْتٍ</p></div>
                                        <div class="col"><p class="arabic_center">لاَعَادٍ</p></div>
                                        <div class="col"><p class="arabic_center">بَقَرَةٍ  </p></div>
                                        <div class="col"><p class="arabic_center">كَلِمَتٍ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هاَوِيَةٍ</p></div>
                                        <div class="col"><p class="arabic_center">شُهُوْدٍ</p></div>
                                        <div class="col"><p class="arabic_center">رَقَبَتٍ  </p></div>
                                        <div class="col"><p class="arabic_center">خِطابٍ</p></div>
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
                                        <div class="col"><p class="arabic_center">بٌ = Bun </p></div>
                                        <div class="col"><p class="arabic_center">--ٌ- = Un</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">باً بٍ    بٌ</p></div>
                                        <div class="col"><p class="arabic_center">بَ بِ بُ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ساً سٍ سٌ</p></div>
                                        <div class="col"><p class="arabic_center">سَ سِ سُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَذِيْرٌ  </p></div>
                                        <div class="col"><p class="arabic_center">بَشِيْرًا</p></div>
                                        <div class="col"><p class="arabic_center">عاَمِلٌ</p></div>
                                        <div class="col"><p class="arabic_center">عاَمِلُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ناَصِحٌ</p></div>
                                        <div class="col"><p class="arabic_center">نَصِحُ</p></div>
                                        <div class="col"><p class="arabic_center">قاَدِرٌ   </p></div>
                                        <div class="col"><p class="arabic_center">قاَدِرُ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَفُوْرٌ</p></div>
                                        <div class="col"><p class="arabic_center">غَفُوْرًا</p></div>
                                        <div class="col"><p class="arabic_center">رَحَيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">رَحَيْمًا </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">صَلَوَةٌ  </p></div>
                                        <div class="col"><p class="arabic_center">ظُلُمَتٍ</p></div>
                                        <div class="col"><p class="arabic_center">فُرَاتٌ</p></div>
                                        <div class="col"><p class="arabic_center">ذَهَاَبٍ</p></div>
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
                                        <div class="col"><p class="arabic_center">بَيْنَ    = Baina</p></div>
                                        <div class="col"><p class="arabic_center">بِيْنَ =  Biina</p></div>
                                        <div class="col"><p class="arabic_center">--يْ =   i</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">عِيْنَ    </p></div>
                                        <div class="col"><p class="arabic_center">دَيْنِ    </p></div>
                                        <div class="col"><p class="arabic_center">دِيْنِ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">حَيْثُ</p></div>
                                        <div class="col"><p class="arabic_center">حِيْثُ    </p></div>
                                        <div class="col"><p class="arabic_center">كَيْفَ    </p></div>
                                        <div class="col"><p class="arabic_center">كِيْفَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَيْرَ</p></div>
                                        <div class="col"><p class="arabic_center">غًيْرَ    </p></div>
                                        <div class="col"><p class="arabic_center">لَيْسَ    </p></div>
                                        <div class="col"><p class="arabic_center">لِيْسَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَيْبٌ</p></div>
                                        <div class="col"><p class="arabic_center">غِيْبٌ    </p></div>
                                        <div class="col"><p class="arabic_center">خَيْرَ    </p></div>
                                        <div class="col"><p class="arabic_center">خِيْرَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَيْمَنَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">لَغَيْظٌ  </p></div>
                                        <div class="col"><p class="arabic_center">وَرَاَيْتَ</p></div>
                                        </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَيْنَكَ</p></div>
                                        <div class="col"><p class="arabic_center">زَيْتُنَ  </p></div>
                                        <div class="col"><p class="arabic_center">لَهُشَيْءٌ</p></div>
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
                                        <div class="col"><p class="arabic_center">لَاتَرى فِيْهَاعِوَجًا</p></div>
                                        <div class="col"><p class="arabic_center">لِاَدَمَ فَسَجَدُوْا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لِغُلَمَيْنِ يَتِيْمَيْنِ</p></div>
                                        <div class="col"><p class="arabic_center">فَجَمَعَ كَيْدَهُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَكِيْدُوُنَ كَيْدًا</p></div>
                                        <div class="col"><p class="arabic_center">بَيْنَهُمَا لَعِبِيْنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بايدسفرة</p></div>
                                        <div class="col"><p class="arabic_center">بماتفيضون فيه</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَقَالُوْايَوَيْلَنَا</p></div>
                                        <div class="col"><p class="arabic_center">لِاِيْلَفِ قُرَيْشٍ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">طَيْرًااَبَابِيْلَ</p></div>
                                        <div class="col"><p class="arabic_center">يَقُوْلُ يَلَيْتَنِىْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَقَالُوْايَوَيْلَنَا</p></div>
                                        <div class="col"><p class="arabic_center">لِاِيْلَفِ قُرَيْشٍ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> ULANG ULANGILAH!!! SAMPAI TIDAK KELIRU<P></p></div>
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
                                        <div class="col"><p class="arabic_center">Bau = بَوْ  </p></div>
                                        <div class="col"><p class="arabic_center">Buu = بُوْ</p></div>
                                        <div class="col"><p class="arabic_center">u= ---وْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَوْفَ</p></div>
                                        <div class="col"><p class="arabic_center">سُوْفَ</p></div>
                                        <div class="col"><p class="arabic_center"> تَوْبَ  </p></div>
                                        <div class="col"><p class="arabic_center">تُوْبَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَوْحٌ</p></div>
                                        <div class="col"><p class="arabic_center">لُوْحَ</p></div>
                                        <div class="col"><p class="arabic_center">جَوْفَ</p></div>
                                        <div class="col"><p class="arabic_center">ُوْفَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَيْبَ</p></div>
                                        <div class="col"><p class="arabic_center">رِيْبَ</p></div>
                                        <div class="col"><p class="arabic_center">صَوْمَ</p></div>
                                        <div class="col"><p class="arabic_center">صَأنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَيْلَ</p></div>
                                        <div class="col"><p class="arabic_center">لِيْلَ </p></div>
                                        <div class="col"><p class="arabic_center">مَوْتَ </p></div>
                                        <div class="col"><p class="arabic_center">مَأتَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">عِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">َوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">َأنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَوْحَىلَهَأ</p></div>
                                        <div class="col"><p class="arabic_center">لِزَوْخِكَ</p></div>
                                        <div class="col"><p class="arabic_center">مَوْعِظَةٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَوْءُوْدَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">اَخَوَيَكَ</p></div>
                                        <div class="col"><p class="arabic_center">مَشَوْافِيْهِ</p></div>
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
                                        <div class="col"><p align="center" style="color: black"> Bila Kliru, Mengulangnya tidak arus dari awal, cukup di hafidz yang keliru itu saja. <P></p></div>
                                        </div>
                                        <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَمِيْعٌ عَلِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">وَكَدَلِكَ اَوْحَيْنَ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَبَتْنَ اَيْدِيْهِمَا</p></div>
                                        <div class="col"><p class="arabic_center">فٍيْهَا خَلِدُوْنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَكَفَ بِنَاحِسِبِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَكَنُوْ اَقَوْمَنًااَلِيْنٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَتَاعًااَلى حِيْنٍ</p></div>
                                        <div class="col"><p class="arabic_center">لَشَيْءٌعَجِيْبٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَوْلَى لَكَ فَاَوْلَى</p></div>
                                        <div class="col"><p class="arabic_center">اُوْتِيْ مُوْ سَى وَعِيْسَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَوْمَئِذٍخَثِعَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">كَنَاعَلِيْمَنْ خَبِيْرًا</p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 11 </h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَمْ =Lam     </p></div>
                                        <div class="col"><p class="arabic_center">---م =    m</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَمْ لِمْ لُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اَمْ اِمْ اُمْ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَمْ هِمْ هُمْ</p></div>
                                        <div class="col"><p class="arabic_center">كَمْ كِمْ كُمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">َلَيْهِمْ</p></div>
                                        <div class="col"><p class="arabic_center">عَلَيْكُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اَمْرُهُ  </p></div>
                                        <div class="col"><p class="arabic_center">اَوَلَمْ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">جَمْعًا</p></div>
                                        <div class="col"><p class="arabic_center">هَمْسًا</p></div>
                                        <div class="col"><p class="arabic_center">رَاَوْهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">ذَلِكُمْ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَيْدَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">َمْلًا</p></div>
                                        <div class="col"><p class="arabic_center">فَوقَكُمْ</p></div>
                                        <div class="col"><p class="arabic_center">َضَبِيٍ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلَهُمْ </p></div>
                                        <div class="col"><p class="arabic_center">َظِيْمٌ</p></div>
                                        <div class="col"><p class="arabic_center">بَيْنَكُمُ    </p></div>
                                        <div class="col"><p class="arabic_center">خَمْسَةٌ</p></div>
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
                                        <div class="col"><p class="arabic_center">فَغَشِيَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">زَمْهَرِيْرًا </p></div>
                                        <div class="col"><p class="arabic_center">وَاَثاَرِهِمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَاشِعُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">صَلَتِهِمْ    </p></div>
                                        <div class="col"><p class="arabic_center">رَاَيْتَهُمْ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رَاَوْااَيْةً</p></div>
                                        <div class="col"><p class="arabic_center">قَمْطَرِيْرًا </p></div>
                                        <div class="col"><p class="arabic_center">واَيْدِكُمْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سَمْعِهِمْ</p></div>
                                        <div class="col"><p class="arabic_center">صَلَوَتِهِمْ  </p></div>
                                        <div class="col"><p class="arabic_center">يُمِتـُكُمْ/p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">غَيْرُكُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اخَوَياْكَ    </p></div>
                                        <div class="col"><p class="arabic_center">مُمْطِرُنَاْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِيْمَانِهِمْ</p></div>
                                        <div class="col"><p class="arabic_center">مَمْدُوْدًا</p></div>
                                        <div class="col"><p class="arabic_center">وَظَلَمُنْ    </p></div>
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
                                    <div class="col"><p class="arabic_center">قُلوْبُهُمْ فِيْ غَمْرَةٍ</p></div>
                                    <div class="col"><p class="arabic_center">يَتَنَ زَوْعُوْنَ بَيْنَهُمْ</p></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"><p class="arabic_center">فَدَ مْدَمَ عَلَيْهِمْ</p></div>
                                    <div class="col"><p class="arabic_center">لَكُمْ دِيْنُكُمْ وَلِيَ دِيْنِ   </p></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"><p class="arabic_center">خَيْثُ لاَتَرَوْنَهُمْ</p></div>
                                    <div class="col"><p class="arabic_center">اِذَاَرَاَوْهُمْقَلُوْا</p></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"><p class="arabic_center">يَوْمَعِدٍ خَسِعَةً</p></div>
                                    <div class="col"><p class="arabic_center">لِبَا سُهُمْ فِيْهَا حَرِيْرٌ</p></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"><p class="arabic_center">لَيْسَ لَهُمْ طَعَامٌ</p></div>
                                    <div class="col"><p class="arabic_center">جَاهَدُوْاَبِاَمْوَاَلِهِمْ</p></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"><p class="arabic_center">يَوْمَعِدٍ خَسِعَةً</p></div>
                                    <div class="col"><p class="arabic_center">خَيْثُ لاَتَرَوْنَهُمْ    </p></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"><p align="center" style="color: black">Maaf Ulangilah Sampai benar Semuanya <P></p></div>
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
                                        <div class="col"><p class="arabic_center">مَنْ = man</p></div>
                                        <div class="col"><p class="arabic_center"> ---- نْ = n</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَنْ عِنْ</p></div>
                                        <div class="col"><p class="arabic_center">هَنْ هنْ</p></div>
                                        <div class="col"><p class="arabic_center">اَنْ اِنْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَن ْعِباَدِ</p></div>
                                        <div class="col"><p class="arabic_center">مَنْاَمَنَ    </p></div>
                                        <div class="col"><p class="arabic_center">اِنْهُوَ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَنْهَرَنْ</p></div>
                                        <div class="col"><p class="arabic_center">مَنْ خَشِيَهُ </p></div>
                                        <div class="col"><p class="arabic_center">فَاِنْ اَصَاَبَهُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  مِنْخَيْرٍ</p></div>
                                        <div class="col"><p class="arabic_center">مَنْ اُوْتِيَ</p></div>
                                        <div class="col"><p class="arabic_center">وَمِنْهُ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">عَنْهُمَا</p></div>
                                        <div class="col"><p class="arabic_center">مِنْ حَيْثُ   </p></div>
                                        <div class="col"><p class="arabic_center">اِنْهَدَ  </p></div>
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
                                        <div class="col"><p class="arabic_center">اَقْ</p></div>
                                        <div class="col"><p class="arabic_center">اَطْ</p></div>
                                        <div class="col"><p class="arabic_center">اَدْ</p></div>
                                        <div class="col"><p class="arabic_center">اَجْ</p></div>
                                        <div class="col"><p class="arabic_center">اَبْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> HARUS JELAS TERDENGAR QOLQOLAHNYA <P></p></div>
                                        </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تُبْدُوْا</p></div>
                                        <div class="col"><p class="arabic_center">وَاَبْقَى</p></div>
                                        <div class="col"><p class="arabic_center">اَبْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يُجْزَوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَجْعَلُ</p></div>
                                        <div class="col"><p class="arabic_center">اَجْ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">قَدْ حًا</p></div>
                                        <div class="col"><p class="arabic_center">يَدْخُلُوْاَ</p></div>
                                        <div class="col"><p class="arabic_center">اَدْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَيَطْغَ</p></div>
                                        <div class="col"><p class="arabic_center">اَطْعَمَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اَطْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَقْرَأُ</p></div>
                                        <div class="col"><p class="arabic_center">اَقْلَ مً</p></div>
                                        <div class="col"><p class="arabic_center">اَقْ  </p></div>
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
                                        <div class="col"><p class="arabic_center">اِلَيَوْمِ يُبْعَثُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">اجْرٌغَيْرَمَمْنُوْنٍ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">علَذَلِكَ لَشَهِيْدٌ</p></div>
                                        <div class="col"><p class="arabic_center">فِيْجِيْدِهَاحَبْلُنٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَذَالَشَيْءٌعُجَابٌ</p></div>
                                        <div class="col"><p class="arabic_center">يَمْشِي عَلَ بَطْنِهِ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَجَعَلَ فِيْهَاكَيْدَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">يَجْعَلُوْنَ اَصَابِعَهُمْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَلَمْ يَجْعَلْ كَيْدَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">وَاَقْبَلَ بَعْضُهُمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> BIARLAH PELAN, ASAL BENAR <P></p></div>
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
                                        <div class="col"><p class="arabic_center">وماملكت ايْمَانُهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اَتْ- غَلَبَتْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَثْنَى َثُالَثَ</p></div>
                                        <div class="col"><p class="arabic_center">اِثْ – ِمثْقَالَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُوَيُحْيِ وَيُمِيْتُ</p></div>
                                        <div class="col"><p class="arabic_center">اُحْ – يُحْسِنُوْنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَحْطَفُ اَبْصَارَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اَحْ - اَخْلَدَهُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِذْهُمْ عَلَيْهَاقُمُوْدٌ</p></div>
                                        <div class="col"><p class="arabic_center">اِذْ - بِاِذْنِهِ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> وَاَرْسَلَ عَلَيْهِمْ طَيْرَاَ</p></div>
                                        <div class="col"><p class="arabic_center">اِرْ- اَرْضٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَحْطَفُ اَبْصَارَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اَحْ - اَخْلدَهُs</p></div>
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
                                        <div class="col"><p class="arabic_center">اَلَمْنَشْرَحْلَكَ</p></div>
                                        <div class="col"><p class="arabic_center">اَشْ - اَشْتَاتًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَصْلَ نَارًاحَامِيَةً</p></div>
                                        <div class="col"><p class="arabic_center">اَصْ - يَصْلَوْنهَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَيْدَهُمْ فِيْ   يَضْلِيَلً</p></div>
                                        <div class="col"><p class="arabic_center">اَضْ- اَضْعَافًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اَظْللَمَ عَلَيْهِمْ قَامُوْاَ</p></div>
                                        <div class="col"><p class="arabic_center">اَظْ - يَظْهَرُ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لاَيُسْمِنُ وَلاَيَغْنِ</p></div>
                                        <div class="col"><p class="arabic_center">اَغْ – مَفْفِرَةُ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لاَيَئُوْدُهُ حِفْظُهُمَا</p></div>
                                        <div class="col"><p class="arabic_center">اَفْ - اَفْءِدَةٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">كَيْدَهُمْ فِيْ   يَضْلِيَلً</p></div>
                                        <div class="col"><p class="arabic_center">اَهْ- اَضْعَافًا</p></div>
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
                                        <div class="col"><p class="arabic_center">وَلْيَبْكُوْاكَثِيْرًا</p></div>
                                        <div class="col"><p class="arabic_center">فَلْيَضْحَكُوْاقَالِيْلٌا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُم ْاَظْلَمَ وَاَطْغَ</p></div>
                                        <div class="col"><p class="arabic_center">هُوَاَغْنَىوَاَقْنَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَنْ اَوْفَى بِعَهْدِهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَيَقْبِضُوْنَ اَيْدِيَهُمْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَشْنُوْنَ صُدُوْرَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">لَايَجْعَاْنَافِتْنَهً</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَدْاَبْلَغْتُكُمُ</p></div>
                                        <div class="col"><p class="arabic_center">اِذْهُمْ عَلَيْهَاَقُعُوْدٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَقَالَ لِصَاحِبِهِ</p></div>
                                        <div class="col"><p class="arabic_center">وَمِنْ خِزْيَوْمِئِذٌ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هُم ْاَظْلَمَ وَاَطْغَ</p></div>
                                        <div class="col"><p class="arabic_center">هُوَاَغْنَىوَاَقْنَى</p></div>
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
                                        <div class="col"><p align="center" style="color: black"> Harus Jelas Perbedaannyas <P></p></div>
                                        </div>
                                        <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَقْ</p></div>
                                        <div class="col"><p class="arabic_center">تَاكْ</p></div>
                                        <div class="col"><p class="arabic_center">تَعْ  </p></div>
                                        <div class="col"><p class="arabic_center">تَأ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَقْهَرُ</p></div>
                                        <div class="col"><p class="arabic_center">سَكْرَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">اَعْمَى</p></div>
                                        <div class="col"><p class="arabic_center">تَأكُلُ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">تَقْهَرُوُ</p></div>
                                        <div class="col"><p class="arabic_center">سَكْرَةٌ</p></div>
                                        <div class="col"><p class="arabic_center">لَعْنَتِيْ</p></div>
                                        <div class="col"><p class="arabic_center">رَأفَةٌ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">رُزِقْنَا</p></div>
                                        <div class="col"><p class="arabic_center">لَذِكْرَى</p></div>
                                        <div class="col"><p class="arabic_center">بَعْدِهِ  </p></div>
                                        <div class="col"><p class="arabic_center">اَخْطَاْنَا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">سُقْيَهَا</p></div>
                                        <div class="col"><p class="arabic_center">يُكْثِرُ  </p></div>
                                        <div class="col"><p class="arabic_center">اَعْطَيْنَا</p></div>
                                        <div class="col"><p class="arabic_center">اِمْتَلَاأتِ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">يَقْرَأُ</p></div>
                                        <div class="col"><p class="arabic_center">مُكْرَمٌ</p></div>
                                        <div class="col"><p class="arabic_center">مُعْتَدِهِ</p></div>
                                        <div class="col"><p class="arabic_center">مُؤمِنٌ</p></div>
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
                                        <div class="col"><p class="arabic_center">هُوَاَغْنَى وَاَقْنَى </p></div>
                                        <div class="col"><p class="arabic_center">فَلْيَأْتِ مُسْتَمِعُهُمْ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَحْسَنَ تَقْوِيْمٍ </p></div>
                                        <div class="col"><p class="arabic_center">وَرَفَعْنَالَكَ ذِكْرُكَ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَمْهِلْهُمْ رُوَيْدًا  </p></div>
                                        <div class="col"><p class="arabic_center">  خصْمَانِ بَعْضُنَا    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مَنْ اَعْمَالِهِمْشَيًأ</p></div>
                                        <div class="col"><p class="arabic_center">يَتَنَازَعُوْنَ فِيْهَا كَأْسَا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">َاتَهِنُوْاَوَلَاتَحْزَنُوْا</p></div>
                                        <div class="col"><p class="arabic_center">نَبَاهُ بَعْدَحِيْنٍ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَسَعْيْهَارَاِضيًةٌ</p></div>
                                        <div class="col"><p class="arabic_center">فَاثَرْنَ بِهِ نَقْعًا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خَلَقْنَازَوْجَيْنِ </p></div>
                                        <div class="col"><p class="arabic_center">يَقُوْلُ اَهْلَكْتُ مَالًا   خ</p></div>
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
                                        <div class="col"><p align="center" style="color: black"> Keliru Panjang Pendek Bisa Merusak Arti, Maka Hati-Hatilahs  <P></p></div>
                                        </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لِسَعْيِهَا رَاضِيَةُ</p></div>
                                        <div class="col"><p class="arabic_center">مَاكِثِيْنَ فِيْهِ اَبَدٍا    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِعِجْلٍ حَنِيْذٍ</p></div>
                                        <div class="col"><p class="arabic_center">فَلْيَذُ وْقُوْهُ حَمِيْمٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاَوْفُوْا بِعِهْدِيْ</p></div>
                                        <div class="col"><p class="arabic_center">لاَتَقُوْلُوْاَرَاعِنَا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خُذْبِيَدِ كَ ضِغْثَا</p></div>
                                        <div class="col"><p class="arabic_center">لَكَمْ كَيْفَ تَحْكُمُوْنَ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَوْاَلْقَى مِعِاذِيْرَهُ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَوْكَانَ ذَاقُرْبَى</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خُذْبِيَدِ كَ ضِغْثَا</p></div>
                                        <div class="col"><p class="arabic_center">وَاَوْفُوْا بِعِهْدِيْ    </p></div>
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
                                        <div class="col"><p class="arabic_center">لاَيُظْلَمَوْنَ فَتِيْلًا  </p></div>
                                        <div class="col"><p class="arabic_center">يَقْرَءُوْنَ كِتَبَهُمْ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَظْلَمُ عَلَيْهِمِ قَامُوْا  </p></div>
                                        <div class="col"><p class="arabic_center"> تَجِدُوْاَلَكُمْ شُوْكِيْلًا   ا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَمِنْ خَلَقْتَ طِيْنًا </p></div>
                                        <div class="col"><p class="arabic_center"> نَسِيَا حُوْتَهُمَا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> لِبَاسَهُمَالِيْرَيْهُمَا  </p></div>
                                        <div class="col"><p class="arabic_center">يَرْسَلُ عَلَيْكَمَا شُوْاَظٌ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَايَلْبَشُوْنَ خَلَافَكَ </p></div>
                                        <div class="col"><p class="arabic_center">يَوْمَ لاَيَغْنِي عَنْهُمْ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَايَخْافُ عُقْبَهَا </p></div>
                                        <div class="col"><p class="arabic_center">هُمْ اَظْلَمَ وَاَطْغَى    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman 25</h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">ذُوْفَضْلٍ عَظِيْمٍ </p></div>
                                        <div class="col"><p class="arabic_center">مَنْ اَحْسَنُ دِيْنًا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">نَحْنُ لَهُ مُسْلِمُوْنَ  </p></div>
                                        <div class="col"><p class="arabic_center"> قَاَلُوْاَسَمِعْنَاوَاَطَعْناَ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَيَهْدِيْ بِهِ كَثِيْرًا</p></div>
                                        <div class="col"><p class="arabic_center">مَايُغْنِيْ عَنَهُ مَالَهُ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَجَعَلَهُمْ كَعَصْفٍ</p></div>
                                        <div class="col"><p class="arabic_center">اَحْسَنِ تَقْوِيْمٍ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اَلَى يَوْمِ يُبْعَثُوْنَ  </p></div>
                                        <div class="col"><p class="arabic_center">يَعْلَمُ اِذَابُعْثِرَ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَلْيَدْعُ نَادِيْهُ</p></div>
                                        <div class="col"><p class="arabic_center">تَحْسَبُهُمْ اَيُقَاظًا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">مِنْ اَلْفِ شَهْرٍ </p></div>
                                        <div class="col"><p class="arabic_center">هُوَاَغْنَى وَاَقْنَى    </p></div>
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
                                        <div class="col"><p class="arabic_center">وَلَاُهْم يَحْزَنُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَخَفوٌاَلَيْهِمْ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَايُحِيْطُوْن َبِشَيْءٍ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَايَئُوْدُهُ حِفْظُهُمَا   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">  وَاْتُوْنِيْ مُسْلِمِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَعْلَمُامَا بَيْنَ اَيْدِهِمُ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَمَانَحْنُ بِمُسْتَيْفِنِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">وَيُشْراى لِلْمُحْسِنِيْنَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فَسَيُحْبِطُ اَعْمَالَكُمً</p></div>
                                        <div class="col"><p class="arabic_center">اِذْهُمْ عَلَيْهَاقُعُوْدٌ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِلَيْهِ مَرْ جِعُكُمْ جَمِيْعًا</p></div>
                                        <div class="col"><p class="arabic_center">وَكَنَاعَلَيْكُمْ رَقِيْبًا</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَايُحِيْطُوْن َبِشَيْءٍ</p></div>
                                        <div class="col"><p class="arabic_center">وَلَايَئُوْدُهُ حِفْظُهُمَا</p></div>
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
                                        <div class="col"><p class="arabic_center">وَتَقْبِضُوْنَ اَيْدِ يْهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">اِنْ اَطَعْتُمُوْهُمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَجَيْلِكَ وَرَجْلْكَ</p></div>
                                        <div class="col"><p class="arabic_center">وَاَجْلِبْ عَلَيْهِمْ </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَقَدْ رَاَهُ</p></div>
                                        <div class="col"><p class="arabic_center">قَوْسَيْنِ اَوْاَدْنَى    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِعِجْلٍحَنِيْذٍ</p></div>
                                        <div class="col"><p class="arabic_center">وَاَنْ اَقِمُ وَجْهَاكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِجْعًلُوْابِضَاعَتَهُمْ</p></div>
                                        <div class="col"><p class="arabic_center">وَهُوَيُطْعِمُ وَلَايُطْعَمُ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَاتَقُمُ عَلَى قَبْرِهِ</p></div>
                                        <div class="col"><p class="arabic_center">اُدْخُلُوْهًاِ بَسَلَمٍ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">بِعِجْلٍحَنِيْذٍ</p></div>
                                        <div class="col"><p class="arabic_center">وَجَيْلِكَ وَرَجْلْكَ</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> Bagus, tetapi ulanhilah, sehingga tidak ada yang keliru lagi. BARULAH EBTA  <P></p></div>
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
                                        <div class="col"><p align="center" style="color: black"> EBTA  <P></p></div>
                                        </div>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> Makhrojnya, MAD(Bacaan-Bacaan yang panjang), Qolqolahnya, Bedanya. <P></p></div>
                                        </div>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> Membaca boleh pelan, asal betul semua  <P></p></div>
                                        </div>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَخَلَقْنَكُمْ اَزْوِاجًا</p></div>
                                        <div class="col"><p class="arabic_center">هُوَيُبْدِئُ وَيُعِيْدُ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَمْلِئْتَ مِنْهُمْ رُعْبًا</p></div>
                                        <div class="col"><p class="arabic_center">لَلَبِثَ فِيْ بَطْنِهِ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَلَاتَحْمِلْ عَلَيْنَا</p></div>
                                        <div class="col"><p class="arabic_center">فِرَاقُ بَيْنِيْ وَبَيْنِكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خُذْ بِيَدِكَ ضِغْثًا</p></div>
                                        <div class="col"><p class="arabic_center">وَلَسَوْفَ يُعْطِيْكَ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">فِيْ طُغْيَا نِهِمْ يَعْمَهُوْنَ</p></div>
                                        <div class="col"><p class="arabic_center">هَذَابُهْتَا ن ٌعَظٍيْمٌ  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">خُذْ بِيَدِكَ ضِغْثًا</p></div>
                                        <div class="col"><p class="arabic_center">وَلَمْلِئْتَ مِنْهُمْ رُعْبًا </p></div>
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
                                        <div class="col"><p class="arabic_center">يَمْشِيْ عَلىَ رْجْلَيْنِ</p></div>
                                        <div class="col"><p class="arabic_center">وَاِذَاَرَاَوْاتِجَارَةً  </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">وَاْتُوْنِيْ مُسْلِمِيْنَ</p></div>
                                        <div class="col"><p class="arabic_center">يَعْلَمُامَا بَيْنَ اَيْدِهِمُ    </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"> اِذْهُمْ عَلَيْهَاقُعُوْدٌ</p></div>
                                        <div class="col"><p class="arabic_center">فَسَيُحْبِطُ اَعْمَالَكُمً</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">اِذْهُمْ عَلَيْهَاقُعُوْدٌ</p></div>
                                        <div class="col"><p class="arabic_center">فَسَيُحْبِطُ اَعْمَالَكُمً</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">هَذَالَشَيْءٌعُجَابٌ يَمْشِي عَلَ بَطْنِهِ</p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p class="arabic_center">لَقَدْظَلَمَكَ بِسُؤَالِ نَعْجَتِكَ اِلىَ نِمَاجِهِ   </p></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col"><p align="center" style="color: black"> MAAF, bila belum benar sempurna jangan naik ke JILID selanjutnya <P></p></div>
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