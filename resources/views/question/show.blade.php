@extends('layout.app')

@section('title', 'Create Questionnaire')
@section('program_active', 'side-menu--active')
@section('content')

  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-12">
        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200" style="margin-bottom: 20px;">
                  <table class="table table-report sm:mt-2">
                      <thead>
                          <tr>
                              
                              <th class="whitespace-no-wrap">QUESTION</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="intro-x">
                          <td>
                              <a href="" class="font-medium">{{ $question->question_text }} </a>                                  
                          </td>
                              
                          <td class="table-report__action w-100">
                            <div class="flex justify-center items-center">
                              <!-- <a class="flex items-center mr-3" href="{{ route('dashboard.uem.surveytype.question.edit', $question->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Add Option </a> -->
                              
                              <a class="flex items-center text-theme-6" href="{{ route('dashboard.uem.surveytype.question.delete', $question->id) }}"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete Question</a>
                            </div>
                          </td>
                        </tr>
                      
                    </tbody>
                  </table>
              </div>
              <div class="overflow-x-auto">

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

                @if($errors->any())
                  <div class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">
                    <div class="flex items-center">
                        <div class="font-medium text-lg">Error!</div>
                        <div class="text-xs bg-white px-1 rounded-md text-gray-800 ml-auto">New</div>
                    </div>
                    <div class="mt-3">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endif 

                  <table class="table">
                      <thead>
                          <tr>
                              <th class="border-b-2 whitespace-no-wrap">OPTIONS</th>
                              <th class="border-b-2 text-right whitespace-no-wrap">ACTION</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($question->options as $option)
                          <tr>
                              <td class="border-b">
                                  <div class="font-medium whitespace-no-wrap">{{ $option->option }}</div>
                              </td>
                              <td class="text-right border-b w-32">
                                <a class="flex items-center text-theme-6" data-toggle="modal" data-target="#delete-modal-preview{{$option->slug}}" href="javascript:;"> 
                                  <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete 
                                </a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
  @foreach($question->options as $opt)
    <div class="modal" id="delete-modal-preview{{$opt->slug}}">
      <div class="modal__content">
        <form action="{{ route('dashboard.eum.option.delete', $opt->id) }}" method="post">
          @csrf 
          @method('DELETE')
          <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
              <div class="text-3xl mt-5">Are you sure you want to delete <strong>{{ $opt->option }}</strong>?</div>
              <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
          </div>
          <div class="px-5 pb-8 text-center"> 
            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button> 
            <button type="submit" class="button w-24 bg-theme-6 text-white">Delete</button> 
          </div>
        </form>
      </div>
  </div>
 @endforeach

@endsection

