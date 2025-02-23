<?php
require_once 'Circle.php';
require_once 'Cylinder.php';

$circle = new Circle(2.0, "blue");

echo $circle . "<br>"; // toString()
echo "Area: " . $circle->getArea() . "<br>";
$circle->setRadius(3.0);
$circle->setColor("green");
echo "New Radius: " . $circle->getRadius() . "<br>";
echo "New Color: " . $circle->getColor() . "<br>";

$cylinder = new Cylinder(2.0, 5.0, "red");

echo $cylinder . "<br>"; // toString()
echo "Volume: " . $cylinder->getVolume() . "<br>";
$cylinder->setRadius(3.0);
$cylinder->setHeight(10.0);
echo "New Radius: " . $cylinder->getRadius() . "<br>";
echo "New Height: " . $cylinder->getHeight() . "<br>";
?>  