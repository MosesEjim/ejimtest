@extends('layout.app')

@section('title', 'Dispatch Product')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Dispatch Product</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dispatch</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->


    <div class="row">
      <div class="col-lg-8">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Dispatch Product</div>
           <hr>

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


            <form method="post" action="{{ route('dashboard.product.dispatch.store') }}">
              @csrf
              <div class="row">
                <div class="col-sm-12 col-md-8">
                  <div class="form-group">
                    <div class="position-relative has-icon-right">
                    <label for="product_id">Product</label>
                      <select class = "form-control" name="product_id" id="product_id">
                        <option value="" selected>- Select -</option>
                        @foreach($products as $product)
                          <option value='{{ $product->id }}'>{{ $product->product_name }}: - <small>in-stock({{ $product->stock->in_stock }})</small></option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity" value="{{ old('quantity') }}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="position-relative has-icon-right">
                  <label for="partner_id">Partner</label>
                  <select class="form-control" name="partner_id" id="partner_id">
                    <option value="" selected>- Select -</option>
                    @foreach($partners as $partner)
                      <option value='{{ $partner->id }}'>{{ $partner->partner_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-8">
                  <div class="form-group">
                    <div class="position-relative has-icon-right">
                    <label for="vendor_id">Dispatch Agent</label>
                      <select class = "form-control" name="vendor_id" id="vendor_id">
                        <option selected>- Select -</option>
                        @foreach($vendors as $vendor)
                          <option value='{{ $vendor->id }}'>{{ $vendor->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <div class="position-relative has-icon-right">
                    <label for="state_dispatched_to">State</label>
                      <select class = "form-control" name="state_dispatched_to" id="state_dispatched_to">
                        <option value="" selected>- Select -</option>
                        @foreach($states as $state)
                          <option value='{{ $state->name }}'>{{ $state->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="description">Description (optional)</label>  
                <textarea name="description" id="description" cols="5" class="form-control">
                  {{ old('description') }}
                </textarea>
              </div>
           
           <div class="form-group">
            <button type="submit" class="btn btn-primary px-5"><i class="icon-lock"></i> Save Category</button>
          </div>
          </form>
         </div>
         </div>
      </div>

    </div><!--End Row-->

<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
   </div>

@endsection

