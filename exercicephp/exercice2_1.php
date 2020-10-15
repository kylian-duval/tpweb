<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <h1> exercice2.1 A </h1>
        <?php
        $tab = array(5, 3, 5, 3, 8);
        $i;

        for ($i = 0; $i < 5; $i++) {
            echo '<span> ' . $tab[$i] . ' / </span>';
        }

        highlight_file((__FILE__))
        ?>
    </p>
    <p>
        <h1>exercice2.1 B</h1>
        
                <?php
                $tab = array(5, 3, 5, 3, 8);
                $i;
                echo '<table border="2"><tr>';
                for ($i = 0; $i < 5; $i++) {
                    echo '<td><span> ' . $tab[$i] . '</span></td>';
                }
                echo '</table border="2"></tr>';
                highlight_file((__FILE__))
                ?>
           
    </p>
</body>

</html>