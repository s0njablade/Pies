<?php

namespace App\Entities\Attributes;

class FruitPie extends Pie 
{
    // public $FruitPie;
    // public function __construct()
    // {
    //     $this->setType('Fruit Pie');
    //     $this->setPieFlavor();
    // }
    public function setPieFlavor($newFlavor)
    {
        $this->flavor = $newFlavor;
    }
    public function getPieFlavor()
    {
        return " Selected flavor: " . $this->flavor;
    }    
    public function setType($newType)
    {
        $this->type =$newType;
    }
    public function getType()
    {
        return " which is a  " . $this->type;
    }


}