<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <input type="text" name="login">
        <input type="text" name="mdp">
        <input type="submit" value="conection" name="valide">
        <input type="submit" value="Deconnexion" name="deco">
    <?php session_start();
    $nom = 'Julien';
    $password = '1234';

    if(isset($_SESSION['login'])) {
        echo 'bienvenue';
    }else
    {
        

    if (isset($_POST['valide'])) {
        if ($_POST['login'] == $nom) {
            if ($_POST['mdp'] == $password) {
                $_SESSION['login'] = $_POST['login'];
            } else echo 'le mot de passe est incorrect. ';
        } else echo 'le login est inconnu. ';
    }

    
    if(isset($_POST['deco'])){   
        session_destroy();
        echo '<p><span> je suis déco </span></p>';
    }

    highlight_file((__FILE__))
    ?>
</body>

</html>