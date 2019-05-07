<?php

namespace App\Entities\Attributes;

class CreamPie extends Pie 
{
    public $CreamPie;
    public function __contruct($type)
    {
        $this->type('Cream Pie');
    }

}

