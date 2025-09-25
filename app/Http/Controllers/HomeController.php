<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\ProductGreenbean;
use App\Models\ProductRoastery;
use App\Models\CoffeeShop;
use App\Models\CoffeeOutlet;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Sliders::count();
        $greenbean = ProductGreenbean::count();
        $roastery = ProductRoastery::count();
        $coffeeshop = CoffeeShop::count();
        $coffeeoutlet = CoffeeOutlet::count();
        $article = Article::count();
        return view('home', compact('sliders', 'greenbean', 'roastery', 'coffeeshop', 'coffeeoutlet', 'article'));
    }
}
