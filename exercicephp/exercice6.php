<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="text" id="">
        <input type="submit" value="Valide" name="valide">
    </form>
    <?php
    if (isset($_GET['valide'])) {
        echo '<p style="color: #9400D3;">' . $_GET['text'] . '</p>';
    }
    highlight_file((__FILE__))
    ?>
</body>

</html>