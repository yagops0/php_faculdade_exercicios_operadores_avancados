<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Avançados</title>
</head>
<body>
    <h1>EXERCÍCIOS OPERADORES AVANÇADOS</h1>
    <?php
        //! QUESTÃO 1
        $a = 0; $b = 0; $c = 0;
        $a = $c = 5;
        $b = ++$a;
        $a = -$a;
        $b++;
        $a = $c--; // $a = $c = $c - 1;

        echo "<h2>EXERCÍCIO 7</h2>";
        echo "<br>";
        echo "<b><h3>QUESTÃO 1: </h3><br>";
        echo "<p>\$a = $a; \$b = $b; \$c = $c</p><br>";
        
        //!QUESTÃO 02
        $n1 = 0;
        $n2 = 0;
        $n3 = 0;
        $n4 = 0;
        $n1 = 10;
        $n3 = $n2 = $n1;
        $n1--;
        $n2 = ++$n3;
        $n2 *= 2;
        echo "<b><h3>QUESTÃO 2: </h3><br>";
        echo "<p>\$n1 = $n1; \$n2 = $n2; \$n3 = $n3; \$n4 = $n4</p><br>";
        
        //!QUESTÃO 03
        $a = 0; $b = 0; $c = 0; $d = 0;
        $a = 2;
        $b *= $a;
        $c = $d = $a; // $a = 2
        $c = $a--; //$c = $a = $a - 1
        $b = ++$a;
        echo "<b><h3>QUESTÃO 3: </h3><br>";
        echo "<p>\$a = $a; \$b = $b; \$c = $c; \$d = $d</p><br>";

        //!QUESTÃO 04
        $x = 0; $y = 0; $z = 0;
        $x = 12;
        $x--;
        $x = -$x;
        $y = $z = $x;
        $x = ++$x;
        $y = $z--;
        echo "<b><h3>QUESTÃO 4: </h3><br>";
        echo "<p>\$x = $x; \$y = $y; \$z = $z</p><br>";
        
        //!QUESTÃO 05
        $x = 0; $y = 0; $z = 0;
        // echo "\$x = $x<br>";
        // echo "\$y = $y<br>";
        // echo "\$z = $z<br>";
        $x = $y = 10;
        // echo "\$x = $x<br>";
        // echo "\$y = $y<br>";
        // echo "\$z = $z<br>";
        $x--;
        // echo "\$x = $x<br>";
        // echo "\$y = $y<br>";
        // echo "\$z = $z<br>";
        $y = -$x;
        // echo "\$x = $x<br>";
        // echo "\$y = $y<br>";
        // echo "\$z = $z<br>";
        $y = $x + $y + (--$z) + 4;
        // echo "\$x = $x<br>";
        // echo "\$y = $y<br>";
        // echo "\$z = $z<br>";
        $x = ++$x;
        // echo "\$x = $x<br>";
        // echo "\$y = $y<br>";
        // echo "\$z = $z<br>";
        echo "<b><h3>QUESTÃO 5: </h3><br>";
        echo "<p>\$x = $x; \$y = $y; \$z = $z</p><br>";

        //!QUESTÃO 06
        $a = 0; $b = 0; $c = 0; $d = 0;
        $a = 2;
        $a *= 2;
        $b += $a;
        $c = -$b;
        $d = 0;
        //echo "\$c = $c";
        $a = $b + $c++ * $d + ($a--) + $a;
        //echo "\$c = $c";
        echo "<b><h3>QUESTÃO 6: </h3><br>";
        echo "<p>\$a = $a; \$b = $b; \$c = $c; \$d = $d</p><br>";

    ?>
</body>
</html>