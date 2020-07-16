@extends('layout.app')
@section('title', 'Responses')
@section('answer_active', 'side-menu--active')
@section('content')
  
  <div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL RESPONSES
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      
                      <button class="button box flex items-center text-gray-700" id="excel"> 
                        <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2" ></i> Export to Excel 
                      </button>
                      
                      <button class="ml-3 button box flex items-center text-gray-700" id="pdf"> 
                        <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF 
                      </button>
                  </div>
              </div>
              <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
              
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


                  <table class="table table-report sm:mt-2" id='table'> 
                      <thead>
                          <tr>
                              <th class="">QUESTION</th>
                              <th class="">ANSWER</th>
                              <th class="text-center whitespace-no-wrap">ACTION</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($responses as $response)
                          <tr class="intro-x">
                              <td>
                                  <a href="" class="font-medium">{{ $response->question->question_text}} </a>                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium ">{{ $response->answer}} </a>                                  
                              </td>
                              <td class="table-report__action">
                                  <div class="flex justify-center items-center">
                                  <a class="flex items-center mr-3" href="{{ route('dashboard.eum.answer.delete',['id' => $response->reference_id, 'created_at'=>$response->created_at]) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Delete Response </a>
                                  </div>
                              </td>
                          </tr>
                        @endforeach
                        
                      </tbody>
                  </table>
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
