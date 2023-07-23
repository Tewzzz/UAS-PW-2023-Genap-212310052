<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kuliner.index', [
            "kuliners" => Kuliner::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kuliner.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'kategori_id' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
        ]);
        // dd($request->all());
        
        $validateData['image'] = $request->file('image')->store('post-images');

        Kuliner::create($validateData);
        return redirect('/admin/kuliner')->with('success', 'New Post Kuliner has been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuliner $kuliner)
    {
        $data['kuliner'] = Kuliner::find($kuliner->id);

        return view('users.kuliner.detailkuliner', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuliner $kuliner)
    {
        return view('admin.kuliner.edit', [
            'kuliner' => $kuliner,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuliner $kuliner)
    {
        $rules =[
            'nama' => 'required|max:255',
            'kategori_id' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required', 
        ];
        // dd($request->all());
        $validateData = $request->validate($rules);
        $validateData['image'] = $request->file('image')->store('post-images');

        Kuliner::where('id', $kuliner->id)->update($validateData);
        return redirect('/admin/kuliner')->with('success', 'Post Kuliner has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuliner $kuliner)
    {
        Kuliner::destroy($kuliner->id);
        return redirect('/admin/kuliner/')->with('success', 'Post has been deleted');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
