<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.travel.index', [
            "travels" => Travel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.travel.create', [
            'travels' => Travel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'min_pax' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required'
        ]);
        // dd($request->all());
        
        $validateData['image'] = $request->file('image')->store('post-images');

        Travel::create($validateData);
        return redirect('/admin/travel')->with('success', 'New Post Travel Package has been Added!', $validateData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        $data['travel'] = Travel::find($travel->id);

        return view('users.travel.detailtravel', $data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $travel = Travel::where('id',$id)->first();
        return view('admin.travel.edit')->with('travel', $travel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        $rules =[
            'nama' => 'required|max:255',
            'min_pax' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ];
        $validateData = $request->validate($rules);
        $validateData['image'] = $request->file('image')->store('post-images');

        Travel::where('id', $travel->id)->update($validateData);
        return redirect('/admin/travel')->with('success', 'Post Travel Package has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        Travel::destroy($travel->id);
        return redirect('/admin/travel')->with('success', 'Post Travel Package has been deleted');
    }
}
