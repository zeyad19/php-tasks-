<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
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
        ul{
            list-style-type : none;
        }
    </style>
</head>
<body>

<?php
$user = [
    "id" => 1,
    "name" => "mohamed",
    "email" => "moo@gmail.com",
    "age" => 25,
    "color" => "red"
];

echo "<h2>Elements before deletion</h2>";
echo "<ul>";
foreach ($user as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
echo "</ul>";

unset($user['color']);

echo "<h2>Elements after deletion</h2>";
echo "<ul>";
foreach ($user as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
echo "</ul>";

$users = [
    ["id"=> 1, "name"=> "ahmed", "email"=> "ahmed@gmail.com", "color"=>"red"],
    ["id"=> 2, "name"=> "ali", "email"=> "ali@gmail.com", "color"=>"green"],
    ["id"=> 3, "name"=> "sami", "email"=> "sami@gmail.com", "color"=>"blue"],
    ["id"=> 4, "name"=> "hani", "email"=> "hani@gmail.com", "color"=>"yellow"],
    ["id"=> 5, "name"=> "omar", "email"=> "omar@gmail.com", "color"=>"black"]
];

echo "<h2>Users Table</h2>";
echo "<table>";
echo "<tr>";
foreach ($users[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
