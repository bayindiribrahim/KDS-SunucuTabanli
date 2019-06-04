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
    <link rel="stylesheet" href="main.css">

    <title>Cedant</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top pt-3 pb-3">
          <div class="container">
              <a class="navbar-brand" href="#">CEDANT</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Hızmetlerımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Hakkımızda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Iletısım</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Uye Gırısı</a>
                  </li>
                </ul>
              </div>
          </div>
    </nav>
      
      <!--FORM SECTION-->
      <header id="formSection">
          <div class="overlay">
              <div class="container">
                  <div class="row text-center">
                      <div class="col my-auto">
                          <h1>Üye Girişi</h1>
                          <form method = "POST" action = "girisKontrol.php">
                              <div class="form-group mx-auto">
                                  <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-user"></i>
                                          </span>
                                      </div>
                                      <input class="form-control" type="text" placeholder="Email" name = "eposta">
                                  </div>
                              </div>
                              <div class="form-group mx-auto">
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">
                                              <i class="fas fa-key"></i>
                                          </span>
                                      </div>
                                      <input class="form-control" placeholder="Password" name = "sifre" type = "password">
                                  </div>
                                <input type="submit" value="GİRİŞ" onclick="window.location.href='anasayfa.php'" class="btn btn-primary btn-block mt-4">
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.4.1.js"></script>
    <script src="popper.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
  </body>
</html>