<?php

namespace App\Entities\Attributes;


class CustardPie extends Pie 
{
    // public $CustardPie;
    // public function __contruct($type)
    // {
    //     $this->type('Custard Pie');
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

