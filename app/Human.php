<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 07/07/2018
 * Time: 10:50
 */

namespace molukaka;

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