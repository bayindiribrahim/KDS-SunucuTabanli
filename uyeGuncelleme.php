<?php
require("connection.php");
if($conn){
	if(isset($_POST["eposta"])&&isset($_POST["sifre"])&&isset($_POST["yeniSifre"])){
        $email=$_POST["eposta"];
        $sifre=$_POST["sifre"];
        $yeniSifre=$_POST["yeniSifre"];
	    $sorgu=mysqli_query($conn,"UPDATE sigortacilar SET sigor_sifre='".$yeniSifre."' where sigor_adi='".$email."'");
	    if ($sorgu){
		  echo "Kayıt başarıyla güncellendi";
		}
	    else {
		  echo "Hata:".$sorgu."<br>".$conn->error;
		}
        mysqli_close($conn);
    }   
    else{
	   echo "Veriler gelmedi!";
    } 
}
else {
	die("Bağlantı Yapılamadı");
}
header("Refresh:3; url=ayarlar.php");
?>