<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function media_consumo (Request $request){
        $num1 =$request->km;
        $num2 =$request->gasgas;
   
        $result = $num1 / $num2;
        return view('media_consumo',["result" => $result]);

    }
    
    public function alcoolOuGasolina (Request $request){
        $alco =$request->alco;
        $gas =$request->gas;

        $conta = $alco / $gas;
        if($conta <= 0.7){

            $respost = 'ÁLCOOL';

        }else{

            $respost = 'GASOLINA';

        }
        return view('alcool_x_gasolina',["result" => $respost]);
    }

    public function gastoViagem (Request $request){
        $quilometros =$request->num1;
        $autonomia =$request->num2;
        $precoLitro =$request->num3;

        $litrosNecessarios = $quilometros / $autonomia;
    
        $custoTotal = $litrosNecessarios * $precoLitro;

        return view('media',["result" => $custoTotal]);
    }
}
