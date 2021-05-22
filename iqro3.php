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
                    <h1 class="h3 mb-0 text-gray-800">Iqro</h1>
                </div>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="container">
                        <div class="tab-content terms-tab-content fsize-m-2">
                            <div class="judul">
                                <h4 align="center">Iqro 3</h4>
                                <br>
                            </div>
                            <div class="judul">
                                <h3 align="center">Halaman 1</h3>
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