<?php


        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $k = (int)$_POST['k'];

        if ($k == 0) {
            echo " cannot divide be zero.<br>";
        } else {
            if ($a % $k == 0 && $b % $k == 0) {
                echo "Both<br>";
            } elseif ($a % $k == 0) {
                echo "Memo<br>";
            } elseif ($b % $k == 0) {
                echo "Momo<br>";
            } else {
                echo "No One<br>";
            }
        }

?>

<form method="post">
    <label for="a">Enter first number (a):</label>
    <input type="number" name="a" required>
    <br>
    <label for="b">Enter second number (b):</label>
    <input type="number" name="b" required>
    <br>
    <label for="k">Enter divisor (k):</label>
    <input type="number" name="k" required>
    <br>
    <input type="submit" value="Check">
</form>
