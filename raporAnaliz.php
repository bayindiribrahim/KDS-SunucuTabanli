<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!--Monserrat Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&display=swap" rel="stylesheet">
    <!--Oswald Font-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="anasayfaStyle.css">

    <title>Cedant</title>
  </head>
  <body>
      
      <!--Yan Menü-->
      
      <div class="kalip">
          <div id="yanMenu">
              <nav class="navbar">
                  <a class="navbar-brand text-center py-3" href="#">CEDANT</a>
                  <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="anasayfa.php">Mevcut Kullanıcılar</a> </li>
                      <li class="nav-item"><a class="nav-link" href="yeniKullanici.php">Yeni Kullanıcı Ekle</a> </li>
                      <li class="nav-item"><a class="nav-link" href="gelirGider.php">Gelir-Gider</a> </li>
                      <li class="nav-item"><a class="nav-link" href="raporAnaliz.php">Rapor ve Analiz</a> </li>
                      <li class="nav-item"><a class="nav-link" href="map.html">Ülke Geneli Harita Raporlar</a> </li>
                      <li class="nav-item"><a class="nav-link" href="ayarlar.php">Hesap Ayarları</a> </li>
                      <li class="nav-item"><a class="nav-link" href="index.php">Çıkış</a> </li>
                  </ul>
              </nav>
          </div>
          
          <!--İçerik-->
      
          <div id="content">
              <div class="container-fluid">
                  <button type="button" id="acKapa" class="btn">&#x2630;</button>
              </div>
              <div class="row">
                  <div class="col">
                      <form class="form-inline">
                          <label class="my-1 mr-5" for="inlineFormCustomSelectPref">Şehir Seçiniz:</label>
                          <select class="custom-select my-1 mr-sm-5" id="inlineFormCustomSelectPref">
                            <option selected>Seçiniz...</option>
                            <option value="1">Ankara</option>
                            <option value="2">Antalya</option>
                            <option value="3">Aydın</option>
                          </select>
                          <button type="submit" class="btn" id="rAbtn">Görüntüle</button>
                      </form>
                      <div id="grafik1">
                        <canvas id="myChart"></canvas>
                      </div>
                      <div id="grafik2">
                        <canvas id="myChart2"></canvas>
                      </div>
                  </div>
                  <div class="col">
                      <form class="form-inline">
                          <label class="my-1 mr-5" for="inlineFormCustomSelectPref">İşlem Seçiniz:</label>
                          <select class="custom-select my-1 mr-sm-5" id="inlineFormCustomSelectPref">
                            <option selected>Seçiniz...</option>
                            <option value="1">Şube</option>
                            <option value="2">Reklam</option>
                            <option value="3">Seminer</option>
                            <option value="4">Düşük Fiyat</option>
                            <option value="5">Yüksek Fiyat</option>
                          </select>
                          <button type="submit" class="btn" id="rAbtn2">Bildir</button>
                      </form>
                      <div id="grafik3">
                        <canvas id="myChart3"></canvas>
                      </div>
                      <div id="grafik4">
                        <canvas id="myChart4"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.4.1.js"></script>
    <script src="popper.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
      
    <script type="text/javascript">
        $(document).ready(function(){
            $('#acKapa').on('click', function() {
                $('#yanMenu').toggleClass('active');
            });
        });        
    </script>
      <script>
        $(document).ready(function(){
        showGraph();
        });
        function showGraph(){
        $.post("r_a_sorgu1.php",
        function(data){
        console.log(data);
        var sigortasizSayisi=[];
        var sigortali=[];
        for (var i in data){
        sigortasizSayisi.push(data[i].sigortasiz);
        sigortali.push(data[i].kul_say);
        };
        var chartdata={
        labels:["Sigortalı","Sigortasız"],
        datasets:[
        {
        label:'Sigorta Oranı',
        data:[sigortali,sigortasizSayisi],
        backgroundColor:["#f37735","#ffc425"]
        }]
        };
        var cnv=$("#myChart");
        var barGraph=new Chart(cnv,{
        type:'pie',
        data:chartdata
        });
        });
        };
      </script>
      <script>
        $(document).ready(function(){
        showGraph2();
        });
        function showGraph2(){
        $.post("r_a_sorgu2.php",
        function(data2){
        console.log(data2);
        var turler=[];
        var sigortalilar=[];
        for (var i in data2){
        sigortalilar.push(data2[i].kul_sayim);
        };
        var chartdata={
        labels:["Ev","Araç","Sağlık"],
        datasets:[
        {
        label:'Tür Oranları',
        data:sigortalilar,
        backgroundColor:["#d11141","#00b159","#00aedb"]
        }]
        };
        var cnv=$("#myChart3");
        var barGraph=new Chart(cnv,{
        type:'pie',
        data:chartdata
        });
        });
        };
      </script>
      <script>
        $(document).ready(function(){
        showGraph3();
        });
        function showGraph3(){
        $.post("r_a_sorgu3.php",
        function(data){
        console.log(data);
        var turler=[];
        var geri=[];
        for (var i in data){
        geri.push(data[i].geri_toplam);
        };
        var chartdata={
        labels:["Ev","Araç","Sağlık"],
        datasets:[
        {
        label:'Geri Ödemeler',
        data:geri,
        backgroundColor:["#006666","#006666","#006666"]
        }]
        };
        var cnv=$("#myChart2");
        var barGraph=new Chart(cnv,{
        type:'bar',
        data:chartdata
        });
        });
        };
      </script>
      <script>
        $(document).ready(function(){
        showGraph4();
        });
        function showGraph4(){
        $.post("r_a_sorgu4.php",
        function(data){
        console.log(data);
        var deprem=[];
        var kaza=[];
        var hastalik=[];
        for (var i in data){
        deprem.push(data[i].deprem_oran);
        kaza.push(data[i].kaza_oran);
        hastalik.push(data[i].hastalik_oran);
        };
        var chartdata={
        labels:["Deprem","Kaza","Hastalik"],
        datasets:[
        {
        label:'Afet Oranları',
        data:[deprem[0],kaza[0],hastalik[0]],
        backgroundColor:["#800000","#800000","#800000"]
        }]
        };
        var cnv=$("#myChart4");
        var barGraph=new Chart(cnv,{
        type:'bar',
        data:chartdata
        });
        });
        Chart.scaleService.updateScaleDefaults('linear', {
            ticks: {
                min: 0
            }
        });
        };
      </script>
  </body>
</html>