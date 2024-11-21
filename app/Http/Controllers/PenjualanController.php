<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Penjualan';
        $subtitle = 'Index';
        $penjualans = Penjualan::all();
        return view('admin.penjualan.index', compact('penjualans', 'title', 'subtitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Penjualan';
        $subtitle = 'Create';
        $produks = Produk::where('Stok', '>', 0)->get();
        return view('admin.penjualan.create', compact('title', 'subtitle', 'produks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penjualan $penjualan)
    {
        //
    }
}
