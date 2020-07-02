@extends('layout.app')
@section('title', 'Edit Partner')
@section('partner_active', 'side-menu--active')
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
         <div class="card-title text-uppercase text-center py-3">Edit Partner</div>

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

           <form method = "post" action = "{{ route('dashboard.partner.update', $partner->id) }}">
              @method('PUT')
              @csrf
             <div class="form-group">
             <label for="partner_id" class="sr-only">Partner ID</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="partner_id" name ="partner_id" value = "{{ $partner->partner_id }}" class="form-control input-shadow" placeholder="Enter Partner ID">
              </div>
             </div>
             <div class="form-group">
             <label for="partner_name" class="sr-only">Partner Name</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="partner_name" name = "partner_name" value = "{{ $partner->partner_name }}" class="form-control input-shadow" placeholder="Enter Partner Name">
              </div>
             </div>
             <div class="form-group">
             <label for="partner_type" class="sr-only">Partner Type</label>
              <div class="position-relative has-icon-right">
                 <select class = "form-control" name = "partner_type">
                      
                      <option value = "GOVT" {{ $partner->partner_type=='GOVT' ? 'selected':'' }}> GOVT</option>
                      <option value = "CSO" {{ $partner->partner_type=='GOVT' ? 'selected':'' }}> CSO</option>
                 </select>
              </div>
             </div>
             <div class="form-group">
             <label for="type_description" class="sr-only">Partner Description</label>
              <div class="position-relative has-icon-right">
                <textarea class="form-control" col="30" row="10" value = "{{ $partner->type_description }}" name="type_description" id="type_description" placeholder="Partner Description"></textarea>
              </div>
             </div>
             <div class="form-group">
             <label for="state" class="sr-only">State</label>
              <div class="position-relative has-icon-right">
                 <select class = "form-control" name = "state" id="state" onchange="toggleLGA(this)">
                      <option value="" selected="selected" >- Select -</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='Akwa Ibom'>Akwa Ibom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
							
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
                 <input type="text" id="email" name = "email" value = "{{ $partner->email }}" class="form-control input-shadow" placeholder="Enter Email">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only">Payment Email</label>
              <div class="position-relative has-icon-right">
                 <input type="text" id="payment_email" name = "payment_email" value = "{{ $partner->payment_email }}" class="form-control input-shadow" placeholder="Enter Payment Advice Email">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only">First Telephone</label>
              <div class="position-relative has-icon-right">
                 <input type="tel" id="telephone1" name = "telephone1" value = "{{ $partner->telephone1 }}" class="form-control input-shadow" placeholder="Enter First Telephone">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only">Second Telephone</label>
              <div class="position-relative has-icon-right">
                 <input type="tel" id="telephone2" name = "telephone2" value = "{{ $partner->telephone2 }}" class="form-control input-shadow" placeholder="Enter Second Telephone">
              </div>
             </div>
             <div class="form-group">
             <label for="batch_no" class="sr-only"> Address</label>
              <div class="position-relative has-icon-right">
                <textarea class="form-control" col="30" row="10" name="address" value = "{{ $partner->address }}" placeholder="Address"></textarea>
              </div>
             </div>

               <button type="submit" class="btn btn-primary btn-block" >Finish Edit</button>
            
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