@extends('layout.app')

@section('title', 'Survey Type')
@section('program_active', 'side-menu--active')
@section('content')
  
  <div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL SURVEY TYPES
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      <a href="{{ route('dashboard.eum.surveytype.create') }}" class="button box flex items-center text-gray-700" style="margin-right:10px"> 
                        <i data-feather="folder-plus" class="hidden sm:block w-4 h-4 mr-2"></i> Create Survey Type 
                      </a>
                      
                      <button class="button box flex items-center text-gray-700"> 
                        <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel 
                      </button>
                      
                      <button class="ml-3 button box flex items-center text-gray-700"> 
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


                  <table class="table table-report sm:mt-2">
                      <thead>
                          <tr>
                              <th class="whitespace-no-wrap">NAME</th>
                              <th class="whitespace-no-wrap">SUB PROGRAM</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($surveytypes as $surveytype)
                          <tr class="intro-x">
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $surveytype->name}} </a>                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $surveytype->subCategory->name}}</a>                                  
                              </td>
                              
                              <td class="table-report__action">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.eum.surveytype.edit', $surveytype->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.eum.questionnaire.create', $surveytype->slug) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Create Survey </a>
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.uem.surveytype.question.index', $surveytype->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> View Survey Questions</a>
                                      <a class="flex items-center text-theme-6" href="{{ route('dashboard.eum.surveytype.delete', $surveytype->id) }}"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                  </div>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                {{ $surveytypes->links('vendor.pagination.tailwind') }}
              </div>
          </div>
          <!-- END: Weekly Top Seller -->
      </div>
  </div>
@endsection
