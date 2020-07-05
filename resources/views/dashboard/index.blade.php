@extends('layout.app')

@section('dashboard_active', 'side-menu--active')

@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="book-open" class="report-box__icon text-theme-10"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"></div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ count($programs) }}</div>
                                <div class="text-base text-gray-600 mt-1">Programs</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="clipboard" class="report-box__icon text-theme-11"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer"></div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ count($questions) }}</div>
                                <div class="text-base text-gray-600 mt-1">Survey Questions</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="smile" class="report-box__icon text-theme-12"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ count($answers) }}</div>
                                <div class="text-base text-gray-600 mt-1">Responses</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold leading-8 mt-6">{{ count($users) }}</div>
                                <div class="text-base text-gray-600 mt-1">Users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
        </div>
    </div>    

    <div class="intro-y grid grid-cols-12 gap-6 mt-10">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Bar Chart -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Vertical Bar Chart
                    </h2>
                </div>
                <div class="p-5" id="vertical-bar-chart">
                    <div class="preview">
                        <canvas id="vertical-bar-chart-widget" height="200"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Bar Chart -->
            <!-- BEGIN: Horizontal Bar Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Horizontal Bar Chart
                    </h2>
                </div>
                <div class="p-5" id="horizontal-bar-chart">
                    <div class="preview">
                        <canvas id="horizontal-bar-chart-widget" height="200"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Bar Chart -->
            <!-- BEGIN: Donut Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Donut Chart
                    </h2>
                </div>
                <div class="p-5" id="donut-chart">
                    <div class="preview">
                        <canvas id="donut-chart-widget" height="200"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Donut Chart -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Stacked Bar Chart -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Stacked Bar Chart
                    </h2>
                </div>
                <div class="p-5" id="stacked-bar-chart">
                    <div class="preview">
                        <canvas id="stacked-bar-chart-widget" height="200"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Stacked Bar Chart -->
            <!-- BEGIN: Line Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Line Chart
                    </h2>
                </div>
                <div class="p-5" id="line-chart">
                    <div class="preview">
                        <canvas id="line-chart-widget" height="200"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Line Chart -->
            <!-- BEGIN: Pie Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Pie Chart
                    </h2>
                </div>
                <div class="p-5" id="pie-chart">
                    <div class="preview">
                        <canvas id="pie-chart-widget" height="200"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Pie Chart -->
        </div>
    </div>
@endsection