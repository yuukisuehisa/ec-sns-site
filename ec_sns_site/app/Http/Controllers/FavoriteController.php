<?php
namespace App\Http\Controllers;
use App\Models\Item;

class FavoriteController extends Controller
{
    public function index()
    {
        $data=Item::where("category_id",1)->get();
        return view("favorite", compact('data'));
    }
}