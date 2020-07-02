@extends('layout.app')
@section('title', 'Edit Product')
@section('product_active', 'side-menu--active')
@section('content')
  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                    Edit Product
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


              <form method="post" action="{{ route('dashboard.product.update', $product->id) }}">
                  @csrf
                  <div class="preview">
                      <div>
                          <label for="product_name"> Product Name</label>
                          <input type="text" id="product_name" name ="product_name" value="{{$product->product_name}}" class="input w-full border mt-2" placeholder="Enter Product Name" required>
                      </div>
                      <div>
                          <label for="brand"> Brand</label>
                          <input type="text" id="brand" name = "brand" value="{{$product->brand}}" class="input w-full border mt-2" placeholder="Enter Brand Name">
                      </div>
                      <div>
                          <label for="material_no"> Material No</label>
                          <input type="text" id="material_no" name = "material_no" value="{{$product->material_no}}" class="input w-full border mt-2" placeholder="Enter Material Number">
                      </div>
                      <div>
                          <label for="batch_no"> Batch No</label>
                          <input type="text" id="batch_no" name = "batch_no" value="{{$product->batch_no}}" class="input w-full border mt-2" placeholder="Enter Batch Number">
                      </div>
                      
                      <div class="mt-3">
                          <label for="category_id">Category</label>
                          <select class="input w-full border mt-2" name = "category_id">
                            @foreach ($categories as $category)
                                  <option value = "{{ $category->id }} " {{ $product->category_id == $category->id ? 'selected':''}}> {{ $category->title }}</option>
                            @endforeach
                          </select>
                      </div>
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Save Product</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection
