<?php


        $n = (int)$_POST['number'];
        
        $first_digit = (int)($n / 10);
        $second_digit = $n % 10;
        
        
        if ($first_digit != 0 && $second_digit % $first_digit == 0 || $second_digit != 0 && $first_digit % $second_digit == 0) {
            echo "YES Lucky<br>";
        } else {
            echo "NO not Lucky<br>";
        }
    

?>

<form method="post">
    <label for="number">Enter a two-digit number </label>
    <input type="number" name="number" min="10" max="99" required>
    <br>
    <input type="submit" value="Check">
</form>
