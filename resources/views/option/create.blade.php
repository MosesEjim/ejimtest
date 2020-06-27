@extends('layout.app')

@section('title', 'Create Option')

@section('content')

  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">
        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                  Add an OPtion to : {{ $question->question_text }}
                  </h2>
              </div>
              <div class="p-5" id="vertical-form">

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
                      <div class="font-medium text-lg">Awesome alert with additional info</div>
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


              <form method="post" action="{{ route('dashboard.eum.option.store', $question->slug) }}">
                  @csrf
                  <div class="preview">
                      <div>
                          <label for="option">Option Text</label>
                          <input type="text"  id="option" name="option" class="input w-full border mt-2" placeholder="Enter Question" required>
                      </div>
                      <input type="hidden" name="question_id" value={{ $question->id }}>
                      <div class="mt-3">
                          <label for="option_type">Option Type</label>
                          <select class="input w-full border mr-2" name="option_type" id="option_type" required>
                            <option> -- Select Type --- </option>
                            @foreach($questionTypes as $type)
                              <option value="{{ $type->slug }}">{{ $type->type }}</option>
                            @endforeach
                          </select> 
                      </div>
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Save and go back</button>
                      <!-- <button class="button w-24 shadow-md mr-1 mb-2 bg-theme-9 text-white">Success</button> -->
                      <button type="submit"  name="save_record" value="save_record" class="button bg-theme-1 text-white mt-5">Save and add Another</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection

