@extends('layout.app')

@section('title', 'Charts')
@section('program_active', 'side-menu--active')
@section('content')
  
  <div class="grid grid-cols-12 gap-6">
      <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
          
          <!-- BEGIN: Weekly Top Seller -->
          <div class="col-span-12 mt-6">
              <div class="intro-y block sm:flex items-center h-10">
                  <h2 class="text-lg font-medium truncate mr-5">
                      LISTING ALL CHARTS
                  </h2>
                  <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                      <a href="{{ route('dashboard.eum.surveytype.create') }}" class="button box flex items-center text-gray-700" style="margin-right:10px"> 
                        <i data-feather="folder-plus" class="hidden sm:block w-4 h-4 mr-2"></i> Create Survey Type 
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
                              <th class="whitespace-no-wrap">PROGRAM</th>
                              <th class="whitespace-no-wrap">SUB PROGRAM</th>
                              <th class="whitespace-no-wrap">SURVEY TYPE</th>
                              <th class="text-center whitespace-no-wrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($dataList as $data)
                          <tr class="intro-x">
                                  <td>
                                      <a href="" class="font-medium whitespace-no-wrap">{{ $data->program_name}} </a>                                  
                                  </td>       
                                  <td>
                                      <a href="" class="font-medium whitespace-no-wrap">{{ $data->sub_category_name}} </a>                                  
                                  </td>       
                                  <td>
                                      <a href="" class="font-medium whitespace-no-wrap">{{ $data->survey_type_name}} </a>                                  
                                  </td>       
                              <td class="table-report__action">
                                  <div class="flex justify-center items-center">
                                  <a class="flex items-center mr-3" href="{{route('dashboard.eum.chart.show', $data->survey_type_id)}}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> View Chart</a>
                                  </div>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                
              </div>
          </div>
          <!-- END: Weekly Top Seller -->
      </div>
  </div>
@endsection




































<!-- <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html> -->
