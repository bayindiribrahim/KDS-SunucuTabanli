<?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","sigorta");
$sorgu=mysqli_query($baglanti,"SELECT sehirler.sigortasiz, COUNT(kullanicilar.kul_id) as kul_say FROM sehirler,sehir_kul,kullanicilar,sigortacilar WHERE sehirler.sehir_id=sehir_kul.sehir_id AND sehir_kul.kul_id=kullanicilar.kul_id AND kullanicilar.sigor_id=sigortacilar.sigor_id AND sigortacilar.sigor_id=1 AND sehirler.sehir_id=1");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>