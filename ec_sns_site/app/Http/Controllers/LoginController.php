<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\login;


class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function entry(Request $r)
    {
        Login::create(["mailaddress"=>$r->input("box1"),
                       "password"=>$r->input("box2"),
                       "created_at"=>now(),
                       "updated_at"=>now()]);

                       return view("login");
    }
}