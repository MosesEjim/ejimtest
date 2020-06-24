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
         <div class="card-title text-uppercase text-center py-3">Update A Program</div>
           <form method="POST" action="{{route('dashboard.eum.program.update', $program->id)}}">
            @csrf
            @method("PUT")
             <div class="form-group">
             <label for="exampleInputUsername" class="sr-only">Program Name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="name" name="name" value="{{$program->name}}" class="form-control input-shadow" placeholder="Enter Program Name">
              </div>
             </div>
            
           
                <button type="submit" class="btn btn-primary btn-block">Update Program</button>
            
            </form>
          </div>
         </div>
        </div>
   
    <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
   
   
   
   </div><!--wrapper-->

@endsection