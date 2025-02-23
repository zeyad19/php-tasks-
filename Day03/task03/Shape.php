<?php

abstract class Shape {
    protected string $color;
    protected bool $filled;

    public function __construct(string $color = "red", bool $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    abstract public function getArea(): float;
    abstract public function getPerimeter(): float;

    public function __toString(): string {
        return "Shape[color={$this->color}, filled=" . ($this->filled ? "true" : "false") . "]";
    }
}


class Circle extends Shape {
    private float $radius;

    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "Circle[" . parent::__toString() . ", radius={$this->radius}]";
    }
}


class Rectangle extends Shape {
    protected float $width;
    protected float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[" . parent::__toString() . ", width={$this->width}, length={$this->length}]";
    }
}


class Square extends Rectangle {
    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->width;
    }

    public function setSide(float $side): void {
        $this->width = $side;
        $this->length = $side;
    }

    public function __toString(): string {
        return "Square[" . parent::__toString() . "]";
    }
}


$circle = new Circle(5.0, "blue", true);
echo $circle . "<br>";
echo "Circle Area: " . $circle->getArea() . "<br>";
echo "Circle Perimeter: " . $circle->getPerimeter() . "<br><br>";

$rectangle = new Rectangle(3.0, 4.0, "green", false);
echo $rectangle . "<br>";
echo "Rectangle Area: " . $rectangle->getArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "<br><br>";

$square = new Square(2.0, "yellow", true);
echo $square . "<br>";
echo "Square Area: " . $square->getArea() . "<br>";
echo "Square Perimeter: " . $square->getPerimeter()."<br>";
?>