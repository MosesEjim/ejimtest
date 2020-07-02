@extends('layout.app')

@section('title', 'Categories')
@section('category_active', 'side-menu--active')
@section('content')
<div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL CATEGORIES
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      <button class="button box flex items-center text-gray-700"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                      <button class="ml-3 button box flex items-center text-gray-700"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                  </div>
              </div>
              <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                  <table class="table table-report sm:mt-2">
                      <thead>
                          <tr>
                              
                              <th class="whitespace-no-wrap">NAME</th>
                              <th class="whitespace-no-wrap">STATUS</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($categories as $category)
                          @if($category->active_status == 1)
                          <tr class="intro-x">
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $category->title }} </a>                                  
                              </td>
                              <td>
                                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                                        <div class="w-2 h-2 bg-theme-9 rounded-full mr-3"></div>
                                        {{ $category->active_status === 1 ? 'Active' : "Disabled" }} 
                                    </a>                                  
                              </td>
                              
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.category.edit', $category->id) }}"> <i data-feather="edit-3" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center text-theme-6" href="{{ route('dashboard.category.disabledStatus', $category->id) }}"> <i data-feather="eye-off" class="w-4 h-4 mr-1"></i> Disable </a>
                                  </div>
                              </td>
                          </tr>
                          @endif
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
         
      </div>
  </div>

@endsection
