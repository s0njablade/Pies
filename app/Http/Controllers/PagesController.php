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

        $bananaCreamPie->setType('cream pie');
        $bananaCreamPie->setPieFlavor('Banana Cream');
        $coconutCreamPie = new CreamPie('Cream Pie', 'Coconut Cream Pie');
        $coconutCreamPie->setType('cream pie');
        $coconutCreamPie->setPieFlavor('Coconut Cream Pie');

        $bananaCreamPie = $bananaCreamPie->getPieFlavor() . $bananaCreamPie->getType();
        $coconutCreamPie = $coconutCreamPie->getPieFlavor() . $coconutCreamPie->getType();

        return view('pages.creamPies')->with(['bananaCreamPie'=> $bananaCreamPie, 'coconutCreamPie'=> $coconutCreamPie]);
    }

    public function fruitPies()

    {
        $strawberryRhubarb = new FruitPie('Fruit Pie','Strawberry Rhubarb');
        $strawberryRhubarb->setType('fruit pie');
        $strawberryRhubarb->setPieFlavor('Strawberry Rhubarb');
        $blueberryLavender = new FruitPie('Fruit Pie','Blueberry Lavendar');
        $blueberryLavender->setType('fruit pie');
        $blueberryLavender->setPieFlavor('Blueberry Lavendar');


        $strawberryRhubarb = $strawberryRhubarb->getPieFlavor() . $strawberryRhubarb->getType();
        $blueberryLavender =  $blueberryLavender->getPieFlavor() . $blueberryLavender->getType();

        return view('pages.fruitPies')->with(['strawberryRhubarb' => $strawberryRhubarb, 'blueberryLavender'=> $blueberryLavender]);
    }

    public function custardPies()
    {
        $saltedHoney = new CustardPie('Custard Pie', 'Salted Honey');
        $saltedHoney->setType('custard pie');
        $saltedHoney->setPieFlavor('Salted Honey');
        $chamomileLemon= new CustardPie('Custard Pie', 'Chamomile Lemon');
        $chamomileLemon->setType('custard pie');
        $chamomileLemon->setPieFlavor('Chamomile Lemon');

        $saltedHoney= $saltedHoney->getPieFlavor() . $saltedHoney->getType();
        $chamomileLemon = $chamomileLemon->getPieFlavor() . $chamomileLemon->getType();
        return view('pages.custardPies')->with(['saltedHoney' => $saltedHoney, 'chamomileLemon' => $chamomileLemon]);
    }
}
