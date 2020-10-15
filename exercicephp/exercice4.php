
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $A = 2;
        $B = 4;
        $C = 2;
        $result = pow($B,2)-4*$A*$C;
        $resultequa = -$B/2*$A;

        echo '<span>'.'l équation est sous la forme:'." $A"."x²+"."$B"."x+"."$C".'</span>';

        echo '<p> la delta et :'."$result".'</p>';
        echo '<span>'.'le résulta de l équation:'." $A"."x²+"."$B"."x+"."$C".'='." $resultequa".'</span>';
        
        highlight_file((__FILE__))
       
?>
</body>
</html>

