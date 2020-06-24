@extends('layout.app')
@section('title', 'Create Partner')

@section('content')

<!-- wrapper -->
<div id="wrapper">

<div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
   <div class="card card-authentication1 mx-auto my-5">
       <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{URL::asset('assets/images/logo-icon.png')}}" alt="logo icon" width = "50px" height ="50px">
            </div>
         <div class="card-title text-uppercase text-center py-3">Add A Sub Category</div>

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

           <form method = "post" action = "{{ route('dashboard.eum.subprogram.store') }}">
              @csrf
             


             <div class="form-group">
                
                <div class="position-relative has-icon-right">
                <label for="program_id">Program</label>
                  <select class="form-control select-lga" name="program_id" id="program_id">
                  <option> -- Select a Program --</option>
                  @foreach($programs as $program)
                        <option value="{{$program->id}}">{{$program->name}}</option>
                  @endforeach
                  </select>
                </div>
             </div>

             <div class="form-group">
                <label for="partner_name" class="sr-only">Sub category name</label>
                <div class="position-relative has-icon-right">
                  <input type="text" id="name" name = "name" class="form-control input-shadow" placeholder="Enter Sub Category Name">
                </div>
             </div>

        

               <button type="submit" class="btn btn-primary btn-block" >Add SubProgram</button>
            
            </form>
          </div>
         </div>
        </div>
   
    <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
   
   
   
   </div><!--wrapper-->

@endsection

@section('scripts')
    <script src="{{ URL::asset('assets/js/lga.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection