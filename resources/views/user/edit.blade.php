@extends('layout.app')
@section('title', 'Edit User')
@section('user_active', 'side-menu--active')
@section('content')
  <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-8">        
          <!-- BEGIN: Vertical Form -->
          <div class="intro-y box">
              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                  <h2 class="font-medium text-base mr-auto">
                  Add a User
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
                      <div class="font-medium text-lg">Error! </div>
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
                <form method = "post" action = "{{ route('dashboard.user.update', $user->slug) }}">
                  @method('PUT')
                  @csrf
                  <div class="preview">
                      <div>
                          <label>Firstname</label>
                          <input type="text"  id="first_name" name = "first_name" value="{{$user->first_name}}" class="input w-full border mt-2" placeholder="Firstname" required>
                      </div>
                      <div>
                          <label>Lastname</label>
                          <input type="text"  id="last_name" name = "last_name" value="{{$user->last_name}}" class="input w-full border mt-2" placeholder="Lastname" required>
                      </div>
                      <div>
                          <label>Email</label>
                          <input type="email"  id="email" name = "email" value="{{$user->email}}" class="input w-full border mt-2" placeholder="email" required>
                      </div>
                      <div>
                          <label>Phone Number</label>
                          <input type="tel"  id="phone" name = "phone" value="{{$user->phone}}" class="input w-full border mt-2" placeholder="phone" required>
                      </div>
                      <div>
                          <label>Sex</label>
                          <select name="sex" id="sex" class="input w-full border mt-2" required>
                            <option value="male" {{$user->sex == 'male' ? 'selected':''}}>Male</option>
                            <option value="female" {{$user->sex == 'female' ? 'selected':''}}>Female</option>
                          </select>
                          
                      </div>
                      <div>
                          <label>User Role</label>
                          <select name="account_type" id="account_type" class="input w-full border mt-2" required>
                          @foreach($roles as $role)
                            <option value="{{$role->slug}}" >{{$role->name}}</option>
                          @endforeach
                          </select>
                          
                      </div>
                      <button type="submit" class="button bg-theme-1 text-white mt-5">Save Record</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- END: Vertical Form -->
      </div>
  </div>
@endsection