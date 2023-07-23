<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.homestay.index', [
            "homestays" => Homestay::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homestay.create', [
            'homestays' => Homestay::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'is_active' => 'required',
            'max_pax' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
        ]);
        
        
        $validateData['image'] = $request->file('image')->store('post-images');

        Homestay::create($validateData);
        return redirect('/admin/homestay')->with('success', 'New Post Homestay has been Added!', $validateData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Homestay $homestay)
    {
        $data['homestay'] = Homestay::find($homestay->id);

        return view('users.homestay.detailhomestay', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $homestay = Homestay::where('id',$id)->first();
        return view('admin.homestay.edit')->with('homestay', $homestay);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homestay $homestay)
    {
        $rules =[
            'nama' => 'required|max:255',
            'is_active' => 'required',
            'max_pax' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
        ];
        $validateData = $request->validate($rules);
        $validateData['image'] = $request->file('image')->store('post-images');

        Homestay::where('id', $homestay->id)->update($validateData);
        return redirect('/admin/homestay')->with('success', 'Post Homestay has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homestay $homestay)
    {
        Homestay::destroy($homestay->id);
        return redirect('/admin/homestay')->with('success', 'Post Homestay has been deleted');
    }
}
