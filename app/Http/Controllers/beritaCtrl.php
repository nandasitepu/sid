<?php

namespace App\Http\Controllers;

use App\Model\Berita;
use Illuminate\Http\Request;

class beritaCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::orderBy('id', 'desc')->paginate(5);

        return view ('berita.index')->with('berita', $berita);
    }

    public function table()
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(20);

        return view ('berita.table')->with('berita', $berita);
    }

    public function populer() 
    {
        $populer = Berita::orderBy('hits', 'desc')->paginate(5);
        
        return view ('berita.populer')->with('populer', $populer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita = Berita::all();
        return view ('berita.create')->with('berita', $berita);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Berita::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);

        return view('berita.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        
        return view('berita.show')->with('berita', $berita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
