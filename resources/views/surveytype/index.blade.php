@extends('layout.app')

@section('title', 'Stock')

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
                              
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.eum.surveytype.edit', $surveytype->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.eum.questionnaire.create', $surveytype->slug) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Create Survey </a>
                                      <a class="flex items-center text-theme-6" href="{{ route('dashboard.eum.surveytype.delete', $surveytype->id) }}"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                  </div>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                  <ul class="pagination">
                      <li>
                          <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                      </li>
                      <li>
                          <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                      </li>
                      <li> <a class="pagination__link" href="">...</a> </li>
                      <li> <a class="pagination__link" href="">1</a> </li>
                      <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                      <li> <a class="pagination__link" href="">3</a> </li>
                      <li> <a class="pagination__link" href="">...</a> </li>
                      <li>
                          <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                      </li>
                      <li>
                          <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                      </li>
                  </ul>
                  <select class="w-20 input box mt-3 sm:mt-0">
                      <option>10</option>
                      <option>25</option>
                      <option>35</option>
                      <option>50</option>
                  </select>
              </div>
          </div>
          <!-- END: Weekly Top Seller -->
      </div>
  </div>
@endsection
