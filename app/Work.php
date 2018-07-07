<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 07/07/2018
 * Time: 10:50
 */
namespace molukaka;

//interface class
interface Work{

    public function setTimeGetToWork($time);
    public function setTimeLeftWork($time);
    public function getTimeGetToWork();
    public function getTimeLeftWork();

}