<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ProductGroup;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Item::latest()->get();
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productgroups=ProductGroup::latest()->get();
        return view('items.create',compact('productgroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation form
        $this->validate($request,[
            'product_group_id' => 'required',
            'no' => 'required|min:3',
            'description' => 'required|min:3'
            //'UOM' => 'required'
        ]);

        // create ke database
        Item::create([
            'product_group_id' => $request->product_group_id,
            'no' => $request->no,
            'description' => $request->description,
            'uom' => $request->uom
        ]);
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productgroups=ProductGroup::latest()->get();
        // cari data yg mau di edit berdasarkan id
        $item=Item::findOrFail($id);
        return view('items.edit',compact('item','productgroups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation form
        $this->validate($request,[
            'product_group_id' => 'required',
            'no' => 'required|min:3',
            'description' => 'required|min:3'
            //'UOM' => 'required'
        ]);

        // cari yg mau di edit
        $item=Item::findOrFail($id);
        // update ke database
        $item->update([
            'product_group_id' => $request->product_group_id,
            'no' => $request->no,
            'description' => $request->description,
            'uom' => $request->uom
        ]);
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // cari yg mau di delete
        $item=Item::findOrFail($id);

        // delete row data dalam database
        $item->delete();

        return redirect()->route('items.index');
    }
}
