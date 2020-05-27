<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dientichController extends Controller
{
    function index(){
        return view('Dientich');
    }

    
     function kiemtra(request $request){

        $canhA = $request ->input('canha');
        $canhB = $request ->input('canhb');
        $canhC = $request ->input('canhc');
        $canhD = $request ->input('canhd');
        $chuvi = ($canhA+$canhB+$canhC+$canhD)/2;
        // echo "df".$canhA + "d".$canhB +"df".$canhC + "d".$canhD;
        $kqTu= sqrt(($chuvi - $canhA)*($chuvi - $canhB)*($chuvi - $canhC)*($chuvi - $canhD));
       
        return view('Dientich')->with('kq2',$kqTu);
            
    }
       
    // else {
    //     $canhA = $request ->input('canhtama');
    //         $canhH = $request ->input('canhh');
    //         $kqTa= ($canhA*$canhH)/2;
           
    //         return view('Dientich')->with(['txta'=>$canhA,'txtb'=>$canhH,'kq'=>$kqTa]);
    // }
        // $bntTa = $request ->input('tam');
        // $bntTu = $request ->input('tu');
        // $variable = $bntTu;


        // switch ($variable) {
        //     case $variable=="tam":
        //          function Stamgia(request $request){
        //             $canhA = $request ->input('canhtama');
        //             $canhH = $request ->input('canhh');
        //             $kqTa= ($canhA*$canhH)/2;
                   
        //             return view('Dientich')->with(['txta'=>$canhA,'txtb'=>$canhH,'kq'=>$kqTa]);
        //         }
        //        break;
        //     case  true:
                
        //             $canhA = $request ->input('canha');
        //             $canhB = $request ->input('canhb');
        //             $canhC = $request ->input('canhc');
        //             $canhD = $request ->input('canhd');
        //             $chuvi = ($canhA+$canhB+$canhC+$canhD)/2;
        //             $kqTu= ($chuvi - $canhA)*($chuvi - $canhB)*($chuvi - $canhC)*($chuvi - $canhD);
                   
        //             return view('Dientich')->with(['txta'=>$canhA,'txtb'=>$canhB,'txtc'=>$canhC,'txtd'=>$canhD,'kq2'=>$kqTu]);
                
        //         break;
        //     default:
        //         // chuỗi câu lệnh
        //         break;
        
        
       
    } 
   

