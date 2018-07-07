<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 07/07/2018
 * Time: 10:48
 */

namespace molukaka;

abstract class Employee
{

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