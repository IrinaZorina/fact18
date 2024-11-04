<?php
class Animall {
    public $color;
    public $age;
    public function __construct($color,$age) {
        $this->color=$color;
        $this->age=$age;
    }
    function color() {
        return $this->color;
    }

    function change_color($col) {
        $this->color=$col;
    }
}

