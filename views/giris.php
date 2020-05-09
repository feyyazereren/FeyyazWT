<div class="text-center">
    <form class="form-signin" id="loginForm" method="post" action="/giris-yap" enctype="multipart/form-data">
        <div class="bg-dark rounded">
            <img class="m-2" src="/assets/img/logo.png" alt=""  />
        </div>
        <p>&nbsp;</p>
        <label for="inputEmail" class="sr-only">E-posta Adresiniz</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="email@email.com" required autofocus>
        <label for="inputPassword" class="sr-only">Şifre</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Şifre" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="on" name="rememberme"> Beni hatırla
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="loginButton" type="button">Giriş Yap</button>
        <p class="mt-5 mb-3 text-muted">
            <span class="alert alert-warning">
                <i class="fa fa-exclamation-circle"></i> Doğru giriş bilgileri:
            </span>
            <ul class="list-group">
            <li class="list-group-item">E-posta: g131210048@ogr.sakarya.edu.tr</li>
            <li class="list-group-item">Şifre: c0kg1zl1</li>
        </ul>
        </p>
    </form>
</div>
<script type="text/javascript" src="/assets/js/login.js"></script>