<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function index()
    {
        $year=intval(date("Y"));
        return view("signup",compact("year"));
    }
    public function entry(Request $r)
    {
        $res["success"]=true;
        $validator=Validator::make($r->all(),[
            "mail" => "required",
            "password" => "required",
            "password2" => "required",
            "name" => "required",
            "namae" => "required",
            "code" => "required",
            "address" => "required",
            "tel" => "required",
        ],[
            "mail.required" => "メールアドレスが入力されていません",
            "password.required" => "パスワードが入力されていません",
            "password2.required" => "パスワードが入力されていません",
            "name.required" => "名前が入力されていません",
            "namae.required" => "ふりがなが入力されていません",
            "code.required" => "郵便番号が入力されていません",
            "address.required" => "住所が入力されていません",
            "tel.required" => "電話番号が入力されていません",
        ]);
        if($r->input("year")=="0"||$r->input("month")=="0"||$r->input("day")=="0"){
            $res["success"]=false;
            $res["seinengappierror"]="生年月日が入力されてません";
        }
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

        //return view("signup");
        return response()->json($res);
    }
}