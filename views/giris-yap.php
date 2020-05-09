<div class="container">
    <p>&nbsp;</p>
<?php
$sifre = "fa8462cbf6be091f187dc89b48f394e6";
$loginEmail = filter_input(0,'email', FILTER_SANITIZE_EMAIL);
$loginPw  = filter_input(0,'password', FILTER_SANITIZE_STRING);
$rememberMe = filter_input(0,'rememberme', FILTER_SANITIZE_STRING);
if ( md5($loginPw) != $sifre || $loginEmail != "g131210048@ogr.sakarya.edu.tr" )
{
    ?>
    <h1><i class="fa fa-sad-cry"></i> Lütfen bilgilerinizi kontrol ederek tekrar deneyiniz.</h1>
    <?php
    die;
}

?>
<h1>
    <i class="fa fa-smile-beam"></i> Hoşgeldiniz! Sn, Feyyaz Ereren!
</h1>
<?php
if($rememberMe == 'on')
{
    ?>
    <h4>Sizi hiç unutmayacağız.. <i class="fa fa-fish"></i></h4>
    <?php
}
?>
</div>