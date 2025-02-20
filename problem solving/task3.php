<?php

    $a = (int)$_POST['a'] ;
    $b = (int)$_POST['b'] ;
    $c = (int)$_POST['c'] ;
    $d = (int)$_POST['d'] ;


    $x = ($a * $b) - ($c * $d);

    echo "Difference = $x<br>";

?>

<form method="post">
    <label for="a">Enter A</label>
    <input type="number" name="a" required>
    <br>
    <label for="b">Enter B</label>
    <input type="number" name="b" required>
    <br>
    <label for="c">Enter C</label>
    <input type="number" name="c" required>
    <br>
    <label for="d">Enter D</label>
    <input type="number" name="d" required>
    <br>
    <input type="submit" value="Calculate">
</form>
