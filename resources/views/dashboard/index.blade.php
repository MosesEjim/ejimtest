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
                                <i data-feather="map-pin" class="report-box__icon text-theme-12"></i> 
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6">{{ count($states) }}</div>
                            <div class="text-base text-gray-600 mt-1">Total States</div>
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
@endsection