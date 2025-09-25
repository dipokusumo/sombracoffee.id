<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Sliders;
use App\Models\ProductGreenbean;
use App\Models\ProductRoastery;
use App\Models\CoffeeShop;
use App\Models\CoffeeOutlet;
use App\Models\Article;

use App\Models\DescGreenBean;
use App\Models\DescRoastery;
use App\Models\SlidersGreenBean;
use App\Models\SlidersRoastery;

use App\Models\Contact;


class C_Sombra extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function searchp()
    {
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $productr = ProductRoastery::where('pname', 'like',"%". $cari . "%")->get();
        $productg = ProductGreenbean::where('pname', 'like',"%". $cari . "%")->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.searchp', compact('productr', 'productg', 'footerarticle'));
        }
    }

    public function searchp_eng()
    {
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $productr = ProductRoastery::where('pname_eng', 'like',"%". $cari . "%")->get();
        $productg = ProductGreenbean::where('pname_eng', 'like',"%". $cari . "%")->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.searchp', compact('productr', 'productg', 'footerarticle'));
        }
    }

    // Indonesia Version
    public function sombra()
    {
        $sliders = Sliders::orderby('id_sliders', 'desc')->get()->first();
        $productr = ProductRoastery::limit(3)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        $firstarticle = Article::orderby('id_article', 'desc')->get()->first();
        return view('sombra.IND.sombra', compact('sliders', 'productr', 'footerarticle', 'firstarticle'));
    }

    public function aboutus()
    {
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.aboutus', compact('footerarticle'));
    }

    public function product()
    {
        $productg = ProductGreenbean::all();
        $productr = ProductRoastery::all();
        $descgb = DescGreenBean::orderby('id', 'desc')->get()->first();
        $descr = DescRoastery::orderby('id', 'desc')->get()->first();
        $slidersgb = SlidersGreenBean::all();
        $slidersr = SlidersRoastery::all();

        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.product', compact('productg', 'productr', 'descgb', 'descr', 'slidersgb', 'slidersr', 'footerarticle'));
    }

    public function product_greenbean($slug)
    {
        $greenbean = ProductGreenbean::where('pname_slug', $slug)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.product_greenbean', compact('greenbean', 'footerarticle'));
    }

    public function product_roastery($slug)
    {
        $roastery = ProductRoastery::where('pname_slug', $slug)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.product_roastery', compact('roastery', 'footerarticle'));
    }

    public function coffee()
    {
        $coffeeshop = CoffeeShop::all();
        $coffeeoutlet = CoffeeOutlet::all();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.coffee', compact('coffeeshop', 'coffeeoutlet', 'footerarticle'));
    }

    public function article()
    {
        $article = Article::all();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.article', compact('article', 'footerarticle'));
    }

    public function article_detail($slug)
    {
        $article = Article::where('judul_slug', $slug)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.article_detail', compact('article', 'footerarticle'));
    }

    public function contactus()
    {
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.contactus', compact('footerarticle'));
    }

    public function faq()
    {
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.IND.faq', compact('footerarticle'));
    }

    // English Version
    public function sombra_en()
    {
        $sliders = Sliders::orderby('id_sliders', 'desc')->get()->first();
        $productr = ProductRoastery::limit(3)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        $firstarticle = Article::orderby('id_article', 'desc')->get()->first();
        return view('sombra.ENG.sombra', compact('sliders', 'productr', 'footerarticle', 'firstarticle'));
    }

    public function aboutus_en()
    {
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.aboutus', compact('footerarticle'));
    }

    public function product_en()
    {
        $productg = ProductGreenbean::all();
        $productr = ProductRoastery::all();
        $descgb = DescGreenBean::orderby('id', 'desc')->get()->first();
        $descr = DescRoastery::orderby('id', 'desc')->get()->first();
        $slidersgb = SlidersGreenBean::all();
        $slidersr = SlidersRoastery::all();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.product', compact('productg', 'productr', 'descgb', 'descr', 'slidersgb', 'slidersr', 'footerarticle'));
    }

    public function product_greenbean_en($slug)
    {
        $greenbean = ProductGreenbean::where('pname_eng_slug', $slug)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.product_greenbean', compact('greenbean', 'footerarticle'));
    }

    public function product_roastery_en($slug)
    {
        $roastery = ProductRoastery::where('pname_eng_slug', $slug)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.product_roastery', compact('roastery', 'footerarticle'));
    }

    public function coffee_en()
    {
        $coffeeshop = CoffeeShop::all();
        $coffeeoutlet = CoffeeOutlet::all();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.coffee', compact('coffeeshop', 'coffeeoutlet', 'footerarticle'));
    }

    public function article_en()
    {
        $article = Article::all();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.article', compact('article', 'footerarticle'));
    }

    public function article_detail_en($slug)
    {
        $article = Article::where('judul_eng_slug', $slug)->get();
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.article_detail', compact('article', 'footerarticle'));
    }

    public function contactus_en()
    {
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.contactus', compact('footerarticle'));
    }

    public function faq_en()
    {
        $footerarticle = Article::orderby('id_article', 'desc')->get();
        return view('sombra.ENG.faq', compact('footerarticle'));
    }

    // UNTUK CONTACT US

    public function sendcontactus(request $request)

    {

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'messagez' => $request->messagez,
        ]);

      $request->validate([

          'name' => 'required',

          'email' => 'required|email',

          'messagez' => 'required',

      ]);

      $input = $request->all();

         //  Send mail to admin

      \Mail::send('emails/sombra', array(

        'name' => $input['name'],

        'email' => $input['email'],

        'messagez' => $input['messagez'],

    ), function($message) use ($request){

        $message->from($request->email);

        $message->to("sombratree@gmail.com", "Sombra")->subject($request->get('name'));

    });



      return redirect()->back()->with(['success' => 'Thank you for your message, we will reply to your message 3 x 24 hours.']);

  }
}
