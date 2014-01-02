<?php
session_start();
include "koneksi.php";
//$pass=md5($_POST['pass']);
//$pass=$_POST['password'];

if (!$_SESSION['username'] && !$_SESSION['password']){
$username = $_POST['username'];
$password = $_POST['password'];
//$password = md5($_POST['password'],15);

if (!empty($username)){
    if (!empty($password)){
        $sql = mysql_query("SELECT * FROM user WHERE nama='".$username."' AND pass='".$password."'");
        $tes = mysql_num_rows($sql);
            if ($tes == 1){
                $hasil = mysql_fetch_assoc($sql);
                $_SESSION['username'] = $hasil['nama'];
                $_SESSION['password'] = $hasil['pass'];
                //header("location:index.php");
				header('location:index2.php?lihat=home');
            }else{
                //echo "Kombinasi username dan password tidak cocok";
				header('location:index.php?lihat=login2');
            }
    }else{
        //echo "Anda belum mengisi password";
		header('location:index.php?lihat=login2');
    }
}else{
    //echo "Anda belum mengisi username";
	header('location:index.php?lihat=login2');
}
}else{
    //header("location:index.php");
	header('location:index2.php?lihat=home');
}
/*$login=mysql_query("select * from user where nama='$_POST[username]' and pass='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0){
session_start();

	//session_register("namauser");
	//session_register("passuser");

$_SESSION[namauser]=$r[user];
$_SESSION[passuser]=$r[pass];
//echo"LOGIN BERHASIL</H2>";

header('location:index2.php?lihat=home');
}
else{
header('location:index.php?lihat=login2');
}*/
?>