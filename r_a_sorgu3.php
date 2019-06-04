<?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","sigorta");
$sorgu=mysqli_query($baglanti,"SELECT SUM(kullanicilar.geri_odeme) as geri_toplam FROM sehirler,sehir_kul,kullanicilar,kul_tur,turler,sigortacilar WHERE sehirler.sehir_id=sehir_kul.sehir_id AND sehir_kul.kul_id=kullanicilar.kul_id AND kullanicilar.sigor_id=sigortacilar.sigor_id AND kullanicilar.kul_id=kul_tur.kul_id AND kul_tur.tur_id=turler.tur_id AND sigortacilar.sigor_id=1 AND sehirler.sehir_id=1 GROUP BY turler.tur_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>