<?php 

require_once "lib/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new compiler();

$result = $scss->compile('@import"sass/1561.scss"');

file_put_contents('css/1561.css',$result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1561</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/1561.css">
    <link rel="stylesheet" href="font/font-awesome.min.css">
    <link rel="stylesheet" href="font/fontawesome-webfont.ttf">
    
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
   
</head>
<body>
    
    <?php include '1561-content.php'; ?>

</body>
</html>