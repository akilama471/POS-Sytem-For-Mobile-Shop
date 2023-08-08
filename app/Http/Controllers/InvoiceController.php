<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Invoice";
        $slug = "invoice";
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
     * @param  \App\Models\InvoiceModel  $invoiceModel
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoiceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceModel  $invoiceModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoiceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvoiceModel  $invoiceModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoiceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceModel  $invoiceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoiceModel)
    {
        //
    }
}
