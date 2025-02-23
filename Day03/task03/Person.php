<?php
abstract class Person {
    protected $name;
    protected $address;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    abstract public function toString();
}

class Student extends Person {
    private $program;
    private $year;
    private $fee;

    public function __construct($name, $address, $program, $year, $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram() {
        return $this->program;
    }

    public function setProgram($program) {
        $this->program = $program;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getFee() {
        return $this->fee;
    }

    public function setFee($fee) {
        $this->fee = $fee;
    }

    public function toString() {
        return "Student[Person[name={$this->name}, address={$this->address}], program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }
}

class Staff extends Person {
    private $school;
    private $pay;

    public function __construct($name, $address, $school, $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool() {
        return $this->school;
    }

    public function setSchool($school) {
        $this->school = $school;
    }

    public function getPay() {
        return $this->pay;
    }

    public function setPay($pay) {
        $this->pay = $pay;
    }

    public function toString() {
        return "Staff[Person[name={$this->name}, address={$this->address}], school={$this->school}, pay={$this->pay}]";
    }
}


$student = new Student("Ali", "Cairo, Egypt", "Computer Science", 3, 5000.0);
echo $student->toString() . "<br>";

$staff = new Staff("Ahmed", "Giza, Egypt", "ITI", 8000.0);
echo $staff->toString()."<br>";
?>