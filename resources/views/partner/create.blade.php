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
         <div class="card-title text-uppercase text-center py-3">Add A Partner</div>

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

           <form method = "post" action = "{{ route('dashboard.partner.store') }}">
              @csrf
             
             <div class="form-group">
             <label for="partner_name" class="sr-only">Partner Name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="partner_name" name = "partner_name" class="form-control input-shadow" placeholder="Enter Partner Name">
              </div>
             </div>
             <div class="form-group">
             <label for="partner_type" class="sr-only">Partner Type</label>
              <div class="position-relative has-icon-right">
                 <select class = "form-control" name = "partner_type">
                      <option selected> Select Partner Type</option>
                      <option value="GOVT"> GOVT</option>
                      <option value="CSO"> CSO</option>
                 </select>
              </div>
             </div>
             <div class="form-group">
             <label for="type_description" class="sr-only">Partner Description</label>
              <div class="position-relative has-icon-right">
                <textarea class="form-control" col="30" row="10" name="type_description" id="type_description" placeholder="Partner Description"></textarea>
              </div>
             </div>
             <div class="form-group">
             <label for="state" class="sr-only">State</label>
              <div class="position-relative has-icon-right">
                 <select class = "form-control" name = "state" id="state" onchange="toggleLGA(this)">
                      <option value="" selected>- Select -</option>
                      @foreach($states as $state)
                        <option value='{{ $state->name }}'>{{ $state->name }}</option>
                      @endforeach
                 </select>
              </div>
             </div>
             <div class="form-group">
             <label for="lga" class="sr-only">LGA</label>
              <div class="position-relative has-icon-right">
                 <select class="form-control select-lga" name="lga" id="lga">                      
                 </select>
              </div>
             </div>
             <div class="form-group">
             <label for="email" class="sr-only">Email</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="email" name = "email" class="form-control input-shadow" placeholder="Enter Email">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only">Payment Email</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="payment_email" name = "payment_email" class="form-control input-shadow" placeholder="Enter Payment Advice Email">
              </div>
             </div>
             <input type="hidden" name="account_type" value="partner">
             <div class="form-group">
             <label for="batch_no" class="sr-only">First Telephone</label>
              <div class="position-relative has-icon-right">
                 <input type="tel" id="telephone1" name = "telephone1" class="form-control input-shadow" placeholder="Enter First Telephone">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only">Second Telephone</label>
              <div class="position-relative has-icon-right">
                 <input type="tel" id="telephone2" name = "telephone2" class="form-control input-shadow" placeholder="Enter Second Telephone">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only"> Address</label>
              <div class="position-relative has-icon-right">
                <textarea class="form-control" col="30" row="10" name="address" placeholder="Address"></textarea>
              </div>
             </div>

               <button type="submit" class="btn btn-primary btn-block" >Add Partner</button>
            
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