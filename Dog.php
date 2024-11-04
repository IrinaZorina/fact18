<?php
include "Animall.php";
class Dog extends Animall {
    public $breed;
    public function __construct($color,$age,$breed) {
        $this->color=$color;
        $this->age=$age;
        $this->breed=$breed;
    }
    public function gav() {
        echo "гав";
    }
}