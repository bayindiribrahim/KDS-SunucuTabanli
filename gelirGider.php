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
              <div class="row">
                  <div class="col">
                      <div id="grafikA">
                        <canvas id="myChartA"></canvas>
                      </div>
                  </div>
                  <div class="col">
                      <div id="grafikB">
                        <canvas id="myChartB"></canvas>
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
          $(document).ready(function (){
             showGraph(); 
          });
          function showGraph(){
              var turler=["Ev","Araç","Sağlık"];
              var gelir=[1000,1300,900];
              
              var chardata={
                  labels:turler,
                  datasets:[
                      {
                          label:"Gelir",
                          data:gelir,
                          backgroundColor:["#006666","#006666","#006666"]
                      }
                  ]
              };
              var cnv=$("#myChartA");
              var barGraph=new Chart(cnv,{
                  type:"bar",
                  data:chardata
              });
          }
          Chart.scaleService.updateScaleDefaults('linear', {
                ticks: {
                    min: 0
                }
            });
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
        label:'Gider',
        data:geri,
        backgroundColor:["#800000","#800000","#800000"]
        }]
        };
        var cnv=$("#myChartB");
        var barGraph=new Chart(cnv,{
        type:'bar',
        data:chartdata
        });
        });
        };
      </script>
  </body>
</html>