<?php

class People 
{
      public  $name;
      public  $age = 44;

      public  function __construct($name, $age)
      {
        $this->name = $name;
        $this->age = $age;
      }

      public  function go(){
        return "name {$this->name}";
        
      }


public  function addAge()
{
  return ++$this->age;
}

}