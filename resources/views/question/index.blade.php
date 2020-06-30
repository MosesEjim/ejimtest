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
                              <th class="whitespace-no-wrap">NAME</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                      @php
                      $i = 0;
                      @endphp
                      @foreach($questions as $question)
                        <tr class="intro-x">
                          <td>
                              <a href="" class="font-medium whitespace-no-wrap">{{ $i++ }} </a>                                  
                          </td>
                          <td>
                              <a href="" class="font-medium whitespace-no-wrap">{{ $question->question_text }} </a>                                  
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
