<?php 

require_once "lib/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new compiler();

$result = $scss->compile('@import"sass/1546.scss"');

file_put_contents('css/1546.css',$result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1546</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/1546.css">
    <link rel="stylesheet" href="font/font-awesome.min.css">
    <link rel="stylesheet" href="font/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="js/swiper-master/package/css/swiper.min.css">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">


</head>
<body>
    <?php include '1546-content.php' ?>

    <script src="js/swiper-master/package/js/swiper.min.js"></script>
    <script src="js/1546.js"></script>
</body>
</html>