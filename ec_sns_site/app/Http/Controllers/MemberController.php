<?php
namespace App\Http\Controllers;
use App\Models\User;


class MemberController extends Controller
{
    public function index()
    {
        $data=User::where("id",session()->get("userid"))->first();
        return view("member",compact("data"));
    }
}