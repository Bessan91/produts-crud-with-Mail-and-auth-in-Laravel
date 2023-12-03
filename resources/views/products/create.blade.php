@extends('products.layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
@section('content')

<br>
<link rel="stylesheet" type="text/css" href="{{ asset('css/popUp.css') }}">
<div class="row">
    <div class="col align-self-start">
     <a   class="pre_btn " href="{{route('products.index')}}" > All products  </a>
    </div>

  </div>
<!-- <div class="row">
    <div class="col align-self-start">
        <a class="btn btn-primary" href="{{ route('products.index') }}">All products</a>
    </div>
</div> -->
<br>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class='container p-5'>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label labels labels_edit">Equipment Type</label>
            <br>
            <!-- <input type="text" class="form-control inputs input_edit" name="equipment_type"> -->
            <select name="equipment_type" id="equipment_type">
                 <!-- -- select an option --  -->
                   <option disabled selected value> </option>
                    <option value="Google_Pixel_8_Pro"> Google Pixel 8 Pro </option>
                    <option value="iPhone_15_Pro">  iPhone 15 Pro </option>
                   <option value="Samsung_Galaxy_S23_Ultra"> Samsung Galaxy S23 Ultra </option>
                   <option value="Google_Pixel_7a"> Google Pixel 7a </option>
                   <option value="OnePlus_11">  OnePlus 11 </option>
                   <option value="iPhone_15">  iPhone 15 </option>
                   
                  
                </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label labels labels_edit">Manufacturer</label>
            <textarea class="form-control inputs manufacturer " name="manufacturer" rows="3"></textarea>
        </div>
      
        <div class="mb-3">
            <label for="" class="form-label labels labels_edit">Model</label>
            <input type="text" class="form-control inputs input_edit" name="model">
        </div>
        <div class="mb-3">
            <label for="" class="form-label labels labels_edit">Serial Number </label>
            <input type="text" class="form-control inputs input_edit" name="serial_number">
        </div>
        <div class="mb-3">
            <label for="" class="form-label labels labels_edit">Expected Life Time </label>
            <input type="text" class="form-control inputs input_edit" name="expected_life_time">
        </div>
        <!-- ==========================End Equipment section -->
        <!-- ==========================  Section Maintenance =================== -->
        <hr>
        <div class="maintenance_Details ">
            <p class="intro_mainte d-flex justify-content-center" > Maintenance Details</p>
            <!-- class="d-flex justify-content-start" -->
            <div class="d-flex justify-content-around" >
            <!-- <br> -->
            <div class="Maintenance_Peroid">
              <label for="Maintenance_Peroid">Maintenance Peroid</label>
               <br>
         
             <!-- placeholder="Months" -->
             <input type="number" class="form-control" id="Maintenance_Period" name="maintenance_period" />
             <p class="months ">months</p>
            </div>
       
            <div class="Manitanince_type ">
              <p>Manitanince type </p>
               
                <select name="maintenance_type"  class="Select_maintenance "id="maintenance_type">
                 <!-- -- select an option --  -->
                   <option disabled selected value> </option>
                    <option value="charge">Charge</option>
                    <option value="screen">Screen</option>
                   <option value="hard_disk">Hard Disk</option>
                </select>
            </div>
             </div>
            <div class="mb-3">
           <label for="maintenance_attachment" class="form-label labels labels_edit mt-3">Maintenance attachments</label>
            <br>
            <div class="maintenance_attachment_div  ">
              
                <div clas="d-flex justify-content-center img_uplode ">
                <i class="fa-solid fa-file-arrow-up vv d-flex justify-content-center "></i>
                </div>
                <p class="text-center Select_p">Select a file or drag here </p>
                <div class="d-flex justify-content-center">
                <input type="file" class="file_attachments inputs" name="maintenance_attachment">
                </div>
                <!-- </div> -->
             </div>
             </div>
        </div>
        <!-- ============================nested Dropdown  -->
  
<!-- <div class="container">
  <h2>Multi-Level Dropdowns</h2>  

  <div class="dropdown mt-5 mb-4">
    <button class="btn Tutorials_btn dropdown-toggle " type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu ">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Frontend <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">HTML</a></li>
          <li><a tabindex="-1" href="#">Css</a></li>
          <li><a tabindex="-1" href="#">JavaScript</a></li>
          </ul>

          <li class="dropdown-submenu">
            <a class="test" href="#">Backend<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Java</a></li>
              <li><a href="#">C++</a></li>
              <li><a href="#">Python</a></li>
            </ul>
          </li>
    </ul>
  </div>
</div> -->
<!-- ====================================Youtube link ============ -->
<div class="mb-3">
            <label for="" class="form-label labels labels_edit">ID Link Youtube </label>
            <input type="text" class="form-control inputs input_edit" name="video_id">
        </div>

        <!-- ======================Section Spare Parts Mangment  -->
        <hr>
        <div> 
         <p>Spare Parts Management</p>

          <div id="repeaterContainer">
           <div class="repeater d-flex justify-content-around mb-3 ">
           <div>
            <label for="part_name">Part Name</label>
            <input type="text" name="part_name" />
          </div>
            <div>
            <label for="pieces_count">Pieces Count</label>
            <input type="number" name="pieces_count" />
            </div>
         </div>

   </div >



     <div class="d-flex  justify-content-center">
   <button id="showPopupButton" class="change_btn  d-flex justify-content-center">Create New Product </button>
      </div>

<!-- The popup HTML -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closeButton" class="close-button" onclick="hidePopup(event)">&times;</span>
        <h2>Adding product </h2>
        <p>Are you sure to create a new product </p>
        <button id="submitPopupButton" class="sure_create">yes, I do </button>
    </div>
</div>

</form>

        <script src="{{ asset('javaScript/main.js') }}"></script>

       
       

</script>
    </div>
    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>


@endsection
