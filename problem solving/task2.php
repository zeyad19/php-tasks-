
<form method="post">
    <label for="x">Enter num 1</label>
    <input type="number" name="x" required>
    <br>
    <label for="y">Enter num 2</label>
    <input type="number" name="y" required>
    <br>
    <input type="submit" value="Calculate">
</form>
<?php
    $x = (int)$_POST['x'];
    $y = (int)$_POST['y'];

    $sum = $x + $y;
    $mul = $x * $y;
    $sub = $x - $y;

    echo "X + Y = $sum<br>";
    echo "X * Y = $mul<br>";
    echo "X - Y = $sub<br>";

?>

