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
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/fontawesome.css">
    <link rel="stylesheet" href="swiper-master/package/css/swiper.min.css">
    <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="swiper-master/package/js/swiper.min.js"></script>
    <script src="js/1546.js"></script>
</head>
<body>
    <?php include '1546-content.php' ?>
</body>
</html>