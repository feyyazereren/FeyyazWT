<?php
$name = isset($_POST['name']) && $_POST['name'] ? $_POST['name'] : '';
$email = isset($_POST['email']) && $_POST['email'] ? $_POST['email'] : '';
$subject = isset($_POST['subject']) && $_POST['subject'] ? $_POST['subject'] : '';
$priority = isset($_POST['priority']) && $_POST['priority'] ? $_POST['priority'] : '';
$message = isset($_POST['message']) && $_POST['message'] ? $_POST['message'] : '';
$sartlar = isset($_POST['sartlar']) && $_POST['sartlar'] ? $_POST['sartlar'] : '';

header('Content-Type: application/json');

if(!$sartlar)
{
    ?>
    <h1>Lütfen şartları kabul ediniz.</h1>
    <a class="btn btn-primary" onclick="javascript:window.history.back()">Geri Dön</a>
    <?php
}
?>
<div class="container">
    <h1>Göndermiş Olduğunuz Bilgiler:</h1>
    <table class="table table-striped">
        <tbody>
        <tr><th>İsim:</th><td><?php echo $name; ?></td></tr>
        <tr><th>E-posta:</th><td><?php echo $email; ?></td></tr>
        <tr><th>Konu:</th><td><?php echo $subject; ?></td></tr>
        <tr><th>Öncelik:</th><td><?php echo $priority; ?></td></tr>
        <tr><th>Mesaj:</th><td><?php echo $message; ?></td></tr>
        </tbody>
    </table>
    <div class="alert alert-info">İletişime geçtiğiniz için teşekkürler!</div>
</div>
