<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 07/07/2018
 * Time: 08:55
 */
namespace molukaka;

//interface class
interface Work{

    public function setTimeGetToWork($time);
    public function setTimeLeftWork($time);
    public function getTimeGetToWork();
    public function getTimeLeftWork();

}


// trait
trait Human{

    private $skinColor;
    private $location;

    public function setPlaceOfBirth($location){
        $this->location = $location;
    }

    function getPlaceOfBirth(){
        echo $this->location."<br>";
    }

    public function setSkinColor($color){
        $this->skinColor = $color;
    }

    public function getSkinColor(){

        echo $this->skinColor."<br>";
    }
}

//abstract class and methods; inheritance and implementations
abstract class Employee implements Work {

    public $name;
    public $department;
    public $salary;

    abstract function setName($name);
    abstract function getName();
    abstract function setDepartment($department);
    abstract function getDepartment();
    abstract function setSalary($salary);
    abstract function getSalary();
    public function __toString(){
        echo 'I am an Employee';
    }

}

