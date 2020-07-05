@extends('layout.app')

@section('title', 'Search Results')

@section('program_active', 'side-menu--active')

@section('content')
  <h2 class="intro-y text-lg font-medium mt-10">
      Search result for : "{{ strtoupper($q) }}"
  </h2>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
      <a href="{{route('dashboard.uem.question.index')}}" class="button text-white bg-theme-1 shadow-md mr-2">
        All Questions
      </a>
        
      <div class="hidden md:block mx-auto text-gray-600"></div>
      <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
          <div class="w-56 relative text-gray-700">
            <form action="{{ route('dashboard.uem.question.search') }}" method="post">
              @csrf
              <input type="text" name="search" class="input w-400 box pr-10 placeholder-theme-13" placeholder="Search...">
              <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </form> 
          </div>
      </div>
    </div>
    <!-- BEGIN: Users Layout -->
    
    <div class="intro-y col-span-12 md:col-span-12">
      <div class="box">
        @if(count($questions) < 1)

        <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">
            <div class="flex items-center">
                <div class="font-medium text-lg">Not Found</div>
            </div>
            <div class="mt-3">No match for your query string, Try again with another query string.</div>
        </div>

        @else
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
        @endif
      </div>
    </div>
  </div>
@endsection