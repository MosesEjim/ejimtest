<div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Logo" class="w-6" src="{{ URL::asset('assets/dashboard/images/logo.png') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> 
                  <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> 
                </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="{{ route('dashboard.admin.index') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users 
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.user.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> All Users </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.user.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Create a user </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="codesandbox"></i> </div>
                        <div class="menu__title"> Categories 
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.category.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Categories List</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.category.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Create a Category </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.category.disabled')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Disabled Category </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="gift"></i> </div>
                        <div class="menu__title"> Products
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.product.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> All Products</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.product.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Create Product </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.product.dispatch')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Dispatch Products </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="shopping-bag"></i> </div>
                        <div class="menu__title"> Stocks
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.stock.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> All Stock</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.stock.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Create Stock </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="command"></i> </div>
                        <div class="menu__title"> Partners
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.partner.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> All Partners</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.partner.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Add partner </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="truck"></i> </div>
                        <div class="menu__title"> Vendors
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.vendor.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> All Vendors</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.vendor.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Create Vendor </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="align-justify"></i> </div>
                        <div class="menu__title"> Transactions
                          <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('dashboard.transaction.index')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> All Transactions</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dashboard.transaction.create')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Create Transaction </div>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> EUM <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-feather="book"></i> </div>
                                    <div class="menu__title"> Programs
                                    <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{route('dashboard.eum.program.index')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="menu__title"> All Programs</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.eum.program.create')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="menu__title"> Add Program </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="menu__title"> Sub Programs
                                    <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{route('dashboard.eum.subprogram.index')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="menu__title"> All Sub Programs</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.eum.subprogram.create')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="menu__title"> Create Sub Programs </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                                    <div class="menu__title"> Survey Type
                                    <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{route('dashboard.eum.surveytype.index')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="menu__title"> All Survey Type</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('dashboard.eum.subprogram.create')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                            <div class="menu__title"> Create Survey Type </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-feather="help-circle"></i> </div>
                                    <div class="menu__title"> Survey Questions
                                    <i data-feather="chevron-down" class="menu__sub-icon"></i> 
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="{{route('dashboard.uem.question.index')}}" class="menu">
                                            <div class="menu__icon"> <i data-feather="help-circle"></i> </div>
                                            <div class="menu__title"> All Survey Questions</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </li>
                
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="settings"></i> </div>
                        <div class="menu__title"> Settings <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="shield"></i> </div>
                                <div class="menu__title">User Roles <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('dashboard.role.index')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                                        <div class="menu__title">All Roles</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard.role.create')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="menu__title">Create A Role</div>
                                    </a>
                                </li>
                            </ul>
                        </li>          
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="map"></i> </div>
                                <div class="menu__title">States <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('dashboard.state.index')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                                        <div class="menu__title">All States</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard.state.create')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="menu__title">Add State</div>
                                    </a>
                                </li>
                            </ul>
                        </li>          
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="map-pin"></i> </div>
                                <div class="menu__title">LGAs <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('dashboard.lga.index')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                                        <div class="menu__title">All LGAs</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard.lga.create')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="menu__title">Add LGA</div>
                                    </a>
                                </li>
                            </ul>
                        </li>          
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="help-circle"></i> </div>
                                <div class="menu__title">Question/Option Type <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('dashboard.question.type.index')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                                        <div class="menu__title">All Types</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard.question.type.index')}}" class="menu">
                                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="menu__title">Add A Type</div>
                                    </a>
                                </li>
                            </ul>
                        </li>       
                        <li>
                            <form method="post" id="logout-form" action="{{ route('auth.logout.post') }}">
                                @csrf
                            
                                <a onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;" class="menu">
                                    <div class="side-menu__icon"> <i data-feather="log-out"></i>  </div>
                                    <div class="side-menu__title"> Logout </div>
                                </a>
                            </form>
                        </li>   
                    </ul>
                </li>
               
               
            </ul>
        </div>