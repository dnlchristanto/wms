<?php

namespace App\Http\Controllers;

use App\Models\ProductGroup;
use Illuminate\Http\Request;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productgroups=ProductGroup::latest()->get();
        return view('productgroups.index',compact('productgroups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productgroups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation form
        $this->validate($request,[
            'code' => 'required|min:3',
            'description' => 'required|min:3'
        ]);

        // create ke database
        ProductGroup::create([
            'code' => $request->code,
            'description' => $request->description
        ]);
        return redirect()->route('productgroups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // cari data yg mau di edit berdasarkan id
        $product_group=ProductGroup::findOrFail($id);
        return view('productgroups.edit',compact('product_group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation form
        $this->validate($request,[
            'code' => 'required|min:3',
            'description' => 'required|min:3'
        ]);

        // cari yg mau di edit
        $product_group=ProductGroup::findOrFail($id);
        // update ke database
        $product_group->update([
            'code' => $request->code,
            'description' => $request->description
        ]);
        return redirect()->route('productgroups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // cari yg mau di delete
        $product_group=ProductGroup::findOrFail($id);

        // delete row data dalam database
        $product_group->delete();

        return redirect()->route('productgroups.index');
    }
}
