<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="" class="w-10" src="{{ URL::asset('assets/dashboard/images/logo.png') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> UNI<span class="font-medium">CEF</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('dashboard.admin.index') }}" class="side-menu @yield('dashboard_active')">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu @yield('user_active')">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Users <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('dashboard.user.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
                        <div class="side-menu__title"> All Users </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard.user.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="user-plus"></i> </div>
                        <div class="side-menu__title"> Create a User </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="codesandbox"></i> </div>
                <div class="side-menu__title"> Categories<i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('dashboard.category.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Categories List </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard.category.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Create a Category </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard.category.disabled')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Disabled Category </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
          <a href="javascript:;" class="side-menu">
              <div class="side-menu__icon"> <i data-feather="box"></i> </div>
              <div class="side-menu__title"> Products <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
              <li>
                  <a href="{{route('dashboard.product.index')}}" class="side-menu">
                      <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                      <div class="side-menu__title"> All Products </div>
                  </a>
              </li>
              <li>
                  <a href="{{route('dashboard.product.create')}}" class="side-menu">
                      <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                      <div class="side-menu__title"> Create Product </div>
                  </a>
              </li>
              <li>
                  <a href="{{route('dashboard.product.dispatch')}}" class="side-menu">
                      <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                      <div class="side-menu__title"> Dispatch Products </div>
                  </a>
              </li>
          </ul>
      </li>

      <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
            <div class="side-menu__title"> Stocks <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('dashboard.stock.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All stocks </div>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.stock.create')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Create stock </div>
                </a>
            </li>
            
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
            <div class="side-menu__title"> Partners <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('dashboard.partner.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All Partners </div>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.partner.create')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Add Partner </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
            <div class="side-menu__title"> Vendors <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('dashboard.vendor.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All Vendors </div>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.vendor.create')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Create Vendor </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
            <div class="side-menu__title"> Transactions <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('dashboard.transaction.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All Transactions </div>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.transaction.create')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Create Transaction </div>
                </a>
            </li>
        </ul>
    </li>
    
    <li class="side-nav__devider my-6"></li>
    <li>
        <a href="javascript:;" class="side-menu @yield('program_active')">
            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
            <div class="side-menu__title"> EUM <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="javascript:;" class="side-menu ">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Programs </div>
                </a>
                <ul class="">
                    <a href="{{route('dashboard.eum.program.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> All Programs</div>
                    </a>
                    <a href="{{route('dashboard.eum.program.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Add Program</div>
                    </a>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Sub Programs </div>
                </a>
                <ul class="">
                    <a href="{{route('dashboard.eum.subprogram.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> All Sub Programs</div>
                    </a>
                    <a href="{{route('dashboard.eum.subprogram.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Create Sub Program</div>
                    </a>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Survey Type </div>
                </a>
                <ul class="">
                    <a href="{{route('dashboard.eum.surveytype.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> All Survey Types</div>
                    </a>
                    <a href="{{route('dashboard.eum.surveytype.create')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Create a Survey Type</div>
                    </a>
                </ul>
            </li>
            
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Survey Questions </div>
                </a>
                <ul class="">
                    <a href="{{route('dashboard.uem.question.index')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="help-circle"></i> </div>
                        <div class="side-menu__title"> All Survey Question</div>
                    </a>
                </ul>
            </li>
        </ul>      
    </li>
    <li class="side-nav__devider my-6"></li>
    <li>
      <a href="javascript:;" class="side-menu @yield('setting_active')">
        <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
        <div class="side-menu__title"> SETTINGS <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
      </a>
      <ul class="">
        <li>
          <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="shield"></i> </div>
            <div class="side-menu__title"> User Roles </div>
          </a>
          <ul class="">
            <a href="{{route('dashboard.state.index')}}" class="side-menu">
              <div class="side-menu__icon"> <i data-feather="list"></i> </div>
              <div class="side-menu__title"> All Roles</div>
            </a>
              <a href="{{route('dashboard.state.create')}}" class="side-menu">
                  <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                  <div class="side-menu__title"> Create a Role</div>
              </a>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="map"></i> </div>
            <div class="side-menu__title"> States </div>
          </a>
          <ul class="">
            <a href="{{route('dashboard.state.index')}}" class="side-menu">
              <div class="side-menu__icon"> <i data-feather="list"></i> </div>
              <div class="side-menu__title"> All states</div>
            </a>
              <a href="{{route('dashboard.state.create')}}" class="side-menu">
                  <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                  <div class="side-menu__title"> Add State</div>
              </a>
          </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="map-pin"></i> </div>
                <div class="side-menu__title"> LGAs </div>
            </a>
            <ul class="">
                <a href="{{route('dashboard.lga.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All LGAs</div>
                </a>
                <a href="{{route('dashboard.lga.create')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Add LGA</div>
                </a>
            </ul>
        </li>                            
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="help-circle"></i> </div>
                <div class="side-menu__title"> Question/Option Type </div>
            </a>
            <ul class="">
                <a href="{{route('dashboard.question.type.index')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> All Types</div>
                </a>
                <a href="{{route('dashboard.question.type.create')}}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Add a Type</div>
                </a>
            </ul>
        </li>
        <li>
            <form method="post" id="logout-form" action="{{ route('auth.logout.post') }}">
                @csrf
            
                <a onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;" class="side-menu side-menu--active">
                    <div class="side-menu__icon"> <i data-feather="log-out"></i>  </div>
                    <div class="side-menu__title"> Logout </div>
                </a>
            </form>
        </li>                         
      </ul>                        
    </li>
  </ul>
</nav>