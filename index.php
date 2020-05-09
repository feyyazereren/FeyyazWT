<?php
$page = isset($_GET) && $_GET['page'] !=='' ? $_GET['page'] : 'anasayfa';
include 'views/blocks/header.php';
include 'views/blocks/navigation.php';

if(empty($page))
    $page = 'anasayfa';
$page_view_file = 'views/'.$page.'.php';

if(file_exists($page_view_file))
    include $page_view_file;
else
    include 'views/404.php';

include 'views/blocks/footer.php';