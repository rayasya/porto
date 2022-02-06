<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class portofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('portofolio')->get();
        return view('layouts.porto.porto', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.porto.porto_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->image == null) {
            DB::table('portofolio')->insert([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'type' => $request->type
            ]); 
        }else{
            $file = Request()->image;
            $namaFile = $request->title.'.'.$file->extension();
            $file->move(public_path('img'),$namaFile);

            DB::table('portofolio')->insert([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'type' => $request->type,
                'thumbnail' => $namaFile
            ]);
        }

        return redirect('/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data = DB::table('portofolio')->where('id', $id)->first();
        return view('layouts.porto.porto_edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->image == null) {
            DB::table('portofolio')->where('id', $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
                'link' => $request->link
            ]); 
        }else{
            $file = Request()->image;
            $namaFile = $request->title.'.'.$file->extension();
            $file->move(public_path('img'),$namaFile);

            DB::table('portofolio')->where('id', $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
                'link' => $request->link,
                'thumbnail' => $namaFile
            ]);
        }
        
        return redirect('/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $data = DB::table('portofolio')->where('id','=',$id)->get('thumbnail');
        foreach ($data as $d) {
            $gambar = $d->thumbnail;
        }
        $lokasi = public_path('img/'.$gambar);
        if ($gambar == "default.jpg") {
            DB::table('portofolio')->where('id','=', $id)->delete();
        }else{
            DB::table('portofolio')->where('id','=', $id)->delete();
            unlink($lokasi);
        }

        return redirect('/portfolio');
    }
}
