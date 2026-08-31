<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
public function index (){
    $trends = Product::where("popularity",1)->inRandomOrder()->limit(4)->get();
    $mostplayed = Product::where("mostselling",1)->inRandomOrder()->limit(6)->get();
    $categorys = category::all();
    return view('index',["trends" => $trends , "mostplayed" => $mostplayed,"categorys" => $categorys]);
}

public function shop(){
    $products = Product::all();
    $categorys = category::all();
return view("shop",["products"=> $products,"categorys" => $categorys]);

}
public function category($slug){
    $cadid = category::where("slug",$slug)->first();
    $products = Product::where("category_id",$cadid->id)->get();
    $categorys = category::all();
  return view("shop",["products"=> $products,"categorys" => $categorys]);

}


public function singleProduct($slug){
    $singleproduct = Product::where("slug" , $slug)->first();

    $similars=  Product::where("category_id" , $singleproduct->category_id)->inRandomOrder()->limit(5)->get();
    return view("product-details",["product"=>$singleproduct , "similars"=>$similars]);

}
public function contact(){
    $contact = DB::table("settings")->find(2);
    return view("contact",["contact"=> json_decode($contact->detials)]);
}
public function login(){
    return view("index");
}


}
