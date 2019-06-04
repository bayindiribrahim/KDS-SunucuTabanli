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
              <h1 class="text-center mt-3">Şifre Değiştirme</h1>
              <div class="guncelle">
                  <form method = "POST" action = "uyeGuncelleme.php">
                    <div class="form-group">
                        <label for="eposta">E-posta</label>
                        <input class="form-control" id="eposta" name = "eposta">
                    </div>
                    <div class="form-group">
                         <label for="sifre">Mevcut Şifre</label>
                         <input class="form-control" id="sifre" name = "sifre" type = "password">
                    </div>
                    <div class="form-group">
                          <label for="yeniSifre">Yeni Şifre</label>
                          <input class="form-control" id="yeniSifre" name = "yeniSifre" type = "password">
                    </div>
                    <button type="submit" class="btn">Güncelle</button>
                   </form>
              </div>
          </div>
      </div>
      
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.4.1.js"></script>
    <script src="popper.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
      
    <script type="text/javascript">
        $(document).ready(function(){
            $('#acKapa').on('click', function() {
                $('#yanMenu').toggleClass('active');
            });
        });        
    </script>
  </body>
</html>