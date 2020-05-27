<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongController extends Controller
{
    public function Cong($a,$b){
        return ($a+$b);
    }

    function index(){
        return view('AvaB');
    }
    public function Sum(request $request){
        $so1 = $request ->input('a');
        $so2 = $request ->input('b');
        $kq= $so1+$so2;
       
        return view('AvaB')->with(['txta'=>$so1,'txtb'=>$so2,'kq'=>$kq]);
    }
    // public function index(){
    //     $title = "Đây là tiêu đề";
    //     $description ="Đây là dòng mô tả";
    //     $coppyright = "Hoc web chuẩn";
    //     return view('test')->with(['title'=>$title,'description'=>$description,'coppyright'=>$coppyright]);
    // }
}