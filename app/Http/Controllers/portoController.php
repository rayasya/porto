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
        $data = DB::table('portofolio')->get();
        return view('index', compact('data'));
    }
}
