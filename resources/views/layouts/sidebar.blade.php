                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <li class="nav-item start {!!Request::is('home')?'active open':''!!}">
                                <a href="/home" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">ទំព័រដើម</span>
                                    @if (Request::is('home'))
                                        <span class="selected"></span>    
                                    @endif
                                </a>
                            </li>
{{--                             <li class="heading">
                                <h3 class="uppercase">Features</h3>
                            </li> --}}
                            <li class="nav-item  {!!Request::is('borrower','borrower/*')?'active open':''!!}">
                                <a href="{{route('borrower.index')}}" class="nav-link nav-toggle">
                                    <i class="icon-users"></i>
                                    <span class="title">អតិថិជន</span>
                                    <span class="badge badge-primary"> {{$totalBorrower}} </span>
                                    @if (Request::is('borrower'))
                                        <span class="selected"></span>    
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item  {!!Request::is('borrower_loan','borrower_loan/*')?'active open':''!!}">
                                <a href="{{route('borrower_loan.index')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-credit-card"></i>
                                    <span class="title">តារាងកម្ចី</span>
                                    <span class="badge badge-primary"> {{$totalBorrowerLoan[0]->totalBorrowerLoan}} </span>
                                    @if (Request::is('borrower_loan'))
                                        <span class="selected"></span> 
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item  {!!Request::is('setting','setting/*')?'active open':''!!}">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-cogs"></i>
                                    <span class="title">កំណែរប្រែ</span>
                                    @if (Request::is('setting') or Request::is('setting/*'))
                                        <span class="selected"></span>    
                                    @else
                                        <span class="arrow"></span> 
                                    @endif
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="{{route('loan.index')}}" class="nav-link ">
                                            <span class="title">កម្ចី</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>                                                        
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->