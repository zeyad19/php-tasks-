<?php


$data = $_POST;

    echo "<h2>Form Data:</h2>"
    echo "<strong>First Name:</strong> " .$data["first-name"]. "<br>";
    echo "<strong>Last Name:</strong> "  .$data["last-name"]. "<br>";
    echo "<strong>Address:</strong> "    .$data["address"]. "<br>";
    echo "<strong>Country:</strong> " . $data["country"]. "<br>";
    echo "<strong>Gender:</strong> " .  $data["gender"] . "<br>";
    echo "<strong>Skills:</strong> " . $data["skills"]. "<br>";
    echo "<strong>Username:</strong> " .$data["username"]. "<br>";
    echo "<strong>Password:</strong> " . $data["password"] ."<br>";
    echo "<strong>Department:</strong> " . $data["department"] . "<br>";
    echo "<strong>Entered CAPTCHA Code:</strong> " . $data["captcha"]. "<br>";
    echo "<br><a href='index.html'>Go Back</a>";

?>

