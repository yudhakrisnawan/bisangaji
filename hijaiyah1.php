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
                    <h1 class="h3 mb-0 text-gray-800">Mengenal Hijaiyah</h1>
                </div>
                <section class="mar-top--x-3 mar-bottom--x-5">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h4 align="center">Huruf Hijaiyah</h4>
                                <br>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead align="center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Huruf</th>
                                            <th>Bacaan</th>
                                            <th>Huruf Latin</th>
                                            <th>Cara Membaca</th>
                                            <th>Audio (Fathah)</th>
                                            <th>Audio (Kasroh)</th>
                                            <th>Audio (Dhomah)</th>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>1</td>
                                            <td><p class ="arabic_center">ا</p></td>
                                            <td>Alif</td>
                                            <td>A</td>
                                            <td>A-I-U</td>
                                            <td><audio id="fathah1" src="audio/Fathah/fatah_a.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah1').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh1" src="audio/Kasroh/kasroh_i.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh1').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah1" src="audio/Domah/u.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah1').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td><p class ="arabic_center">ب</p></td>
                                            <td>Ba’</td>
                                            <td>B</td>
                                            <td>Ba-Bi-Bu</td>
                                            <td><audio id="fathah2" src="audio/Fathah/fatah_ba.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah2').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh2" src="audio/Kasroh/kasroh_bi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh2').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah2" src="audio/Domah/bu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah2').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><p class ="arabic_center">ت</p></td>
                                            <td>Ta’</td>
                                            <td>T</td>
                                            <td>Ta-Ti-Tu</td>
                                            <td><audio id="fathah3" src="audio/Fathah/fatah_ta.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah3').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh3" src="audio/Kasroh/kasroh_ti.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh3').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah3" src="audio/Domah/tu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah3').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><p class ="arabic_center">ث</p></td>
                                            <td>Tsa’</td>
                                            <td>TS</td>
                                            <td>Tsa-Tsi-Tsu</td> 
                                            <td><audio id="fathah4" src="audio/Fathah/fatah_sa.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah4').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh4" src="audio/Kasroh/kasroh_tsi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh4').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah4" src="audio/Domah/su.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah4').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><p class ="arabic_center">ج</p></td>
                                            <td>Jim</td>
                                            <td>J</td>
                                            <td>Ja-Ji-Ju</td>
                                            <td><audio id="fathah5" src="audio/Fathah/fatah_ja.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah5').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh5" src="audio/Kasroh/kasroh_ji.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh5').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah5" src="audio/Domah/ju.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah5').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><p class ="arabic_center">ح</p></td>
                                            <td>Ḥa’</td>
                                            <td>Ḥ</td>
                                            <td>Ḥa- Ḥi- Ḥu</td>
                                            <td><audio id="fathah6" src="audio/Fathah/fatah_ha.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah6').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh6" src="audio/Kasroh/kasroh_hii.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh6').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah6" src="audio/Domah/hu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah6').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><p class ="arabic_center">خ</p></td>
                                            <td>Kha’</td>
                                            <td>KH</td>
                                            <td>Kho-Khi-Khu</td>
                                            <td><audio id="fathah7" src="audio/Fathah/fatah_kho.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah7').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh7" src="audio/Kasroh/kasroh_khi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh7').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah7" src="audio/Domah/khu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah7').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><p class ="arabic_center">د</p></td>
                                            <td>Dal</td>
                                            <td>D</td>
                                            <td>Da-Di-Du</td>
                                            <td><audio id="fathah8" src="audio/Fathah/fatah_da.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah8').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh8" src="audio/Kasroh/kasroh_di.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh8').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah8" src="audio/Domah/du.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah8').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><p class ="arabic_center">ذ</p></td>
                                            <td>Dzal</td>
                                            <td>DZ</td>
                                            <td>Dza-Dzi-Dzu</td>
                                            <td><audio id="fathah9" src="audio/Fathah/fatah_dza.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah9').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh9" src="audio/Kasroh/kasroh_dzi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh9').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah9" src="audio/Domah/dzu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah9').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td><p class ="arabic_center">ر</p></td>
                                            <td>Ra’</td>
                                            <td>R</td>
                                            <td>Ro-Ri-Ru</td>
                                            <td><audio id="fathah10" src="audio/Fathah/fatah_ro.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah10').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh10" src="audio/Kasroh/kasroh_ri.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh10').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah10" src="audio/Domah/ru.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah10').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td><p class ="arabic_center">ز</p></td>
                                            <td>Za’</td>
                                            <td>Z</td>
                                            <td>Za-Zi-Zu</td>
                                            <td><audio id="fathah11" src="audio/Fathah/fatah_za.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah11').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh11" src="audio/Kasroh/kasroh_zi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh11').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah11" src="audio/Domah/zu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah11').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td><p class ="arabic_center">س</p></td>
                                            <td>Sin</td>
                                            <td>S</td>
                                            <td>Sa-Si-Su</td>
                                            <td><audio id="fathah12" src="audio/Fathah/fatah_sa.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah12').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh12" src="audio/Kasroh/kasroh_si.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh12').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah12" src="audio/Domah/su.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah12').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td><p class ="arabic_center">ش</p></td>
                                            <td>Syin</td>
                                            <td>SY</td>
                                            <td>Sya-Syi-Syu</td>
                                            <td><audio id="fathah13" src="audio/Fathah/fatah_sya.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah13').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh13" src="audio/Kasroh/kasroh_syi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh13').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah13" src="audio/Domah/syu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah13').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td><p class ="arabic_center">ص</p></td>
                                            <td>Shad</td>
                                            <td>SH</td>
                                            <td>Sho-Shi-Shu</td>
                                            <td><audio id="fathah14" src="audio/Fathah/fatah_sho.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah14').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh14" src="audio/Kasroh/kasroh_shi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh14').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah14" src="audio/Domah/shu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah14').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td><p class ="arabic_center">ض</p></td>
                                            <td>Dha’</td>
                                            <td>DH</td>
                                            <td>Dho-Dhi-Dhu</td>
                                            <td><audio id="fathah15" src="audio/Fathah/fatah_dho.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah15').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh15" src="audio/Kasroh/kasroh_dhi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh15').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah15" src="audio/Domah/dhu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah15').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td><p class ="arabic_center">ط</p></td>
                                            <td>Tha’</td>
                                            <td>TH</td>
                                            <td>Tho-Thi-Thu</td>
                                            <td><audio id="fathah16" src="audio/Fathah/fatah_tho.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah16').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh16" src="audio/Kasroh/kasroh_thi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh16').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah16" src="audio/Domah/thu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah16').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td><p class ="arabic_center">ظ</p></td>
                                            <td>Zha’</td>
                                            <td>ZH</td>
                                            <td>Dzo-Dzi-Dzu</td>
                                            <td><audio id="fathah17" src="audio/Fathah/fatah_dzo.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah17').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh17" src="audio/Kasroh/kasroh_dzi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh17').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah17" src="audio/Domah/dzu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah17').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td><p class ="arabic_center">ع</p></td>
                                            <td>‘Ain</td>
                                            <td>-</td>
                                            <td>‘a-‘i-‘u</td>
                                            <td><audio id="fathah18" src="audio/Fathah/fatah_aa.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah18').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh18" src="audio/Kasroh/kasroh_ii.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh18').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah18" src="audio/Domah/uu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah18').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td><p class ="arabic_center">غ</p></td>
                                            <td>Ghain</td>
                                            <td>GH</td>
                                            <td>Gho-Ghi-Ghu</td>
                                            <td><audio id="fathah19" src="audio/Fathah/fatah_gho.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah19').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh19" src="audio/Kasroh/kasroh_ghi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh19').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah19" src="audio/Domah/ghu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah19').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td><p class ="arabic_center">ف</p></td>
                                            <td>Fa’</td>
                                            <td>F</td>
                                            <td>Fa-Fi-Fu</td>
                                            <td><audio id="fathah20" src="audio/Fathah/fatah_fa.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah20').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh20" src="audio/Kasroh/kasroh_fi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh20').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah20" src="audio/Domah/fu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah20').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td><p class ="arabic_center">ق</p></td>
                                            <td>Qaf</td>
                                            <td>Q</td>
                                            <td>Qo-Qi-Qu</td>
                                            <td><audio id="fathah21" src="audio/Fathah/fatah_qo.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah21').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh21" src="audio/Kasroh/kasroh_qi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh21').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah21" src="audio/Domah/qu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah21').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td><p class ="arabic_center">ك</p></td>
                                            <td>Kaf</td>
                                            <td>K</td>
                                            <td>Ka-Ki-Ku</td>
                                            <td><audio id="fathah22" src="audio/Fathah/fatah_ka.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah22').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh22" src="audio/Kasroh/kasroh_ki.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh22').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah22" src="audio/Domah/ku.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah22').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td><p class ="arabic_center">ل</p></td>
                                            <td>Lam</td>
                                            <td>L</td>
                                            <td>La-Li-Lu</td>
                                            <td><audio id="fathah23" src="audio/Fathah/fatah_la.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah23').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh23" src="audio/Kasroh/kasroh_li.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh23').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah23" src="audio/Domah/lu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah23').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td><p class ="arabic_center">م</p></td>
                                            <td>Mim</td>
                                            <td>M</td>
                                            <td>Ma-Mi-Mu</td>
                                            <td><audio id="fathah24" src="audio/Fathah/fatah_ma.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah24').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh24" src="audio/Kasroh/kasroh_mi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh24').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah24" src="audio/Domah/mu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah24').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td><p class ="arabic_center">ن</p></td>
                                            <td>Nun</td>
                                            <td>N</td>
                                            <td>Na-Ni-Nu</td>
                                            <td><audio id="fathah25" src="audio/Fathah/fatah_na.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah25').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh25" src="audio/Kasroh/kasroh_ni.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh25').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah25" src="audio/Domah/nu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah25').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td><p class ="arabic_center">و</p></td>
                                            <td>Waw</td>
                                            <td>W</td>
                                            <td>Wa-Wi-Wu</td>
                                            <td><audio id="fathah26" src="audio/Fathah/fatah_wa.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah26').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh26" src="audio/Kasroh/kasroh_wi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh26').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah26" src="audio/Domah/wu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah26').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td><p class ="arabic_center">ه</p></td>
                                            <td>Ha’</td>
                                            <td>H</td>
                                            <td>Ha-Hi-Hu</td>
                                            <td><audio id="fathah27" src="audio/Fathah/fatah_ha.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah27').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh27" src="audio/Kasroh/kasroh_hii.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh27').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah27" src="audio/Domah/hu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah27').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td><p class ="arabic_center">لا</p></td>
                                            <td>Lam Alif</td>
                                            <td>L</td>
                                            <td>La</td>
                                            <td><audio id="fathah28" src="audio/Fathah/fatah_la.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah28').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh28" src="audio/Kasroh/kasroh_li.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh28').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah28" src="audio/Domah/lu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah28').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td><p class ="arabic_center">ء</p></td>
                                            <td>Hamzah</td>
                                            <td>‘</td>
                                            <td>A-I-U</td>
                                            <td><audio id="fathah29" src="audio/Fathah/fatah_aa.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah29').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh29" src="audio/Kasroh/kasroh_ii.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh29').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah29" src="audio/Domah/uu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah29').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td><p class ="arabic_center">ي</p></td>
                                            <td>Ya’</td>
                                            <td>Y</td>
                                            <td>Ya-Yi-Yu</td>
                                            <td><audio id="fathah30" src="audio/Fathah/fatah_ya.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('fathah30').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="kasroh30" src="audio/Kasroh/kasroh_yi.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('kasroh30').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                            <td><audio id="domah30" src="audio/Domah/yu.mp3"></audio>
                                                <div>
                                                    <button onclick="document.getElementById('domah30').play()" class="btn btn-success btn-sm" >Play</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>    
                                </table>
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