<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a href="/" class="navbar-brand">
        <img src="../assets/img/logo.png"/></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="hakkimda" class="nav-item nav-link<?php echo ($page=='hakkimda') ? ' active' : ''; ?>">Hakkımda</a>
            <a href="cv" class="nav-item nav-link<?php echo ($page=='cv') ? ' active' : ''; ?>">CV</a>
            <a href="sehir" class="nav-item nav-link<?php echo ($page=='sehir') ? ' active' : ''; ?>">Şehrim</a>
            <a href="takim" class="nav-item nav-link<?php echo ($page=='takim') ? ' active' : ''; ?>">Takımımız</a>
            <a href="iletisim" class="nav-item nav-link<?php echo ($page=='iletisim') ? ' active' : ''; ?>">İletişim</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-link popmessage" href="iletisim" data-container="body" data-toggle="popover"
               data-placement="bottom" data-content="İletişim">
                <i class="far fa-comment-alt"> </i>
            </a>
            <a href="giris" class="nav-link popmessage" data-toggle="popover" data-placement="bottom" data-container="body" data-content="Giriş Yap">
                <i class="fa fa-key"></i>
            </a>
        </div>
    </div>
</nav>