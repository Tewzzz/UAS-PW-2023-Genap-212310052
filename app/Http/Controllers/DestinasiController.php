<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.destinasi.index', [
            "destinasis" => Destinasi::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destinasi.create', [
            "destinasis" => Destinasi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'is_active' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
        ]);
        
        
        $validateData['image'] = $request->file('image')->store('post-images');

        Destinasi::create($validateData);
        return redirect('/admin/destinasi')->with('success', 'New Post Destinasi has been Added!', $validateData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        $data['destinasi'] = Destinasi::find($destinasi->id);

        return view('users.destinasi.detaildestinasi', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $destinasi = Destinasi::where('id',$id)->first();
        return view('admin.destinasi.edit')->with('destinasi', $destinasi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        $rules =[
            'nama' => 'required|max:255',
            'is_active' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
        ];
        $validateData = $request->validate($rules);
        $validateData['image'] = $request->file('image')->store('post-images');

        Destinasi::where('id', $destinasi->id)->update($validateData);
        return redirect('/admin/destinasi')->with('success', 'Post Destination has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        Destinasi::destroy($destinasi->id);
        return redirect('/admin/destinasi')->with('success', 'Post Destination has been deleted');
    }
}
