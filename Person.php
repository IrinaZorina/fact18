<?php
/*
class Person extends People
{

  public  $surname;

   public  function __construct($name, $age, $surname)
      {
        parent::__construct($name, $age);
        $this->surname = $surname;
      }
  public  function  go(){
    return  parent::go() . "surname {this->surname}";
  }
}