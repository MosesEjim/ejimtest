@extends('layout.app')

@section('content')
    <div class="table-container">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Roles</h5>
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td><a href="#"><i class="zmdi zmdi-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td><a href="#"><i class="zmdi zmdi-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td><a href="#"><i class="zmdi zmdi-edit"></i></a></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>

    </div>
    
@endsection