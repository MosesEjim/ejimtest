<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> 
        <a href="" class="">Application</a> 
        <i data-feather="chevron-right" class="breadcrumb__icon"></i> 
        <a href="" class="breadcrumb--active">Dashboard</a> 
    </div>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8 relative">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
            <img alt="" src="{{ Gravatar::get(Sentinel::getUser()->email) }}">
        </div>
        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
            <div class="dropdown-box__content box bg-theme-38 text-white">
                <div class="p-4 border-b border-theme-40">
                    <div class="font-medium">{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</div>
                    <div class="text-xs text-theme-41">{{ Sentinel::getUser()->email }}</div>
                </div>
                <!-- <div class="p-2"> -->
                    <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a> -->
                    <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a> -->
                    <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a> -->
                    <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a> -->
                <!-- </div> -->
                <div class="p-2 border-t border-theme-40">
                    <form method="post" id="logout-form" action="{{ route('auth.logout.post') }}">
                        @csrf
                        
                        <a onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> 
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout 
                        </a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>