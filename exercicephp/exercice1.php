<!DOCTYPE html>
<html lang="fr">

<head>
<link rel="stylesheet" href="exercice1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $NombreAleatoire = rand(0, 100);

    if($NombreAleatoire%2 == 1)
    {
        echo '<div class=impaire><span>'.$NombreAleatoire.' impaire</span></div>';
    }
    else
    {
        echo '<div class=paire><span>'.$NombreAleatoire.' paire</span></div>';
    }
    


    highlight_file((__FILE__))
    ?>
</body>

</html>