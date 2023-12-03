<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
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
    // public function store(Request $request)
    // {
        

    //     $request->validate([
 
    //         'maintenance_period'=>'required',
    //         'maintenance_type'=>'required',
    //         'maintenance_attachment' =>'required|image|mimes:jpeg,png,jpg,gif.pdf.dosc,svg',
    //     ]);
    //     $input_maintenance = $request->all();
      
    //     Maintenance::create($input_maintenance);
       

    // }
    public function store(Request $request)
{
//     $request->validate([
//         'maintenance_period' => 'required',
//         'maintenance_type' => 'required',
//         'maintenance_attachment' => 'required|image|mimes:jpeg,png,jpg,gif,pdf,doc,svg',
//     ]);

//     $input_maintenance = $request->all();
//   dd($input_maintenance);
    // Maintenance::create($input_maintenance);

    // Redirect to the maintenance index page after the store operation
    // return redirect()->route('products.index') ;
}


    /**
     * Display the specified resource.
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maintenance $maintenance)
    {
        //
    }
}
