<?php
require_once 'Circle.php';

class Cylinder extends Circle {
    // Private property
    private $height;

    // Constructors
    public function __construct($radius = 1.0, $height = 1.0, $color = "red") {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    // Getters and Setters
    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    // Method to calculate volume
    public function getVolume() {
        return $this->getArea() * $this->height;
    }

    // toString method
    public function __toString() {
        return "Cylinder[" . parent::__toString() . ", height={$this->height}]";
    }
}
?>