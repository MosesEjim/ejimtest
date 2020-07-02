@extends('layout.app')
@section('title', 'Edit Stock')
@section('stock_active', 'side-menu--active')
@section('content')
  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                    Edit Stock
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


              <form method="post" action="{{ route('dashboard.stock.update', $stock->id) }}">
                  @method('PUT')
                  @csrf
                  <div class="preview">
                      <div>
                          <label for="product_id"> Select Product</label>
                          <select name="product_id" id="" class="input w-full border mt-2">
                            @foreach($products as $product)
                              <option value="{{$product->id}}" {{$stock->product_id==$product->id ? 'selected' : ''}}>{{$product->product_name}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div>
                          <label for="quantity"> Qantity</label>
                          <input type="text" id="quantity" name ="quantity" value="{{$stock->quantity}}" class="input w-full border mt-2" placeholder="Enter quantity">
                      </div>
            
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Save Stock</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection



