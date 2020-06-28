@extends('layout.app')

@section('title', 'All Question/Option Types')

@section('setting_active', 'side-menu--active')

@section('content')
<div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL TYPES
                  </h2>
              </div>
              <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                  <table class="table table-report sm:mt-2">
                      <thead>
                          <tr>
                              
                              <th class="whitespace-no-wrap">NAME</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($questions as $question)
                        <tr class="intro-x">
                          <td>
                              <a href="" class="font-medium whitespace-no-wrap">{{ $question->question_text }} </a>                                  
                          </td>
                              
                          <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                              <a class="flex items-center mr-3" href="{{ route('dashboard.eum.program.edit', $program->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                              <a class="flex items-center text-theme-6" href="{{ route('dashboard.question.type.delete', $question->id) }}"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
              <!-- <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
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
              </div> -->
          </div>
          <!-- END: Weekly Top Seller -->
      </div>
  </div>
@endsection
