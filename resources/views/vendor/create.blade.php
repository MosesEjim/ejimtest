@extends('layout.app')
@section('title', 'Add Vendor')

@section('content')

<!-- Start wrapper-->
<div id="wrapper">

<div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
   <div class="card card-authentication1 mx-auto my-5">
       <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{URL::asset('assets/images/logo-icon.png')}}" alt="logo icon" width = "50px" height ="50px">
            </div>
         <div class="card-title text-uppercase text-center py-3">Add Vendor</div>

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert">
                <i class="fa fa-times"></i>
              </div>
              <div class="alert-message">
                <span><strong>Danger!</strong> {{ session('error') }}!</span>
              </div>
            </div>
          @endif

          @if(session('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <div class="alert-icon contrast-alert">
              <i class="fa fa-check"></i>
            </div>
            <div class="alert-message">
              <span><strong>Success!</strong> {{ session('success') }}</span>
            </div>
          </div>
          @endif  

          @if ($errors->any())
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif 

           <form method = "post" action = "{{ route('dashboard.vendor.store') }}">
              @csrf
             
             <div class="form-group">
             <label for="product_name" class="sr-only">name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="name" name ="name" class="form-control input-shadow" placeholder="Enter vendor name">
              </div>
             </div>
             <div class="form-group">
             <label for="product_name" class="sr-only">Phone</label>
              <div class="position-relative has-icon-right">
                 <input type="tel" id="phone" name ="phone" class="form-control input-shadow" placeholder="Enter Tel no">
              </div>
             </div>
             <div class="form-group">
             <label for="product_name" class="sr-only">Plate Number</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="plate_number" name ="plate_number" class="form-control input-shadow" placeholder="Enter Plate number">
              </div>
             </div>
            <button type="submit" class="btn btn-primary btn-block" >Add Vendor</button>
            
            </form>
          </div>
         </div>
        </div>
   
    <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
   
   
   
   </div><!--wrapper-->

@endsection