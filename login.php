<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once ("koneksi.php");
if (isset($_SESSION['adminidx'])) {
session_start();
  header('Location: index.php');
  exit();
} else
if (isset($_POST['masuk']) == 'on') {
	// Memfilter Inputan
	if (!ctype_alnum($_POST['username']) OR !ctype_alnum($_POST['password'])){
		echo "<script>
                    alert('SQL Injection Detected');
                    window.location='login.php';
             </script>";
		} else {
			// Query SQL Untuk Mengambbil Data dari tabel admin
			$query = "SELECT * FROM register WHERE username='" .$_POST['username']. "' AND password='" .($_POST['password']). "'";
			if ($query = $con->query($query)) {
				if ($query->num_rows) {
					session_start();
            while ($data = $query->fetch_array()) {
                $_SESSION['adminidx'] = true;
                $_SESSION['id_register'] = $data['id_register'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['nama_usaha'] = $data['nama_usaha'];
                $_SESSION['nama_pemilik'] = $data['nama_pemilik'];
                $_SESSION['no_ktp'] = $data['no_ktp'];
                $_SESSION['kategori_usaha'] = $data['kategori_usaha'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['no_hp'] = $data['no_hp'];
                $_SESSION['alamat'] = $data['alamat'];
                $_SESSION['desa'] = $data['desa'];
                $_SESSION['kecamatan'] = $data['kecamatan'];
                $_SESSION['provinsi'] = $data['provinsi'];
                
            }
            header('Location: index.php');
        } else {
            echo "
                <script>
                    alert('Username atau Password Salah!');
                    window.location='login.php';
                </script>
            ";
        }
    } else {
        echo "<script>alert('Gagal');</script>";
    }
}
}
?>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMADU | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script type="text/javascript">
    function validate()
    {
    var error="";
    var name = document.getElementById( "nama" );
    if( name.value == "" )
    {
    error = " Username Harus Diisi ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
    }
    var error="";
    var name = document.getElementById( "pass" );
    if( name.value == "" )
    {
    error = " Password Harus Diisi ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
    }
    else
    {
    return true;
    }
    }
</script>
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <br><br>
            <h3>SIMADU | Rumah Kreatif BUMN</h3>
            <p>
                Selamat Datang Di Halaman Login Sistem Simadu
            </p>
            
            <p>Silahkan Masukan Username & Password</p>
            <hr>
            <form class="m-t" role="form" action="" method="post" id="login-form" class="login100-form validate-form" onsubmit="return validate(); ">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="masuk">Login</button>

                <a href="#"><small>SIMADU</small></a>
                <p class="text-muted text-center"><small>Rumah Kreatif BUMN</small></p>
            </form>
            <p class="m-t"> <small>Simadu &copy; 2019</small> </p>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
