<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Http\Request;

class PostinganController extends Controller
{

    public function index()
    {
        $postingan = Postingan::all();
        return view('postingan.index', compact('postingan'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('postingan.create',
            compact('kategori'));
    }

    public function store(Request $request)
    {
        Postingan::create($request->all());
        return redirect('/postingan');
    }
}
