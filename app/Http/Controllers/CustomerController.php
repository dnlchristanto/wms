<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=Customer::latest()->get();
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation form
        $this->validate($request,[
            'customer_no' => 'required|min:3',
            'name' => 'required|min:3'
        ]);

        // create ke database
        Customer::create([
            'customer_no' => $request->customer_no,
            'name' => $request->name
        ]);
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // cari data yg mau di edit berdasarkan id
        $customer=Customer::findOrFail($id);
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation form
        $this->validate($request,[
            'customer_no' => 'required',
            'name' => 'required|min:3'
        ]);

        // cari yg mau di edit
        $customer=Customer::findOrFail($id);
        // update ke database
        $customer->update([
            'customer_no' => $request->customer_no,
            'name' => $request->name
        ]);
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // cari yg mau di delete
        $customer=Customer::findOrFail($id);

        // delete row data dalam database
        $customer->delete();

        return redirect()->route('customers.index');
    }
}
