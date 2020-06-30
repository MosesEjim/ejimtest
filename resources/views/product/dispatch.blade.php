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
                    Dispatch Products
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


              <form method="post" action="{{ route('dashboard.product.dispatch.store') }}">
                  @csrf
                  <div class="preview">
                      <div>
                          <label for="product_id"> Product</label>
                          <select class = "input w-full border mt-2" name="product_id" id="product_id">
                            <option value="" selected>- Select -</option>
                            @foreach($products as $product)
                              <option value='{{ $product->id }}'>{{ $product->product_name }}: - <small>in-stock({{ $product->stock->in_stock }})</small></option>
                            @endforeach
                          </select>
                      </div>
                      <div>
                          <label for="quantity"> Quantity</label>
                          <input type="text" name="quantity" class="input w-full border mt-2" id="quantity" placeholder="Enter quantity" value="{{ old('quantity') }}">
                      </div>
                      <div>
                        <label for="partner_id">Partner</label>
                        <select class="input w-full border mt-2" name="partner_id" id="partner_id">
                          <option value="" selected>- Select -</option>
                          @foreach($partners as $partner)
                            <option value='{{ $partner->id }}'>{{ $partner->partner_name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div>
                          <label for="vendor_id">Dispatch Agent</label>
                          <select class = "input w-full border mt-2" name="vendor_id" id="vendor_id">
                            <option selected>- Select -</option>
                            @foreach($vendors as $vendor)
                              <option value='{{ $vendor->id }}'>{{ $vendor->name }}</option>
                            @endforeach
                          </select>
                      </div>
                      
                      <div class="mt-3">
                        <label for="state_dispatched_to">State</label>
                        <select class = "input w-full border mt-2" name="state_dispatched_to" id="state_dispatched_to">
                          <option value="" selected>- Select -</option>
                          @foreach($states as $state)
                            <option value='{{ $state->name }}'>{{ $state->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mt-3">
                       <label for="description">Description (optional)</label>  
                        <textarea name="description" id="description" cols="5" class="input w-full border mt-2">
                          {{ old('description') }}
                        </textarea>
                      </div>
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Dispatch</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection

