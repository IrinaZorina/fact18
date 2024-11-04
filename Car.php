<?php
class Car {
    public $color;
    public $horsepower;
    public $mileage;
    public function __construct($color,$horsepower,$mileage) {
        $this->color=$color;
        $this->horsepower=$horsepower;
        $this->mileage=$mileage;
    }
    function check_mileage() {
        return "пробег". $this->mileage;
    }
    function reset_mileage() {
    $this->mileage=0;
    return $this->mileage;
    }
    function change_color($col) {
        $this->color=$col;
    }
}