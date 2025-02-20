 <!--
 1. Given a name S. Print "Hello, (name)" without parentheses
 -->
<form method="post">
    <input type="text" name="name" placeholder="name">
    <button type="submit">submit</button>
</form>




<?php

$name = $_POST;
echo "Hello, ".$name["name"];
?>
