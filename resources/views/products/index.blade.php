@extends('products.layout')

@section('content')
<br>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/popUp.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&display=swap" rel="stylesheet">


@if ($message = Session::get('success'))
<div class="alert alert-success" >
    {{ $message }}
</div>
@endif
<div class="col align-self-start">
    <a class="btn create_btn" href="{{ route('products.create') }}" >Add a Nwe product</a>
</div>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Equipment Type</th>
            <th class="autoDetails">Manufacturer</th>
            <th>Model</th>
            <th class="d-flex justify-content-center ">Actions</th>
            <h1></h1>
        </tr>
    </thead>
    <tbody >
        @foreach ($products as $item)
        <tr >
        <!-- protected $fillable = [ 'equipment_type','manufacturer','model','serial_number','expected_life_time']; -->
            <td>{{ $item->id }}</td>
            <td>{{ $item-> equipment_type}}</td>
            <td class="autoDetails">{{ $item->manufacturer }}</td>
            <td class="autoDetails">{{ $item->model}}</td>
            <td class="autoDetails">{{ $item->serial_number}}</td>
            <td class="autoDetails">{{ $item->expected_life_time}}</td>
            <td class="d-flex justify-content-center cont">
                <a class="btn btn-primary " href="{{ route('products.edit', $item->id) }}">Edit</a>
                <a class="btn btn-info " href="{{ route('products.show', $item->id) }}">Show</a>
                <form  class=""action="{{ route('products.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    
                    <!-- <button id="showPopupButton" class="btn btn-danger">Delete</button>


                                <div id="popup" class="popup">
                              <div class="popup-content">
                        <span id="closeButton" class="close-button" onclick="hidePopup(event)">&times;</span>
                           <h2>Popup Title</h2>
                           <p>This is a simple HTML popup using JavaScript.</p>
                        <button type="submit" class="btn btn-danger ">Delete</button>
    </div>
</div> -->

<button id="showPopupButton" class="btn btn-danger">Delete </button>

<!-- The popup HTML -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closeButton" class="close-button" onclick="hidePopup(event)">&times;</span>
        <i class="fa-solid fa-ban Delete_Warning"></i>
        <h2>Are you Sure </h2>
        <p>Do you really want to Delete this product  </p>
        <button type="submit" class="btn btn-danger ">Delete</button>
    </div>
</div>
                </form>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- pagination  -->
<div class="">
    {{ $products->links() }}
</div>

<!-- End pagination  -->
    
<script src="{{ asset('javaScript/main.js') }}"></script>
@endsection

