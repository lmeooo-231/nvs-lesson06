<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsSessionController extends Controller
{
    //# đọc dữ liệu từ session
    public function nvsGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT2_NguyenVanSon"))
        {
            echo "<h2>Session data:". $request->session()->get("K23CNT2_NguyenVanSon");
        }
        else
        {
            echo "<h2> không có dữ liệu trong session</h2>";
        }
    }
    //# ghi dữ liệu vào session
    public function nvsStoreSessionData(Request $request)
    {
        //lưu
        $request->session()->put('K23CNT2_NguyenVanSon','2310900090');
        echo "<h2>Dữ liệu đã được lưu vào session</h2>";
    }
    //# xóa dữ liệu trong session
    public function nvsDeleteSessionData(Request $request)
    {
        //lưu
        $request->session()->forget('K23CNT2_NguyenVanSon');
        echo "<h2>Dữ liệu đã được xóa khỏi session</h2>";
    }
}
