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


class C_SombraAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    ## DASHBOARD ##
    public function dashboard()
    {
        $sliders = Sliders::count();
        $descgreenbean = DescGreenBean::count();
        $descroastery = DescRoastery::count();
        $slidersgreenBean = SlidersGreenBean::count();
        $slidersroastery = SlidersRoastery::count();
        $greenbean = ProductGreenbean::count();
        $roastery = ProductRoastery::count();
        $coffeeshop = CoffeeShop::count();
        $coffeeoutlet = CoffeeOutlet::count();
        $article = Article::count();
        $contact = Contact::count();
        return view('sombraadmin.dashboard', compact('sliders', 'descgreenbean', 'descroastery', 'slidersgreenBean', 'slidersroastery', 'greenbean', 'roastery', 'coffeeshop', 'coffeeoutlet', 'article', 'contact'));
    }

    ## SLIDERS ##
    public function sliders()
    {
        $sliders = Sliders::OrderByDesc('created_at')->get();
        return view('sombraadmin.sliders.sliders', compact('sliders'));
    }

    public function slidersadd()
    {
        return view('sombraadmin.sliders.sliders_add');
    }

    public function slidersstore(request $request)
    {
        $image = $request->file('image');
        $images = time()."_".$image->getClientOriginalName();
        $tujuan_upload = 'img/sliders';
        $image->move($tujuan_upload,$images);

    Sliders::create([
        'imageb' => $images,
        'judul1' => $request->judul1,
        'judul1_eng' => $request->judul1_eng,
        'description1' => $request->description1,
        'description1_eng' => $request->description1_eng,
        'link1_name' => $request->link1_name,
        'link1_name_eng' => $request->link1_name_eng,
        'link1' => $request->link1,
        'link1_eng' => $request->link1_eng,
        'judul2' => $request->judul2,
        'judul2_eng' => $request->judul2_eng,
        'description2' => $request->description2,
        'description2_eng' => $request->description2_eng,
        'link2_name' => $request->link2_name,
        'link2_name_eng' => $request->link2_name_eng,
        'link2' => $request->link2,
        'link2_eng' => $request->link2_eng,
        'judul3' => $request->judul3,
        'judul3_eng' => $request->judul3_eng,
        'description3' => $request->description3,
        'description3_eng' => $request->description3_eng,
        'link3_name' => $request->link3_name,
        'link3_name_eng' => $request->link3_name_eng,
        'link3' => $request->link3,
        'link3_eng' => $request->link3_eng,
    ]);

    return redirect('/CMS/sliders');
    }

    public function slidersedit($id)
    {
        $sliders = Sliders::where('id_sliders', $id)->get();
        return view('sombraadmin.sliders.sliders_edit', compact('sliders'));
    }

    public function slidersupdate(request $request)
    {
        if($request->file('imageb') == null){
            $image = $request->imagebs;
        }
        else{
            $file_image = $request->file('imageb');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/sliders';
            $file_image->move($tujuan_upload,$image);
        }

        Sliders::where('id_sliders', $request->id_sliders)->update([
            'imageb' => $image,
            'judul1' => $request->judul1,
            'judul1_eng' => $request->judul1_eng,
            'description1' => $request->description1,
            'description1_eng' => $request->description1_eng,
            'link1_name' => $request->link1_name,
            'link1_name_eng' => $request->link1_name_eng,
            'link1' => $request->link1,
            'link1_eng' => $request->link1_eng,
            'judul2' => $request->judul2,
            'judul2_eng' => $request->judul2_eng,
            'description2' => $request->description2,
            'description2_eng' => $request->description2_eng,
            'link2_name' => $request->link2_name,
            'link2_name_eng' => $request->link2_name_eng,
            'link2' => $request->link2,
            'link2_eng' => $request->link2_eng,
            'judul3' => $request->judul3,
            'judul3_eng' => $request->judul3_eng,
            'description3' => $request->description3,
            'description3_eng' => $request->description3_eng,
            'link3_name' => $request->link3_name,
            'link3_name_eng' => $request->link3_name_eng,
            'link3' => $request->link3,
            'link3_eng' => $request->link3_eng,
        ]);

        return redirect('/CMS/sliders');
    }

    public function slidersdelete($id)
    {
        Sliders::where('id_sliders', $id)->delete();
        return redirect('/CMS/sliders');
    }

    ## GREENBEAN ##
    public function productgreenbean()
    {
        $produkgb = ProductGreenbean::OrderByDesc('created_at')->get();
        return view('sombraadmin.productGreenBean.productG', compact('produkgb'));
    }

    public function productgreenbeanadd()
    {
        return view('sombraadmin.productGreenBean.productG_add');
    }

    public function productgreenbeanstore(request $request)
    {
        $imagep = $request->file('imagep');
        $imageps = time()."_".$imagep->getClientOriginalName();
        $tujuan_upload = 'img/product/greenbean';
        $imagep->move($tujuan_upload,$imageps);

        ProductGreenbean::create([
            'imagep' => $imageps,
            'pname' => $request->pname,
            'pname_slug' => Str::slug($request->pname, '-'),
            'pname_eng' => $request->pname_eng,
            'pname_eng_slug' => Str::slug($request->pname_eng, '-'),
            'pname_sub' => $request->pname_sub,
            'pname_sub_eng' => $request->pname_sub_eng,
            'specification' => $request->specification,
            'specification_eng' => $request->specification_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'link_tokopedia' => $request->link_tokopedia,
            'link_shopee' => $request->link_shopee,
        ]);

    return redirect('CMS/product/greenbean');
    }

    public function productgreenbeanedit($id)
    {
        $produkgb = ProductGreenbean::where('id_product_greenbean', $id)->get();
        return view('sombraadmin.productGreenBean.productG_edit', compact('produkgb'));
    }

    public function productgreenbeanupdate(request $request)
    {
        if($request->file('imagep') == null){
            $image = $request->imageps;
        }
        else{
            $file_image = $request->file('imagep');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/product/greenbean';
            $file_image->move($tujuan_upload,$image);
        }

        ProductGreenbean::where('id_product_greenbean', $request->id_product_greenbean)->update([
            'imagep' => $image,
            'pname' => $request->pname,
            'pname_slug' => Str::slug($request->pname, '-'),
            'pname_eng' => $request->pname_eng,
            'pname_eng_slug' => Str::slug($request->pname_eng, '-'),
            'pname_sub' => $request->pname_sub,
            'pname_sub_eng' => $request->pname_sub_eng,
            'specification' => $request->specification,
            'specification_eng' => $request->specification_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'link_tokopedia' => $request->link_tokopedia,
            'link_shopee' => $request->link_shopee,
        ]);

        return redirect('CMS/product/greenbean');
    }

    public function productgreenbeandelete($id)
    {
        ProductGreenbean::where('id_product_greenbean', $id)->delete();
        return redirect('CMS/product/greenbean');
    }

    ## ROASTERY ##
    public function productroastery()
    {
        $produkr = ProductRoastery::OrderByDesc('created_at')->get();
        return view('sombraadmin.productRoastery.productR', compact('produkr'));
    }

    public function productroasteryadd()
    {
        return view('sombraadmin.productRoastery.productR_add');
    }

    public function productroasterystore(request $request)
    {
        $imagep = $request->file('imagep');
        $imageps = time()."_".$imagep->getClientOriginalName();
        $tujuan_upload = 'img/product/roastery';
        $imagep->move($tujuan_upload,$imageps);

        ProductRoastery::create([
            'imagep' => $imageps,
            'pname' => $request->pname,
            'pname_slug' => Str::slug($request->pname, '-'),
            'pname_eng' => $request->pname_eng,
            'pname_eng_slug' => Str::slug($request->pname_eng, '-'),
            'pname_sub' => $request->pname_sub,
            'pname_eng_sub' => $request->pname_eng_sub,
            'specification' => $request->specification,
            'specification_eng' => $request->specification_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'link_tokopedia' => $request->link_tokopedia,
            'link_shopee' => $request->link_shopee,
        ]);

    return redirect('CMS/product/roastery');
    }

    public function productroasteryedit($id)
    {
        $productr = ProductRoastery::where('id_product_roastery', $id)->get();
        return view('sombraadmin.productRoastery.productR_edit', compact('productr'));
    }

    public function productroasteryupdate(request $request)
    {
        if($request->file('imagep') == null){
            $image = $request->imageps;
        }
        else{
            $file_image = $request->file('imagep');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/product/roastery';
            $file_image->move($tujuan_upload,$image);
        }

        ProductRoastery::where('id_product_roastery', $request->id_product_roastery)->update([
            'imagep' => $image,
            'pname' => $request->pname,
            'pname_slug' => Str::slug($request->pname, '-'),
            'pname_eng' => $request->pname_eng,
            'pname_eng_slug' => Str::slug($request->pname_eng, '-'),
            'pname_sub' => $request->pname_sub,
            'pname_eng_sub' => $request->pname_eng_sub,
            'specification' => $request->specification,
            'specification_eng' => $request->specification_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'link_tokopedia' => $request->link_tokopedia,
            'link_shopee' => $request->link_shopee,
        ]);

        return redirect('CMS/product/roastery');
    }

    public function productroasterydelete($id)
    {
        ProductRoastery::where('id_product_roastery', $id)->delete();
        return redirect('CMS/product/roastery');
    }

    ## COFFEE SHOP ##

    public function coffeeshop()
    {
        $coffeeshop = CoffeeShop::OrderByDesc('created_at')->get();
        return view('sombraadmin.coffeeshop.coffeeS', compact('coffeeshop'));
    }

    public function coffeeshopadd()
    {
        return view('sombraadmin.coffeeshop.coffeeS_add');
    }

    public function coffeeshopstore(request $request)
    {
        $imagecs = $request->file('imagecs');
        $image = time()."_".$imagecs->getClientOriginalName();
        $tujuan_upload = 'img/coffeeshop';
        $imagecs->move($tujuan_upload,$image);

        CoffeeShop::create([
            'imagecs' => $image,
            'nama' => $request->nama,
        ]);

    return redirect('CMS/coffeeshop');
    }

    public function coffeeshopedit($id)
    {
        $coffeeshop = CoffeeShop::where('id_coffee_shop', $id)->get();
        return view('sombraadmin.coffeeshop.coffeeS_edit', compact('coffeeshop'));
    }

    public function coffeeshopupdate(request $request)
    {
        if($request->file('imagecs') == null){
            $image = $request->imagecss;
        }
        else{
            $file_image = $request->file('imagecs');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/coffeeshop';
            $file_image->move($tujuan_upload,$image);
        }

        CoffeeShop::where('id_coffee_shop', $request->id_coffee_shop)->update([
            'imagecs' => $image,
            'nama' => $request->nama,
        ]);

        return redirect('CMS/coffeeshop');
    }

    public function coffeeshopdelete($id)
    {
        CoffeeShop::where('id_coffee_shop', $id)->delete();
        return redirect('CMS/coffeeshop');
    }

    ## COFFEE OUTLET ##

    public function coffeeoutlet()
    {
        $coffeeoutlet = CoffeeOutlet::OrderByDesc('created_at')->get();
        return view('sombraadmin.coffeeoutlet.coffeeO', compact('coffeeoutlet'));
    }

    public function coffeeoutletadd()
    {
        return view('sombraadmin.coffeeoutlet.coffeeO_add');
    }

    public function coffeeoutletstore(request $request)
    {
        $imageco = $request->file('imageco');
        $image = time()."_".$imageco->getClientOriginalName();
        $tujuan_upload = 'img/coffeeoutlet';
        $imageco->move($tujuan_upload,$image);

        CoffeeOutlet::create([
            'imageco' => $image,
        ]);

    return redirect('CMS/coffeeoutlet');
    }

    public function coffeeoutletedit($id)
    {
        $coffeeoutlet = CoffeeOutlet::where('id_coffee_outlet', $id)->get();
        return view('sombraadmin.CoffeeOutlet.coffeeO_edit', compact('coffeeoutlet'));
    }

    public function coffeeoutletupdate(request $request)
    {
        if($request->file('imageco') == null){
            $image = $request->imagecos;
        }
        else{
            $file_image = $request->file('imageco');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/coffeeoutlet';
            $file_image->move($tujuan_upload,$image);
        }

        CoffeeOutlet::where('id_coffee_outlet', $request->id_coffee_outlet)->update([
            'imageco' => $image,
        ]);

        return redirect('CMS/coffeeoutlet');
    }

    public function coffeeoutletdelete($id)
    {
        CoffeeOutlet::where('id_coffee_outlet', $id)->delete();
        return redirect('CMS/coffeeoutlet');
    }

    ## ARTICLE ##

    public function article()
    {
        $article = Article::OrderByDesc('created_at')->get();
        return view('sombraadmin.article.article', compact('article'));
    }

    public function articleadd()
    {
        return view('sombraadmin.article.article_add');
    }

    public function articlestore(request $request)
    {
        $images = $request->file('image');
        $image = time()."_".$images->getClientOriginalName();
        $tujuan_upload = 'img/article';
        $images->move($tujuan_upload,$image);

        Article::create([
            'image' => $image,
            'judul' => $request->judul,
            'judul_slug' => Str::slug($request->judul, '-'),
            'judul_eng' => $request->judul_eng,
            'judul_eng_slug' => Str::slug($request->judul_eng, '-'),
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

    return redirect('CMS/article');
    }

    public function articleedit($id)
    {
        $article = Article::where('id_article', $id)->get();
        return view('sombraadmin.article.article_edit', compact('article'));
    }

    public function articleupdate(request $request)
    {
        if($request->file('image') == null){
            $image = $request->images;
        }
        else{
            $file_image = $request->file('image');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/article';
            $file_image->move($tujuan_upload,$image);
        }

        Article::where('id_article', $request->id_article)->update([
            'image' => $image,
            'judul' => $request->judul,
            'judul_slug' => Str::slug($request->judul, '-'),
            'judul_eng' => $request->judul_eng,
            'judul_eng_slug' => Str::slug($request->judul_eng, '-'),
            'description_sub' => $request->description_sub,
            'description_sub_eng' => $request->description_sub_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('CMS/article');
    }

    public function articledelete($id)
    {
        Article::where('id_article', $id)->delete();
        return redirect('CMS/article');
    }

    // DESCRIPTION GREENBEAN

    public function descgreenbean()
    {
        $descGB = DescGreenBean::OrderByDesc('created_at')->get();
        return view('sombraadmin.descgreenbean.descgreenbean', compact('descGB'));
    }

    public function descgreenbeanadd()
    {
        return view('sombraadmin.descgreenbean.descgreenbean_add');
    }

    public function descgreenbeanstore(request $request)
    {
        DescGreenBean::create([
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('CMS/desc/greenbean');
    }

    public function descgreenbeanedit($id)
    {
        $descGB = DescGreenBean::where('id', $id)->get();
        return view('sombraadmin.descgreenbean.descgreenbean_edit', compact('descGB'));
    }

    public function descgreenbeanupdate(request $request)
    {
        DescGreenBean::where('id', $request->id)->update([
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('CMS/desc/greenbean');
    }

    public function descgreenbeandelete($id)
    {
        DescGreenBean::where('id', $id)->delete();
        return redirect('CMS/desc/greenbean');
    }

    // DESCRIPTION GREENBEAN

    public function descroastery()
    {
        $descR = DescRoastery::OrderByDesc('created_at')->get();
        return view('sombraadmin.descroastery.descroastery', compact('descR'));
    }

    public function descroasteryadd()
    {
        return view('sombraadmin.descroastery.descroastery_add');
    }

    public function descroasterystore(request $request)
    {
        DescRoastery::create([
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('CMS/desc/roastery');
    }

    public function descroasteryedit($id)
    {
        $descR = DescRoastery::where('id', $id)->get();
        return view('sombraadmin.descroastery.descroastery_edit', compact('descR'));
    }

    public function descroasteryupdate(request $request)
    {
        DescRoastery::where('id', $request->id)->update([
            'description' => $request->description,
            'description_eng' => $request->description_eng,
        ]);

        return redirect('CMS/desc/roastery');
    }

    public function descroasterydelete($id)
    {
        DescRoastery::where('id', $id)->delete();
        return redirect('CMS/desc/roastery');
    }

    // SLIDERS GREENBEAN

    public function slidersgreenbean()
    {
        $slidersGB = SlidersGreenBean::OrderByDesc('created_at')->get();
        return view('sombraadmin.slidersgreenbean.slidersgreenbean', compact('slidersGB'));
    }

    public function slidersgreenbeanadd()
    {
        return view('sombraadmin.slidersgreenbean.slidersgreenbean_add');
    }

    public function slidersgreenbeanstore(request $request)
    {
        $images = $request->file('imagesg');
        $image = time()."_".$images->getClientOriginalName();
        $tujuan_upload = 'img/slidersGreenBean';
        $images->move($tujuan_upload,$image);

        SlidersGreenBean::create([
            'imagesg' => $image,
            // 'image_eng' => $image_eng,
        ]);

        return redirect('CMS/sliders/greenbean');
    }

    public function slidersgreenbeanedit($id)
    {
        $slidersGB = SlidersGreenBean::where('id', $id)->get();
        return view('sombraadmin.slidersgreenbean.slidersgreenbean_edit', compact('slidersGB'));
    }

    public function slidersgreenbeanupdate(request $request)
    {
        if($request->file('imagesg') == null){
            $image = $request->imagesgs;
        }
        else{
            $file_image = $request->file('imagesg');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/slidersGreenBean';
            $file_image->move($tujuan_upload,$image);
        }

        SlidersGreenBean::where('id', $request->id)->update([
            'imagesg' => $image,
            // 'image_eng' => $image_eng,
        ]);

        return redirect('CMS/sliders/greenbean');
    }

    public function slidersgreenbeandelete($id)
    {
        SlidersGreenBean::where('id', $id)->delete();
        return redirect('CMS/sliders/greenbean');
    }

    // SLIDERS ROASTERY

    public function slidersroastery()
    {
        $slidersR = SlidersRoastery::OrderByDesc('created_at')->get();
        return view('sombraadmin.slidersroastery.slidersroastery', compact('slidersR'));
    }

    public function slidersroasteryadd()
    {
        return view('sombraadmin.slidersroastery.slidersroastery_add');
    }

    public function slidersroasterystore(request $request)
    {
        $images = $request->file('imagesr');
        $image = time()."_".$images->getClientOriginalName();
        $tujuan_upload = 'img/slidersRoastery';
        $images->move($tujuan_upload,$image);

        SlidersRoastery::create([
            'imagesr' => $image,
            // 'image_eng' => $image_eng,
        ]);

        return redirect('CMS/sliders/roastery');
    }

    public function slidersroasteryedit($id)
    {
        $slidersR = SlidersRoastery::where('id', $id)->get();
        return view('sombraadmin.slidersroastery.slidersroastery_edit', compact('slidersR'));
    }

    public function slidersroasteryupdate(request $request)
    {
        if($request->file('imagesr') == null){
            $image = $request->imagesrs;
        }
        else{
            $file_image = $request->file('imagesr');

            $image = time()."_".$file_image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'img/slidersRoastery';
            $file_image->move($tujuan_upload,$image);
        }

        SlidersRoastery::where('id', $request->id)->update([
            'imagesr' => $image,
            // 'image_eng' => $image_eng,
        ]);

        return redirect('CMS/sliders/roastery');
    }

    public function slidersroasterydelete($id)
    {
        SlidersRoastery::where('id', $id)->delete();
        return redirect('CMS/sliders/roastery');
    }

    public function contact()
    {
        $contact = Contact::OrderByDesc('created_at')->get();
        return view('sombraadmin.contact.contact', compact('contact'));
    }

    public function contactdelete($id)
    {
        Contact::where('id_contact', $id)->delete();
        return redirect('CMS/contact');
    }
}
