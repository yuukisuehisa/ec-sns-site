<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;

class SignupController extends Controller
{
    public function index()
    {
        return view("signup");
    }
    public function entry(Request $r)
    {
        User::create(["mailaddress"=>$r->input("mail"),
                      "password"=>$r->input("password"),
                      "name"=>$r->input("name"),
                      "name_kana"=>$r->input("namae"),
                      "seibetu"=>$r->input("gender"),
                      "seinengappi"=>"20210912",
                      "code"=>$r->input("code"),
                      "address"=>$r->input("address"),
                      "phonemumber"=>$r->input("tel"),
                      "created_at"=>now(),
                      "updated_at"=>now()]);

        return view("signup");
    }
}