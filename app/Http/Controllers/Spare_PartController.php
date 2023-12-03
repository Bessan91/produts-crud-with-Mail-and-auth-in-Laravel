<?php

namespace App\Http\Controllers;

use App\Models\Spare_part;
use App\Models\Product;
use Illuminate\Http\Request;


class Spare_PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'product_id'=>'required',
            'part_name'=>'required',
            'model'=>'required',
            'serial_number'=>'required',
            'expected_life_time'=>'required',
        ]);
        $input_spare = $request->all();
        Spare_Part::create($input_spare);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Spare_part $spare_part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spare_part $spare_part)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spare_part $spare_part)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spare_part $spare_part)
    {
        //
    }
}
