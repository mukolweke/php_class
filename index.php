<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 06/07/2018
 * Time: 19:45
 */

namespace molukaka;

require 'vendor/autoload.php';

// OUR MAIN CLASS
class Intern extends Employee implements Work {

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
        echo $this->name."<br>";
    }

    public function getSalary()
    {
        echo $this->salary."<br>";
    }

    public function getDepartment()
    {
        echo $this->department."<br>";
    }

    public function __toString()
    {
       return "$this->name Details";
    }
}

// our object
$intern1 = new Intern();
$intern1->setName("Michael Mukolwe");
$intern1->setDepartment('Cytonn Technologies');
$intern1->setSalary('20,000 KSH');
$intern1->setTimeGetToWork('7:30AM');
$intern1->setTimeLeftWork('8:30PM');
$intern1->setPlaceOfBirth('Nakuru');
$intern1->setSkinColor('Brown Skin');

$intern2 = new Intern();
$intern2->setName("James Warner");
$intern2->setDepartment('Cytonn Distributions');
$intern2->setSalary('23,000 KSH');
$intern2->setTimeGetToWork('7:30AM');
$intern2->setTimeLeftWork('8:30PM');
$intern2->setPlaceOfBirth('Nairobi');
$intern2->setSkinColor('Pale Brown Skin');

echo 'Interns Details: <br><br>';
echo "Intern 1::<br>";
$intern1->getName();
$intern1->getDepartment();
$intern1->getSalary();
echo '<br>';
echo "Description::<br>";
$intern1->getSkinColor();
$intern1->getPlaceOfBirth();
$intern1->getTimeGetToWork();
$intern1->getTimeLeftWork();
echo '<br><hr>';
echo 'Intern 2::<br>';
$intern2->getName();
$intern2->getDepartment();
$intern2->getSalary();
echo '<br>';
echo "Description::<br>";
$intern2->getSkinColor();
$intern2->getPlaceOfBirth();
$intern2->getTimeGetToWork();
$intern2->getTimeLeftWork();