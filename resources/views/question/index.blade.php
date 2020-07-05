@extends('layout.app')

@section('title', 'All Question/Option Types')

@section('program_active', 'side-menu--active')

@section('content')
<div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL QUESTIONS
                  </h2>
              </div>
              <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">

                <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">                    
                  <div class="hidden md:block mx-auto text-gray-600"></div>
                  <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-400 relative text-gray-700">
                      <form action="{{ route('dashboard.uem.question.search') }}" method="post">
                        @csrf
                        <input type="text" name="search" class="input w-400 box pr-10 placeholder-theme-13" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                      </form> 
                    </div>
                  </div>
                </div>
                  @if(session('error'))                    
                    <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white"> 
                      <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> 
                      <span><strong>Error!</strong> {{ session('error') }}!</span>
                      <i data-feather="x" class="w-4 h-4 ml-auto"></i> 
                    </div>
                  @endif

                  @if(session('success'))
                    <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white"> 
                      <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> 
                      <strong>Success! </strong> {{ session('success') }}
                      <i data-feather="x" class="w-4 h-4 ml-auto"></i> 
                    </div>
                  @endif
                  
                  <table class="table table-report sm:mt-2">
                    <thead>
                      <tr>
                        <th class="whitespace-no-wrap">S/N</th>
                        <th class="whitespace-no-wrap">QUESTION</th>
                        <th class="whitespace-no-wrap">PROGRAM</th>
                        <th class="whitespace-no-wrap">SUB PROGRAM</th>
                        <th class="whitespace-no-wrap">SURVEY TYPE</th>
                        <th class="text-center whitespace-no-wrap">ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $i = 1;
                      @endphp
                      @foreach($questions as $question)
                        <tr class="intro-x">
                          <td>
                              <a href="" class="font-medium whitespace-no-wrap">{{ $i++ }} </a>                                  
                          </td>
                          <td>
                              <a href="" class="font-medium">{{ $question->question_text }} </a>                                  
                          </td>
                          
                          <td>
                              <a href="" class="font-medium">{{ $question->program_name }} </a>                                  
                          </td>
                          <td>
                              <a href="" class="font-medium">{{ $question->sub_category_name }} </a>                                  
                          </td>
                          <td>
                              <a href="" class="font-medium">{{ $question->survey_type_name }} </a>                                  
                          </td>
                              
                          <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                              <a class="flex items-center mr-3" href="{{ route('dashboard.uem.surveytype.question.edit', $question->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                              <a class="flex items-center mr-3" href="{{ route('dashboard.uem.surveytype.question.show', $question->id) }}"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> View </a>
                              <a class="flex items-center text-theme-6" href="{{ route('dashboard.uem.surveytype.question.delete', $question->id) }}"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
              <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                {{ $questions->links('vendor.pagination.tailwind') }}
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
                ignoreColumn: [5]

            });
        });

        $('#pdf').click(function(e){
            $('#table').tableExport({
                type: 'pdf',
                excape: 'false',
                
            });
        });
    });
</script>
@endsection