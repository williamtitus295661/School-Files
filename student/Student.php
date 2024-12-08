<?php
class Student {
    private $name;
    private $id;
    private $gpa;

    public function __construct($name, $id, $gpa) {
        $this->name = $name;
        $this->id = $id;
        $this->gpa = $gpa;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getGpa() {
        return $this->gpa;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setGpa($gpa) {
        $this->gpa = $gpa;
    }

    public function getLetterGrade() {
        if ($this->gpa >= 3.5) {
            return 'A';
        } elseif ($this->gpa >= 3.0) {
            return 'B';
        } elseif ($this->gpa >= 2.0) {
            return 'C';
        } elseif ($this->gpa >= 1.0) {
            return 'D';
        } else {
            return 'F';
        }
    }
}
?>
