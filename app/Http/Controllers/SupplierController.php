<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Supplier";
        $slug = "supplier";
        return view("invoice.dashboard", compact('title', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplierModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplierModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplierModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplierModel)
    {
        //
    }
}
