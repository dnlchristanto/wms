<?php

namespace App\Http\Controllers;

use App\Models\SalesShipmentHeader;
use App\Models\SalesShipmentLine;
use Illuminate\Http\Request;

class SalesShipmentHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesshipmentheaders=SalesShipmentHeader::latest()->get();
        return view('salesshipmentheaders.index',compact('salesshipmentheaders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // cari data yg mau di edit berdasarkan id
        $salesshipmentheaders=SalesShipmentHeader::findOrFail($id);
        //$salesshipmentlines=SalesShipmentLine::where($salesshipmentlines->sj_id,$id);
        $salesshipmentlines=SalesShipmentLine::where('sj_id',$id)->get();
        //dd($salesshipmentheaders);
        //dd($salesshipmentlines);
        return view('salesshipmentheaders.show',compact('salesshipmentheaders','salesshipmentlines'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesShipmentHeader $salesShipmentHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesShipmentHeader $salesShipmentHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesShipmentHeader $salesShipmentHeader)
    {
        //
    }
}
