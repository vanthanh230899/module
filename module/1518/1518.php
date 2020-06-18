<?php 

require_once "lib/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new compiler();

$result = $scss->compile('@import"sass/1518.scss"');

file_put_contents('css/1518.css',$result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1518</title>
    <link rel="stylesheet" href="css/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/1518.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/sticky.js"></script>
    <script src="js/1518.js"></script>
</head>
<body>
    <?php include '1518-content.php'; ?>
</body>
</html>
