<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <h1 align=center> (A) </h1>
        <?php
        $i = 0;
        $j = 0;
        $tab["Nom"][0] = 'duval';
        $tab["prenom"][0] = 'kylian';
        $tab["MDP"][0] = '0000';
        $tab["Nom"][1] = 'duval';
        $tab["prenom"][1] = 'lucas';
        $tab["MDP"][1] = '1234';
        $tab["Nom"][2] = 'duval';
        $tab["prenom"][2] = 'gaelle';
        $tab["MDP"][2] = '1111';

        for ($i = 0; $i < 3; $i++) {
            echo '<div><span>' . $tab['Nom'][$i] . '</span></div>';
            echo '<div><span>' . $tab['prenom'][$i] . '</span></div>';
            echo '<div><span>' . $tab['MDP'][$i] . '</span></div>';
        }


        highlight_file((__FILE__))
        ?>
    </p>
    <p>
        <h1 align=center> (B) </h1>
        <?php
        $i = 0;
        $j = 0;
        $tab["Nom"][0] = 'duval';
        $tab["prenom"][0] = 'kylian';
        $tab["MDP"][0] = '0000';
        $tab["Nom"][1] = 'duval';
        $tab["prenom"][1] = 'lucas';
        $tab["MDP"][1] = '0000';
        $tab["Nom"][2] = 'duval';
        $tab["prenom"][2] = 'gaelle';
        $tab["MDP"][2] = '0000';
        echo '<table border="2"><tr><td>Nom</td><td>renom</td><td>MDP</td></tr>';
        for ($i = 0; $i < 3; $i++) {
            echo '<tr>';
            echo '<td><span>' . $tab['Nom'][$i] . '</span></td>';
            echo '<td><span>' . $tab['prenom'][$i] . '</span></td>';
            echo '<td><span>' . $tab['MDP'][$i] . '</span></td>';
            echo '</tr>';
        }

        echo '</table>';
        highlight_file((__FILE__))
        ?>
    </p>



</body>

</html>