@extends('layout.app')
@section('title', 'Create Sub Category')
@section('program_active', 'side-menu--active')
@section('content')
  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                    Add Program
                  </h2>
              </div>
              <div class="p-5" id="vertical-form">

              @if(session('error'))
                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600"> 
                  <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> 
                    <span><strong>Error!</strong> {{ session('error') }}!</span>
                  <i data-feather="x" class="w-4 h-4 ml-auto"></i> 
                </div>
                @endif

                @if(session('success'))
                <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white"> 
                  <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> 
                  <strong>Success!</strong> {{ session('success') }}
                  <i data-feather="x" class="w-4 h-4 ml-auto"></i> 
                </div>
              @endif

              @if($errors->any())
                <div class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">
                  <div class="flex items-center">
                      <div class="font-medium text-lg">Error</div>
                  </div>
                  <div class="mt-3">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              @endif 


              <form method="post" action="{{ route('dashboard.partner.store') }}">
                  @csrf
                  <div class="preview">
                      <div>
                          <label for="partner_name"> Partner Name</label>
                          <input type="text" id="partner_name" name = "partner_name" value="{{old('partner_name')}}"class="input w-full border mt-2" placeholder="Enter Partner Name">
                      </div>
                      <div>
                          <label for="partner_type"> Partner Type</label>
                          <select class = "input w-full border mt-2" name = "partner_type">
                            <option selected> Select Partner Type</option>
                            <option value="GOVT"> GOVT</option>
                            <option value="CSO"> CSO</option>
                          </select>
                      </div>
                      <div>
                          <label for="type_description">Partner Description</label>
                          <textarea class="input w-full border mt-2" col="30" row="10" name="type_description" value="{{old('type_description')}}"id="type_description" placeholder="Partner Description"></textarea>
                      </div>
                      <div>
                          <label for="state">State</label>
                          <select class = "input w-full border mt-2" name = "state" id="state" onchange="toggleLGA(this)">
                            <option value="" selected>- Select -</option>
                            @foreach($states as $state)
                              <option value='{{ $state->name }}'>{{ $state->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div>
                          <label for="lga">LGA</label>
                          <select class = "input w-full border mt-2 select-lga" name = "lga" id="lga" >
                          </select>
                      </div>
                      <div>
                          <label for="email"> Email</label>
                          <input type="email" id="email" name = "email" value="{{old('email')}}" class="input w-full border mt-2" placeholder="Enter Email">
                      </div>
                      <div>
                          <label for="payment_email"> Payment Email</label>
                          <input type="email" id="payment_email" name = "payment_email" value="{{old('payment_email')}}" class="input w-full border mt-2" placeholder="Enter Payment Email">
                      </div>
                      <div>
                          <label for="telephone1"> First Telephone</label>
                          <input type="tel" id="telephone1" name = "telephone1" value="{{old('telephone1')}}" class="input w-full border mt-2" placeholder="Enter First Telephone">
                      </div>
                      <div>
                          <label for="telephone2"> First Telephone</label>
                          <input type="tel" id="telephone2" name = "telephone2" value="{{old('telephone2')}}" class="input w-full border mt-2" placeholder="Enter Second Telephone">
                      </div>
                      <div>
                          <label for="address"> Address</label>
                          <textarea class="input w-full border mt-2" col="30" row="10" name="address" value="{{old('address')}}" placeholder="Address"></textarea>
                      </div>
                     <input type="hidden" name="account_type" value="partner">
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Save Category</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('assets/js/lga.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection