<?php

namespace App\Entities\Attributes;

class FruitPie extends Pie 
{
    public function setPieFlavor($newFlavor)
    {
        $this->flavor = $newFlavor;
    }
    public function getPieFlavor()
    {
        return " Your flavor is " . $this->flavor;
    }    
    public function setType($newType)
    {
        $this->type =$newType;
    }
    public function getType()
    {
        return " You've selected " . $this->type;
    }
    // public $FruitPie;
    // public function __contruct()
    // {
    //     return "You've selected " . $this->flavor . "which is a " . $this->type;
    // }

}