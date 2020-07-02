@extends('layout.app')
@section('title', 'Edit Vendor')
@section('vendor_active', 'side-menu--active')
@section('content')
  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                    Edit Vendor
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


              <form method="post" action="{{ route('dashboard.vendor.update', $vendor->id) }}">
                  @method("PUT")
                  @csrf
                  <div class="preview">
                      <div>
                          <label for="name">Vendor Name</label>
                          <input type="text"  id="name" name="name" value="{{$vendor->name}}" class="input w-full border mt-2" placeholder="Enter Vendor Name" required>
                      </div>

                      <div>
                          <label for="name">Vendor Phone</label>
                          <input type="tel" id="phone" name ="phone" value="{{$vendor->phone}}" class="input w-full border mt-2" placeholder="Enter Tel no" required>
                      </div>

                      <div>
                          <label for="name">Vendor Plate Number</label>
                          <input type="text" id="plate_number" name ="plate_number" value="{{$vendor->plate_number}}" class="input w-full border mt-2" placeholder="Enter Plate number">
                      </div>
                      
                      
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Save Record</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection
