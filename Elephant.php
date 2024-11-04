
<?php
include "Animall.php";
class Elephant extends Animall {
    public $size;
    public function __construct($color,$age,$size) {
        $this->color=$color;
        $this->age=$age;
        $this->size=$size;
    }
    public function getSize() {
        return $this->size;
    }
}