<?php

namespace App\Entities\Attributes;


abstract class Pie 
{
    public $type;
    public $flavor;

    public function __construct ($type, $flavor)
    {
        $this->type = $type;
        $this->flavor = $flavor;
    }
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

}

