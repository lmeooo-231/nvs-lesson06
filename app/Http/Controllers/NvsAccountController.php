<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsAccountController extends Controller
{
    //#form login - get
    public function nvslogin(){
        return view('nvs-login');
    }
    //#form login - post (khi đăng nhập)
    /*
    kiểm tra email, mật khẩu không để trống
    nếu email = nvs@gmail.com và pass = 123456 thì lưu thông tin vào session
    với tên như ví dụ trước
    */
    public function nvsLoginSubmit(Request $request)
    {
        //validation
        $validation = $request->validate([
            'nvsEmail' => 'required|email',
            'nvsPass' => 'required|min:6'
        ])
        //check login -> store session -> rediect home
        $nvsEmail = $request->input('nvsEmail');
        $nvsPass = $request->input('nvsPass');

        $nvsLoginSession = [
            'nvsEmail'=>$nvsEmail,
            'nvsPass'=>$nvsPass
        ];

        $nvs_json = json_encode($nvsLoginSession)
        if($nvsEmail == "nvs@gmail.com" && $nvsPass == "123456"){
            //lưu session
            $request->session()->put('K23CNT-NguyenVanSon',$nvsEmail)
            return rediect('/');
        }
        return rediect()->back()->with('nvs-error','Lỗi đăng nhập');
    }
    //logout
    public function nvslogout(Request $request)
    {
        $request->session()->forget('K23CNT2_NguyenVanSon');
        return rediect(/)
    }
}
