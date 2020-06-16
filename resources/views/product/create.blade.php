@extends('layout.app')
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
         <div class="card-title text-uppercase text-center py-3">Create A Product</div>
           <form>
             <div class="form-group">
             <label for="product_name" class="sr-only">Product Name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="product_name" name ="product_name" class="form-control input-shadow" placeholder="Enter Product Name">
              </div>
             </div>
             <div class="form-group">
             <label for="brand" class="sr-only">Brand Name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="brand" name = "brand" class="form-control input-shadow" placeholder="Enter Brand Name">
              </div>
             </div>
             <div class="form-group">
             <label for="material_no" class="sr-only">Material Number</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="material_no" name = "material_no" class="form-control input-shadow" placeholder="Enter Material Number">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only">Batch Number</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="batch_no" name = "batch_no" class="form-control input-shadow" placeholder="Enter Batch Number">
              </div>
             </div>
             <div class="form-group">
             <label for="category_id" class="sr-only">Category ID</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="category_id" name = "category_id" class="form-control input-shadow" placeholder="Enter Category ID">
              </div>
             </div>
             
           
                <button type="submit" class="btn btn-primary btn-block" href = "{{ route('createproduct') }}">Create Product</button>
            
            </form>
          </div>
         </div>
        </div>
   
    <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
   
   
   
   </div><!--wrapper-->

@endsection