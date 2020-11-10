<?php
 include("fonction/exofinal.php");
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset='utf-8'>
 <meta http-equiv='X-UA-Compatible' content='IE=edge'>
 <title>Page Title</title>
 <meta name='viewport' content='width=device-width, initial-scale=1'>
 <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
 <script src='main.js'></script>
</head>
<body>
 Je suis dans applications dans le dossier MANP
 <?php echo "je suis php";?>
 <h1>Correction TP2 exercice 4 <h1>

 <?php
 $MotDepass = "toto";

 if (afficheFormulaire($MotDepass) == "OK"){
 ?>
 <a href="http://google.com"> OK go google </a>
 <?php
 }
 ?>
</body>
</html>