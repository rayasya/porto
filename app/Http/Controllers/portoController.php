<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class portoController extends Controller
{
    public function index(){
        return redirect('/dashboard');
    }
    public function indexFrontend(){
        $dataNft = DB::table('portofolio')->where('type','NFT')->get();
        $dataWeb = DB::table('portofolio')->where('type','WEB')->get();
        $data3d = DB::table('portofolio')->where('type','3D')->get();
        return view('index', compact('dataNft', 'dataWeb', 'data3d'));
    }
}
