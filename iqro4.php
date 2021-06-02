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
                                    <div class="row">
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
                                        <div class="col"><p class="arabic_center"></p></div>
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
                                    <h4 align="center" style="color:white; background-color:black">Halaman </h4>
                                    <br>
                                </div>
                                <div class="container">
                                    <!-- iqro -->                             
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