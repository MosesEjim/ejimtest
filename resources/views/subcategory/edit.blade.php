@extends('layout.app')
@section('title', 'Create Partner')
@section('program_active', 'side-menu--active')
@section('content')


<div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                    Editing: {{ $subprogram->name }}
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
                      <div class="font-medium text-lg">Error</div>
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


              <form method = "post" action = "{{ route('dashboard.eum.subprogram.update', $subprogram->id) }}">
                @csrf
                @method("PUT")
                  <div class="preview">
                      <div>
                          <label for="name">Sub Category Name</label>
                          <input type="text" value="{{ $subprogram->name }}"  id="name" name="name" class="input w-full border mt-2" placeholder="Enter Sub Category Name" required>
                      </div>
                      
                      <div class="mt-3">
                          <label for="program_id">Program</label>
                          <select class="input w-full border mr-2" name="program_id" id="program_id" required>
                            <option> -- Select a Program --</option>
                            @foreach($programs as $program)
                              <option value="{{$program->id}}" {{ $subprogram->program_id === $program->id ? 'selected' : '' }}>{{$program->name}}</option>
                            @endforeach
                          </select> 
                      </div>
                      <button type="submit" class="button bg-theme-9 text-white mt-5 mr-5">Update Record</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>

@endsection