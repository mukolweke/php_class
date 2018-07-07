<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 06/07/2018
 * Time: 19:45
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
        echo $this->location;
    }

    public function setSkinColor($color){
        $this->skinColor = $color;
    }

    public function getSkinColor(){

        echo $this->skinColor;
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


// OUR MAIN CLASS
class Intern extends Employee {

    use Human;

    // encapsulation
    private $timeArrived;
    private $timeLeft;


    public function setTimeGetToWork($time){

        $this->timeArrived = $time;
    }
    public function getTimeGetToWork(){
        echo $this->timeArrived;
    }

    public function setTimeLeftWork($time){

        $this->timeArrived = $time;
    }

    public function getTimeLeftWork(){

        echo $this->timeLeft;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getSalary()
    {
        echo $this->salary;
    }

    public function getDepartment()
    {
        echo $this->department;
    }

    public function __toString()
    {
       return "$this->name Details";
    }
}

// our object
$intern1 = new Intern();
$intern1->setName("Michael Mukolwe");
$intern1->setTimeGetToWork('7:30AM');
$intern1->setTimeLeftWork('8:30PM');
$intern1->setPlaceOfBirth('Nakuru');
$intern1->setSkinColor('Brown Skin');
//echo($intern1->__toString());
$intern1->getSkinColor();