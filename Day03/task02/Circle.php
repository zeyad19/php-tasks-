<?php
class Circle {
    // Private properties
    private $radius;
    private $color;

    // Constructors
    public function __construct($radius = 1.0, $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }

    // Getters and Setters
    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // Method to calculate area
    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    // toString method
    public function __toString() {
        return "Circle[radius={$this->radius}, color={$this->color}]";
    }
}
?>