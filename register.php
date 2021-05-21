<!DOCTYPE html>
<?php
  include "connection/koneksi.php";
  session_start();
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
</head>

<body class="bg-gradient-success">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <img class="col-lg-5 d-none d-lg-block" src="img/registrasi.png">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                            </div>
                            <form action="" method="post" class="user">
                                <div class="form-group">
                                    <input type="text" name="nama_user" class="form-control form-control-user" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" placeholder="Alamat Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                </div>
                                <button type="submit" name="kirim_daftar" class="btn btn-success btn-user btn-block">
                                    Registrasi Akun
                                </button>
                            </form>
                            <?php
                                if(isset($_POST['kirim_daftar'])){
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $nama_user = $_POST['nama_user'];
                                    $level_user = 2;
                                    $email_valid = false;
                                    $verifikasi_email = "SELECT email FROM user";
                                    $query_cek = mysqli_query($conn, $verifikasi_email);
                                    while($data = mysqli_fetch_array($query_cek)){
                                        $verifikasi_email = $data['email'];
                                        if($email != $verifikasi_email){
                                            $email_valid = true;
                                        } elseif($email == $verifikasi_email){
                                            $email_valid = false;
                                            break;
                                        }
                                    }
                                    if($email_valid == true){
                                        $query_daftar = "INSERT INTO user VALUES('','$email','$password','$nama_user','$level_user')";
                                        $sql_daftar = mysqli_query($conn, $query_daftar);
                                        if($sql_daftar){
                                            $_SESSION['daftar'] = 'sukses';
                                            echo "<script>alert('Registrasi Akun Berhasil!')</script>";
                                        } else {
                                            echo "<script>alert('Registrasi Akun Gagal!')</script>";
                                        }
                                    } else {
                                        echo "<script>alert('Email Sudah Dipakai!')</script>";
                                    }
                                    
                                }
                            ?>
                            <br>
                            <div class="text-center">
                                <a class="small" href="index.php">Sudah punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
<?php
?>