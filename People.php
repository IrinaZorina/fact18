<?php

class People{}
interface A
{
    public function hello();
    public function bye ();
}
class B implements A{
    public function hello(){
        echo "Hello, user";
    }
    public function bye (){
        echo "Bye user";
    }
}
class C implements A{
    public function hello(){
        echo "Hello, admin";
    }
    public function bye (){
        echo "Bye admin";
}}