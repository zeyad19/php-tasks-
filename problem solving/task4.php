<?php

    $n =(int)$_POST['n'];
    $m =(int)$_POST['m'];

    $last_n = $n % 10;
    $last_m = $m % 10;
    $sum = $last_n + $last_m;

    echo "Summation of last digits = $sum<br>";

?>

<form method="post">
    <label for="n">Enter first number </label>
    <input type="number" name="n" required>
    <br>
    <label for="m">Enter second number </label>
    <input type="number" name="m" required>
    <br>
    <input type="submit" value="Calculate">
</form>