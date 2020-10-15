<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" id="">
        <input type="submit" value="Valide" name="valide">
    </form>
    <?php
        if(isset($_POST['valide'])){
            echo '<p style="color: red;">'.$_POST['text'].'</p>';
        }
        highlight_file((__FILE__))
    ?>
    <p style="color: red;"></p>
</body>
</html>