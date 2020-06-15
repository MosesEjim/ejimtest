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
         <div class="card-title text-uppercase text-center py-3">Create A Role</div>
           <form>
             <div class="form-group">
             <label for="exampleInputUsername" class="sr-only">Role Name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Role Name">
              </div>
             </div>
             <div class="form-group">
             <label for="exampleInputPassword" class="sr-only">Role Description</label>
              <div class="position-relative has-icon-right">
                  <textarea name="roledescription" id="" cols="30" rows="10" class ="form-control" placeholder = "Describe Role"></textarea>
              </div>
             </div>
           
                <button type="button" class="btn btn-primary btn-block">Create Role</button>
            
            </form>
          </div>
         </div>
        </div>
   
    <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
   
   
   
   </div><!--wrapper-->

@endsection