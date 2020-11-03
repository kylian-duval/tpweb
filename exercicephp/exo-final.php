<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php session_start();
    $nom = 'Julien';
    $password = '1234';

    if (isset($_POST['valide'])) {
        if ($_POST['login'] == $nom) {
            if ($_POST['mdp'] == $password) {
                $_SESSION['login'] = $_POST['login'];
            } else echo 'le mot de passe est incorrect. ';
        } else echo 'le login est inconnu. ';
    }

    if(isset($_SESSION['login'])) {
        echo 'bienvenue';
        echo '<form action="" method="post"><input type="submit" value="Deconnexion" name="deco"></form>';

    }else{

        echo '<form action="" method="post">
        <input type="text" name="login" placeholder="entrée le login">
        <input type="text" name="mdp"placeholder="Enter le mots de passe">
        <input type="submit" value="conection" name="valide" >
        </form>';


    }
    
    if(isset($_POST['deco'])){   
        session_destroy();
        echo '<meta http-equiv="refresh" content="0">';
        
    }

    highlight_file((__FILE__))
    ?>
</body>
</html>