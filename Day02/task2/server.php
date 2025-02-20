
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th,td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th{
            background-color: #007bff;
            color: white;

        }
</style>


<?php
$user = $_POST;

function register($user){
    echo "<table border=2>";
    echo "<tr>";
    $allowed_keys = ["username","email", "password"];
    foreach($user as $key => $value){
        if (in_array($key, $allowed_keys)) { 
        echo "<th>$key</th>";
        }
    };
    echo "</tr>";
    echo "<tr>";
    foreach($user as $key => $value){
        if (in_array($key, $allowed_keys)) { 
    echo "<td>$value</td>";
        }
    };
    echo "</tr>";
    echo "</table>";
}
function login($user)
{
    echo"<table border=2>";
    echo"<tr>";
    $allowed_keys = ["username", "password"];
    foreach($user as $key => $value){
        if (in_array($key, $allowed_keys)) { 
            echo "<th>$key</th>";
        }
        
    };
    echo "</tr>";
    echo "<tr>";
    foreach($user as $key => $value){
        if (in_array($key, $allowed_keys)) { 
            echo "<td>$value</td>";   
        }

    };
    echo "</tr>";
    echo "</table>";
}
// var_dump($user);
if($user["action"]==="register"){
    
    register($user);
}
if($user["action"]=== "login"){
    login($user);
} 
?>
