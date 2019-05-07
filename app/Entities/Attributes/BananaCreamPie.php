<?php
namespace App\Entities\Attributes;

class BananaCreamPie implements CreamPie{
   
    public $bananaCreamPie = 'Banana Cream Pie';

    public function setCreamType($bananaCreamPie){


        return $bananaCreamPie;
    }

}