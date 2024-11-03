<?php

class Car
{
    public  $color;
    public  $power;
    public  $type;

public  function go(){
        echo  'GO!';
        
}
public  function wrum(){
        echo  'wrum wrum wrum!';

}

public  function stop(){
        echo  'stop!';

}
public  function __construct($color) {
  $this->color = $color;
}

}