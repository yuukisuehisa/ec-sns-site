<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function check(Request $r)
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
        if($data == null || count($data) == 0){
            $res["success"]=false;
            $res["error"]["mail"]="メールアドレスまたは、パスワードが不正です";
            return response()->json($res,400);
        }
        if($data[0]->password!=$r->input("password")){
            $res["success"]=false;
            $res["error"]["mail"]="メールアドレスまたは、パスワードが不正です";
            return response()->json($res,400);
        }
        session()->put("userid",$data[0]->id);
        session()->put("username",$data[0]->name);


            //return view("login");
            return response()->json($res);
    }
}