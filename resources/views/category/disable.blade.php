@extends('layout.app')

@section('title', 'DisabledCategories')

@section('content')
<div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL DISABLED CATEGORIES
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
                          @if($category->active_status == 0)
                          <tr class="intro-x">
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $category->title }} </a> 
                                  
                              </td>
                              <td>
                                  <a href="" class="font-medium whitespace-no-wrap">{{ $category->active_status }} </a> 
                                  
                              </td>
                              
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="{{ route('dashboard.category.edit', $category->id) }}"> <i data-feather="edit-3" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center text-theme-9" href="{{ route('dashboard.category.enabledStatus', $category->id) }}"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> Enable </a>
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
