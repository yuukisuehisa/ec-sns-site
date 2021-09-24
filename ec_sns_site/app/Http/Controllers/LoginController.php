<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function entry(Request $r)
    {
        $res["success"]=true;
        $validator=Validator::make($r->all(),[
            "mail" => "required",
            "password" => "required",
        ],[
            "mail.required" => "メールアドレスが入力されていません",
            "password.required" => "パスワードが入力されていません",
        ]);
        if($validator->fails()){
            $res["success"]=false;
            $res["error"]=$validator->getMessageBag()->toArray();
            return response()->json($res,400);
        }

        $data = User::where("mailaddress", $r->input("mail")) ->get();
        if($data != null && count($data) > 0){
            $res["success"]=false;
            $res["error"]["mail"]="すでに登録されているメールアドレスです";
            return response()->json($res,400);
        }
        Login::create(["mailaddress"=>$r->input("box1"),
                       "password"=>$r->input("box2"),
                       "created_at"=>now(),
                       "updated_at"=>now()]);

                       return view("login");
    }
}