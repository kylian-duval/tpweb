<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "fonction/fonction.php"  ?>
</head>

<body>
<?php
    infoperso('louis', 'lacroix' ,25);
    echo '<div><input type="button" value="Retour" onclick="history.back()"></div>';
    highlight_file((__FILE__))
    ?>

</body>

</html>