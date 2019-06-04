<?php
require("connection.php");
if($conn){
	if(isset($_POST["eposta"])&&isset($_POST["sifre"])){
        $email=$_POST["eposta"];
        $sifre=$_POST["sifre"];
	    $sorgu=mysqli_query($conn,"SELECT sigortacilar.sigor_adi,sigortacilar.sigor_sifre FROM sigortacilar WHERE sigortacilar.sigor_id=1 AND sigor_adi='".$email."' AND sigor_sifre='".$sifre."'");
	    if ($sorgu){
		  echo "Giriş Başarılı Lüften Bekleyiniz";
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
header("Refresh:2; url=anasayfa.php");
?>













