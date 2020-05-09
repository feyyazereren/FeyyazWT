<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FME</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/custom/navbar.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">
    <link rel="icon" href="../assets/img/web-programming.png"/>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/custom/include.js"></script>
    <link rel="stylesheet" href="../assets/css/custom/profile.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a href="index.html" class="navbar-brand">
        <img src="../assets/img/logo.png"/></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="hakkimda.html" class="nav-item nav-link">Hakkımda</a>
            <a href="cv.html" class="nav-item nav-link">CV</a>
            <a href="sehir.html" class="nav-item nav-link">Şehrim</a>
            <a href="takim.html" class="nav-item nav-link">Takımımız</a>
            <a href="iletisim.html" class="nav-item nav-link">İletişim</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-link" href="iletisim.html">
                <i class="far fa-comment-alt popmessage" data-container="body" data-toggle="popover"
                   data-placement="bottom" data-content="İletişim"> </i>
            </a>
        </div>
    </div>
</nav>


<div class="pfl-wrapper">
    <div class="row">
        <div class="col-md-3">
            <h5>İletişim Bilgileri</h5>
            <hr>

            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-phone"></i> +90 538 240 9120</li>
                <li class="list-group-item"><i class="fa fa-map-marked"></i> İstanbul, Türkiye</li>
                <li class="list-group-item"><i class="fa fa-envelope"></i> feyyazereren@outlook.com</li>
            </ul>
        </div>
        <div class="col-sm-12 d-md-none">
            <p>&nbsp;</p>
        </div>
        <div class="col-md-6 offset-md-3">
            <h5>İletişim Formu</h5>
            <hr>
            <div>
                <label for="name">İsim</label>
                <p id="isim"></p>
            </div>
            <div>
                <label for="email">E-posta</label>
                <p id="email"></p>
            </div>
            <div>
                <label for="subject">Konu</label>
                <p id="konu"></p>
            </div>
            <div>
                <label for="priority">Öncelik</label>
                <br>
                <p id="oncelik"></p>
            </div>
            <div>
                <label for="message">Mesaj</label>
                <p id="mesaj"></p>
            </div>
            <div>
                <label for="message">Şartları kabul ediyorum</label>
                <i id="sartlar"></i>
            </div>
            <hr>
        </div>
    </div>
</div>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/custom/iletisimformlari.js"></script>
<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
<script src="../assets/js/custom/main.js"></script>
</body>
</html>