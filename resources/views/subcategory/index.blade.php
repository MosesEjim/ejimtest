@extends('layout.app')

@section('title', 'Stock')
@section('program_active', 'side-menu--active')
@section('content')

<div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL SUB PROGRAMS
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      <a href="{{route('dashboard.eum.subprogram.create')}}" class="button box flex items-center text-gray-700" style="margin-right:10px"> 
                        <i data-feather="folder-plus" class="hidden sm:block w-4 h-4 mr-2"></i> Create a Sub-Program 
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
                              <th class="whitespace-no-wrap">NAME OF PROGRAM</th>
                              <th class="whitespace-no-wrap">PROGRAM</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($subprograms as $subprogram)
                          <tr class="intro-x">
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $subprogram->name}} </a>                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $subprogram->program->name}}</a>                                  
                              </td>
                              
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.eum.subprogram.edit', $subprogram->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview{{$subprogram->id  }}"> 
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete 
                                      </a>
                                  </div>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
          <!-- END: Weekly Top Seller -->
          @foreach($subprograms as $subprogramModal)
            <div class="modal" id="delete-modal-preview{{$subprogramModal->id}}">
                <div class="modal__content">
                  <form method="post" action="{{ route('dashboard.eum.subprogram.delete', $subprogramModal->id) }}">
                    @csrf
                    
                    <div class="p-5 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle w-16 h-16 text-theme-6 mx-auto mt-3"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg> 
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-gray-600 mt-2">Do you really want to delete <strong>{{ $subprogramModal->name }}</strong> records? This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                        <button type="submit" class="button w-24 bg-theme-6 text-white">Delete</button>
                    </div>
                  </form>
                </div>
            </div>
          @endforeach
      </div>
  </div>

@endsection
