<?php
namespace App\Http\Controllers;

class MerchandiseController extends Controller
{
    public function index()
    {
        return view("merchandise");
    }
}