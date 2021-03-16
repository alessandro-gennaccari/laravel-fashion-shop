<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index(){

        return view('home');
        
    }

    public function shop(){

        $dati_shop = Dress::all();

        $data = [ 'dress'=>$dati_shop ];
        
        return view('shop', $data);

    }
}
