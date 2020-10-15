<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
    if(isset($_POST['Deconnexion'])){
        if(isset($_SESSION["test"])){
            session_destroy();
          echo '<script> window.location.reload() </script>';
        }
        }
    
    ?>

    <form action="" method="post">
        <input type="text" name="text" id="">
        <input type="submit" value="Valide" name="valide">
        <input type="submit" value="Deconnexion" name="deconnexion " href="javascript:window.location.reload()">
    </form>
    <?php
        if(isset($_POST['valide'])){
            $_SESSION["test"]=$_POST["text"];
            echo '<p style="color: red;">'.$_SESSION["test"].'</p>';
        }elseif(isset($_SESSION["test"])){
            echo '<p style="color: red;">'.$_SESSION["test"].'</p>';
        }


        highlight_file((__FILE__))
    ?>
    <p style="color: red;"></p>
</body>
</html>