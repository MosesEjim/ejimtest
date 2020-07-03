@extends('layout.app')

@section('title', 'Users')

@section('user_active', 'side-menu--active')

@section('content')
  <div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL USERS
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      <button class="button box flex items-center text-gray-700" id="excel"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                      <button class="ml-3 button box flex items-center text-gray-700" id='pdf'> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                  </div>
              </div>
              <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                  <table class="table table-report sm:mt-2" id='table'>
                      <thead>
                          <tr>
                            <th class="whitespace-no-wrap">S/N</th>
                              <th class="whitespace-no-wrap">NAME</th>
                              <th class="text-center whitespace-no-wrap">Email</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php $counter = 0 @endphp
                        @foreach($users as $user)
                          <tr class="intro-x">
                            <td>
                              <a href="" class="font-medium whitespace-no-wrap">{{ ++$counter }} </a>                                  
                            </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $user->first_name }} {{ $user->last_name }}</a> 
                                  <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $user->email }}</div>
                              </td>
                              <td class="text-center">{{ $user->email }}</td>
                              
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{route('dashboard.user.edit', $user->slug)}}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center text-theme-6" href="{{route('dashboard.user.delete', $user->slug)}}"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                  </div>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                  <ul class="pagination">
                     {{$users->links('vendor.pagination.tailwind')}}
                  </ul>
              </div>
          </div>
          <!-- END: Weekly Top Seller -->
      </div>
  </div>
@endsection

@section('scripts')
<script type='text/javascript' src="{{URL::asset('assets/js/jquery.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('assets/js/tableExport.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('assets/js/jquery.base64.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('assets/js/jspdf.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('assets/js/sprintf.js')}}"></script>
<script type='text/javascript' src="{{URL::asset('assets/js/base64.js')}}"></script>
<script type='text/javascript'>
    $(document).ready(function(e){
        $('#excel').click(function(e){
            $('#table').tableExport({
                type: 'excel',
                escape: 'false',
                ignoreColumn: [2]

            });
        });

        $('#pdf').click(function(e){
            $('#table').tableExport({
                type: 'pdf',
                excape: 'false',
                ignoreColumn: []
            });
        });
    });
</script>
@endsection
