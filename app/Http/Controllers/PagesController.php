<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Attributes\Pie;
use App\Entities\Attributes\FruitPie;
use App\Entities\Attributes\CreamPie;
use App\Entities\Attributes\CustardPie;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about() 
    {
        return view('pages.about');
    }

    public function pies()
    {

        return view('pages.pies');
    }

    public function creamPies()
    {
        $bananaCreamPie = new CreamPie('Cream Pie', 'Banana Cream Pie' );
        $coconutCreamPie = new CreamPie('Cream Pie', 'Coconut Cream Pie');

        return view('pages.creamPies')->with(['bananaCreamPie' => $bananaCreamPie, 'coconutCreamPie' => $coconutCreamPie]);
    }

    public function fruitPies()
    {
        $strawberryRhubarb = new FruitPie('Fruit Pie', 'Strawberry Rhubarb');
        // $strawberryRhubarb->type('Fruit Pie');
        // $strawberryRhubarb->flavor('StrawberryRhubarb');
        $blueberryLavender = new FruitPie('Fruit Pie', 'Blueberry Lavendar');
        // $blueberryLavender->setType('Fruit Pie');
        // $blueberryLavender->setPieFlavor('Blueberry Lavendar');


        // $fruitPies = $strawberryRhubarb->getPieFlavor() . $blueberryLavender->getPieFlavor();

        return view('pages.fruitPies')->with(['strawberryRhubarb' => $strawberryRhubarb, 'blueberryLavendar' => $blueberryLavender]);
    }

    public function custardPies()
    {
        $saltedHoney = new CustardPie('Custard Pie', 'Salted Honey');
        return view('pages.custardPies')->with('saltedHoney', $saltedHoney);
    }
}
