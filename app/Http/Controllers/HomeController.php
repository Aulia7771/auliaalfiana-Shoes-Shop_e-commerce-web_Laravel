<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About Shop";
        $viewData["description"] = "Ninety Nine Shoes Shop has been established since 2002. 
        We sell various types of shoes and sandals. We provide a variety of models, colors,
        and sizes that can be adjusted to your taste. We sell wholesale and units through 
        offline and online stores. You can visit our store to choose your own shoes or sandals 
        that suit your taste. Happy shopping everyone!";
        $viewData["description1"] = "Address";           
        $viewData["description2"] = "Pusat Grosir Tanah Abang Blok A lantai 3 Los F No. 39
        Jalan K.H. Mas Mansyur
        Kampung Bali, Tanah Abang,
        Kota Magelang 56553
        Indonesia";
        $viewData["description3"] = "Telephone";           
        $viewData["description4"] = "0858-7787-8297";
        $viewData["author"] = "Developed by: Aulia Alfiana, founder 99 store";
        return view('home.about')->with("viewData", $viewData);
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "Online Store page";
        $author = "Developed by: Aulia Alfiana";
        return view('home.about')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("description", $description)
        ->with("author", $author);
    }
}
