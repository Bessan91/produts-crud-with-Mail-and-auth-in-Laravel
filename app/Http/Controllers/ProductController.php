<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Maintenance;
use App\Models\SparePart;
use App\Models\Youtube;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\MaintenanceController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Mail;
use App\Mail\MailDemo;

class ProductController extends Controller
{

   

    /**
     * Display a listing of the resource.
     */
    // Request $request
    public function index( )
    {
//         $products = Product::all()->sortByDesc('id');
//         // $products = DB::table('products')->get()->toArray();
// print_r($products);
// $products = DB::table('products')->get();
// ===============================
// $products = Product::all()->sortByDesc('id');
// ==============================
//  return view('products.index',compact('products'))
//                ->with('i', (request()->input('page',1) -1) * 5);
// ==========For print Data ===========
// foreach ($products as $product) {
//     // Access and display the attributes of each product
    
//     echo "Product ID: " . $product->id . "\n";
//     echo "Product Name: " . $product->name . "\n";
//     echo "Product Details: " . $product->details . "\n";
//     echo "Product Image: " . $product->image . "\n";
  
 
// }
// =============================

//          $products = DB::table('products')->get("name");
// print_r($products)  ;



        // $products = Product::orderBy('id', 'desc')->paginate(2);
        // $products = Product::all()->sortByDesc('id')->paginate(5);
        $products = Product::latest()->paginate(5);
       
              return view('products.index',compact('products'))
        ->with('i', (request()->input('page',1) -1) * 5);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // protected $fillable = [ 'equipment_type','manufacturer','model','serial_number','expected_life_time'];

    //     $request->validate([
    //         'equipment_type'=>'required',
    //         'manufacturer'=>'required',
    //         'model'=>'required',
    //         'serial_number'=>'required',
    //         'expected_life_time'=>'required',
    //     ]);
    //     $input = $request->all();
  

    //     Product::create($input);

    //     // Maintenance::create($input);
    //     Maintenance::create([
    //         'product_id' => $product->id,
    //         'maintenance_period' => $request->input('maintenance_period'),
    //         'maintenance_type' => $request->input('maintenance_type'),
    //         'maintenance_attachment' => $request->input('maintenance_attachment'),
    //     ]);

    //     return redirect()->route('products.index')
    //     ->with('success','Products added successfully');
    // }
// ===========================
// public function store(Request $request)
// {
//     $request->validate([
//         'equipment_type' => 'required',
//         'manufacturer' => 'required',
//         'model' => 'required',
//         'serial_number' => 'required',
//         'expected_life_time' => 'required',
//         'maintenance_period' => 'required',
//         'maintenance_type' => 'required',
//         'maintenance_attachment' => 'required',
//     ]);
//     // dd($request->input('serial_number'));

//     // Create the product
//     $product = Product::create([
//         'equipment_type' => $request->input('equipment_type'),
//         'manufacturer' => $request->input('manufacturer'),
//         'model' => $request->input('model'),
//         'serial_number' => $request->input('serial_number'),
//         'expected_life_time' => $request->input('expected_life_time'),
//     ]);

   
//     $maintenance = Maintenance::create([
//     'maintenance_period' => 'required',
//     'maintenance_type' => 'required',
//     'maintenance_attachment' => 'required',]);

//     // Create the maintenance record with the product_id
  
//     // dd($request);
//     // Maintenance::create([
//     //     'product_id' => $product->id,
//     //     'maintenance_period' => $request->input('maintenance_period'),
//     //     'maintenance_type' => $request->input('maintenance_type'),
//     //     'maintenance_attachment' => $request->input('maintenance_attachment'),
//     // ]);

//     return redirect()->route('products.index')->with('success', 'Product and Maintenance added successfully');
// }


// public function store(Request $request)
// {
//     $request->validate([
//         'equipment_type' => 'required',
//         'manufacturer' => 'required',
//         'model' => 'required',
//         'serial_number' => 'required',
//         'expected_life_time' => 'required',
//         'maintenance_period' => 'required',
//         'maintenance_type' => 'required',
//         'maintenance_attachment' => 'required',
//     ]);

//     // Create the product
//     $product = Product::create([
//         'equipment_type' => $request->input('equipment_type'),
//         'manufacturer' => $request->input('manufacturer'),
//         'model' => $request->input('model'),
//         'serial_number' => $request->input('serial_number'),
//         'expected_life_time' => $request->input('expected_life_time'),
//     ]);

//     // Create the maintenance record with the product_id
//     // $request->validate([
//     //     'maintenance_period' => 'required',
//     //     'maintenance_type' => 'required',
//     //     'maintenance_attachment' => 'required|image|mimes:jpeg,png,jpg,gif,pdf,doc,svg',
//     // ]);

//     // $input_maintenance = $request->all();
//     // dd( $input_maintenance);
//     // Maintenance::create($input_maintenance);

//     $maintenance = Maintenance::create([
//         'product_id' => $product->id,
//         'maintenance_period' => $request->input('maintenance_period'),
//         'maintenance_type' => $request->input('maintenance_type'),
//         'maintenance_attachment' => $request->input('maintenance_attachment'),
//     ]);
//     dd( $maintenance);

//     return redirect()->route('products.index')->with('success', 'Product and Maintenance added successfully');
// }



public function store(Request $request)
{
    // Validate the product data
    $request->validate([
        'equipment_type' => 'required',
        'manufacturer' => 'required',
        'model' => 'required',
        'serial_number' => 'required',
        'expected_life_time' => 'required',
    ]);

    // Create the product
    $product = Product::create([
        'equipment_type' => $request->input('equipment_type'),
        'manufacturer' => $request->input('manufacturer'),
        'model' => $request->input('model'),
        'serial_number' => $request->input('serial_number'),
        'expected_life_time' => $request->input('expected_life_time'),
    ]);

    // Validate the maintenance data
    $request->validate([
        'maintenance_period' => 'required',
        'maintenance_type' => 'required',
        // 'maintenance_attachment' => 'nullable|required',
        'maintenance_attachment' => 'required|file',
        // 'maintenance_attachment' => 'required',
    ]);
    // dd($request->all());

    $request->validate([
        'video_id' => 'required',
       
    ]);
    $youtube= Youtube::create([
        'product_id' => $product->id,
        'video_id' => $request->input('video_id'),
    ]);

    // Create the maintenance record with the product_id
    $maintenance = Maintenance::create([
        'product_id' => $product->id,
        'maintenance_period' => $request->input('maintenance_period'),
        'maintenance_type' => $request->input('maintenance_type'),
        'maintenance_attachment' => $request->file('maintenance_attachment')->store('maintenance_attachments'),
    ]);
    // $sparePartsData = $request->input('spare_parts');
// dd($sparePartsData);
    // foreach ($sparePartsData as $sparePartData) {
        // dd($request);

        $partNames = $request->input('part_name');
        $piecesCounts = $request->input('pieces_count');

// Assuming the arrays have the same length
// foreach ($partNames as $key => $partName) {
    SparePart::create([
        'product_id' => $product->id,
        'part_name' => $partNames,
        'pieces_count' => $piecesCounts,
    ]);
// }

        
        // SparePart::create([
        //     'product_id' => $product->id,
        //     'part_name' =>$request->input('part_name'),
        //     'pieces_count' => $request->input('pieces_count'),
        // ]);
    // }
    

    return redirect()->route('products.index')->with('success', 'Product and Maintenance added successfully');
}

    /**
     * Display the specified resource.
     */
    // public function show(Product $product)
    // {
    //     $product = Product::with('youtube')->find($product->id);
    //     return view('products.show',compact('product'));

    // }
    public function show(Product $product)
    {
        $product = Product::with('youtube')->findOrFail($product ->id);
        // $youtube = Youtube::all(); // Fetch all YouTube videos
        $youtube = $product->youtube;
        return view('products.show', compact('product', 'youtube'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)

    {

        // $name="sall";
        // Session::put('variableName', $name);
        // Session::get('variableName');
        // $value = $request->session()->all();
        // dd($value);


        $request->validate([
            'equipment_type'=>'required',
            'manufacturer'=>'required',
            'model'=>'required',
            'serial_number'=>'required',
            'expected_life_time'=>'required',
        ]);
        $input = $request->all();
        // $input = $request->session()->all();
        // $session_id = Session::getId();
        // dd("this is session id --> ".$session_id."this information -->");
        // .implode('$name'));
        // dd($input);
        // $value = $request->session()->all();
        // dd ($input);

        // if ($image = $request->file('image')) {
        //    $destinationPath = 'images/';
        //    $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
        //    $image->move($destinationPath, $profileImage);
        //    $input['image'] = "$profileImage";
        // }else{
        //     unset( $input['image']);
        // }

        $product->update($input);

        // ===========================================
        $hooo='hello';
        // dd($product);
        // $id_pro=$product->id;
        // $name_pro=$product->name;
        // $desc_pro=$product->details;
        // $img=$product->image;
        // dd($name_pro) ;
// $sendMailData=[
//     'title'=>"New Editing product  ",
//     'id'=>"The product having '{$id_pro}' has been updated. ",

//    'body'=>"The product '{$name_pro}' has been updated.",
//    'description'=>" new Description is :'{$desc_pro}'",
//    'img'=>"New image is '{$img}' "


// ];
//   Mail::to('hussienbessan@gmail.com')->send(new MailDemo($sendMailData));


return redirect()->route('products.index')
->with('success', 'Product updated successfully');
   
    }
     
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Products deleted successfully');
    }
}

