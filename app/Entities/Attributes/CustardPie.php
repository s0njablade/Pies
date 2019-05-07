<?php

namespace App\Entities\Attributes;


class CustardPie extends Pie 
{
    public $CustardPie;
    public function __contruct($type)
    {
        $this->type('Custard Pie');
    }

}

