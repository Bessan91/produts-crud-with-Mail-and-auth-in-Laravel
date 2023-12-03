@extends('products.layout')

@section('content')


<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/popUp.css') }}">

<br>
<div class="row">
    <div class="col align-self-start">
     <a   class="pre_btn " href="{{route('products.index')}}" >See Previous  </a>
    </div>

  </div>
  <br>


  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
        @endforeach

    </ul>
  </div>

  @endif


<div class='container p-5'>

<form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="" class="form-label labels labels_edit">Equipment Type :</label>
  <input type="text" class="form-control inputs input_edit" name="equipment_type" value="{{$product->equipment_type}}" >
 </div>
 <hr>

 <div class="mb-3">
   <label for="" class="form-label labels labels_edit">Manufacturer :</label>
   <textarea class="form-control inputs" name="manufacturer" id="" rows="3">
    {{$product->manufacturer}}
   </textarea>
 </div>
 <hr>
 <div class="mb-3">
 <label for="" class="form-label labels labels_edit">Model : </label>
 <input type="text" class="form-control inputs input_edit" name="model" value="{{$product->model}}" >
</div>

<div class="mb-3">
 <label for="" class="form-label labels labels_edit">Serial Number : </label>
 <input type="number" class="form-control inputs input_edit" name="serial_number" value="{{$product->serial_number}}" >
</div>

<div class="mb-3">
 <label for="expected_life_time" class="form-label labels labels_edit"> Expected life time : </label>
 <input type="number" class="form-control inputs input_edit" name="expected_life_time" value="{{$product->expected_life_time}}" >
</div>



 <!-- <input type="file" class="form-control mb-2 inputs" name="model" > -->
    <!-- <img  class="Currant_img"src="/images/{{$product->image}}" width="400px"> -->
<!-- </div> -->
 <div class="d-flex justify-content-center">
   <button id="showPopupButton" class="change_btn  d-flex justify-content-center">Change Information For Product </button>
</div>
<!-- The popup HTML -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closeButton" class="close-button" onclick="hidePopup(event)">&times;</span>
        <p class="warning_p">Warning </p>
        <hr>
        <p>Are you sure to saved a new information ?</p>
        <button id="submitPopupButton" class="Sure_edit">Continue Editing</button>
    </div>
</div>

    
<script src="{{ asset('javaScript/main.js') }}"></script>

</form>


</div>

@endsection
