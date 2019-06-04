<?php
header('Content-Type:application/json');
$baglanti2=mysqli_connect("localhost","root","","sigorta");
$sorgu2=mysqli_query($baglanti2,"SELECT COUNT(kullanicilar.kul_id) as kul_sayim FROM sehirler,sehir_kul,kullanicilar,kul_tur,turler,sigortacilar WHERE sehirler.sehir_id=sehir_kul.sehir_id AND sehir_kul.kul_id=kullanicilar.kul_id AND kullanicilar.sigor_id=sigortacilar.sigor_id AND kullanicilar.kul_id=kul_tur.kul_id AND kul_tur.tur_id=turler.tur_id AND sigortacilar.sigor_id=1 AND sehirler.sehir_id=1 GROUP BY turler.tur_id");
$data2=array();
foreach($sorgu2 as $row){
$data2[]=$row;
}
mysqli_close($baglanti2);
echo json_encode($data2);
?>