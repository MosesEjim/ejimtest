@extends('layout.app')

@section('title', 'Partners')

@section('content')


	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">All Products</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listing All</li>
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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>All Products</div>
            <div class="card-body">
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
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>email</th>
                        <th>payment email</th>
                        <th>partner type</th>
                        <th>description</th>
                        <th>city</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($partners as $partner)
                    <tr>
                        <td>{{ $partner->partner_id }}</td>
                        <td>{{ $partner->partner_name }}</td>
                        <td>{{ $partner->email }}</td>
                        <td>{{ $partner->payment_email }}</td>
                        <td>{{ $partner->partner_type }}</td>
                        <td>{{ $partner->type_description }}</td>
                        <td>{{ $partner->city }}</td>
                        
                        <td>
                        <div class="btn-group m-1">
                        <a href="{{ route('dashboard.partner.edit', $partner->id) }}" data-toggle="tooltip" data-placement="top" data-original-title="Edit" class="btn btn-outline-info waves-effect waves-light"> 
                            <i class="fa fa-edit"></i> 
                          </a>
                          {{-- <button data-toggle="tooltip" data-placement="top" data-original-title="Delete" type="button" class="btn btn-outline-danger waves-effect waves-light"> <i class="fa fa fa-trash-o"></i> </button> --}}
                        </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>email</th>
                        <th>payment email</th>
                        <th>partner type</th>
                        <th>description</th>
                        <th>city</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div>
@endsection
