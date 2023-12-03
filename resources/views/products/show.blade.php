@extends('products.layout')

@section('content')


<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/popUp.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/popUp.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&display=swap" rel="stylesheet">


<br>

<div class="row">
    <div class="col align-self-start">
     <a  class="show_products " href="{{route('products.index')}}" >All products</a>
    </div>

  </div>
  <br>


 


<div class=" container ms-5 ">
    <div class="mb-3 name_product ">
        <h3> Equipment Type: </h3>
        <p class=" ">{{$product->equipment_type}}</p>

    </div>
    <hr>
    <div class="mb-3 Description_product ">
        <h3> Manufacturer:</h3>
        <p>{{$product->manufacturer}}</p>
    </div>
<hr>
    <!-- <div class="mb-3">
        <h3 class=img_product> Model: </h3>
        <p>{{$product->model}}</p> -->
    <!-- <img src="/images/{{$product->image}}"width="300px">; -->
    <!-- </div> -->
    <div class="mb-3 Description_product ">
        <h3> Model:</h3>
        <p>{{$product->model}}</p>
    </div>
    <hr>
    <div class="mb-3 Description_product ">
        <h3> Serial Number:</h3>
        <p>{{$product->serial_number}}</p>
    </div>
    <hr>
    <div class="mb-3 Description_product ">
        <h3> Expected Life Time :</h3>
        <p>{{$product->expected_life_time}}</p>
    </div>
    
  
    @foreach ($youtube as $youtube)
    <div class="Description_product mb-3">
         <h3 > Youtube vedio  :</h3>
        <iframe width="640" height="360" src="https://www.youtube.com/embed/{{ $youtube->video_id }}" frameborder="0" allowfullscreen></iframe>
    </div>
@endforeach

    </div>

    </div>
</div>




@endsection

