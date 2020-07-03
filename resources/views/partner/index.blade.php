@extends('layout.app')
@section('title', 'Partners')
@section('partner_active', 'side-menu--active')
@section('content')
<div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL PARTNERS
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      <button class="button box flex items-center text-gray-700" id="excel"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                      <button class="ml-3 button box flex items-center text-gray-700" id="pdf"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                  </div>
              </div>
              <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                  <table class="table table-report sm:mt-2" id="table">
                      <thead>
                          <tr>

                              <th>PARTNER NAME</th>
                              <th>EMAIL</th>
                              <th>PAYMENT EMAIL</th>
                              <th>PARTNER TYPE</th>
                              <th>PARTNER STATE</th>
                              <th>DESCRIPTION</th>
                              <th>CITY</th>
                              <th>ACTIONS</th>
                  
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($partners as $partner)
                          <tr class="intro-x">
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->partner_name }} </a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->email }} </a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->payment_email }} </a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->partner_type }}</a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->state }}</a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->type_description }}</a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $partner->city }}</a> 
                                  
                              </td>
                              
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.partner.edit', $partner->id) }}"> <i data-feather="edit-3" class="w-4 h-4 mr-1"></i> Edit </a>
                                  </div>
                              </td>
                          </tr>
                          
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
         
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
                ignoreColumn: [7]

            });
        });

        $('#pdf').click(function(e){
            $('#table').tableExport({
                type: 'pdf',
                excape: 'false',
                ignoreColumn: [7]
            });
        });
    });
</script>
@endsection
