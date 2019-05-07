<?php

namespace App\Entities\Attributes;
include "CustardPie.php";

class SaltedHoneyPie extends Pie implements CustardPie
{
   
    public $saltedHoneyPie;

    public function setCustardType($newCustardType)
    {
        $this->$saltedHoneyPie = $newCustardType;
    }

    public function getFruitType()
    {
        return $this->$saltedHoneyPie . " is a custard pie";
    }

}