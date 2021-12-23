 <!-- BEGIN SIDEBAR -->
 <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse ">
                   
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item ">
                            <a href="{{route('dashboard',['id'=>Auth::user()->id])}}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                      
                        <!-- <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-book"></i>
                                <span class="title">All</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                <a href="{{route('hospitalall')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-eye"></i>View Hospital</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="{{route('doctorall')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-eye"></i>View Doctor</span>
                                    </a>
                                </li> 
                               
                                <li class="nav-item  ">
                                    <a href="{{route('allblood')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-eye"></i>View Bloodbank</span>
                                    </a>
                                </li> 
                            </ul>
                        </li> -->
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Cities</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{route('addcities')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-plus-circle"></i>Add city</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{route('viewcities')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-eye"></i>View cities</span>
                                    </a>
                                </li>   
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i  class='fa fa-user-md'></i>
                                <span class="title">Hospitals</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('addhospital')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-plus-circle"></i>Add hospital</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{route('viewhospital')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-eye"></i>View hospitals</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i  class='fa fa-medkit'></i>
                                <span class="title">Doctors</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="{{route('adddoctor')}}" class="nav-link ">
                                        <span class="title"><i class="fa fa-plus-circle"></i>Add Doctors</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{route('viewdoctor')}}" class="nav-link ">
                                        <span class="title"><i class="	fa fa-eye"></i>View Doctors</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                                    <a href="{{route('allblood')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-heart"></i>
                                        <span class="title">BloodBank</span>
                                    </a>
                                </li>  
                       
                        <li class="nav-item  ">
                                    <a href="{{route('organview')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-book"></i>
                                        <span class="title">Organ Request</span>
                                    </a>
                                </li>  
                        <li class="nav-item  ">
                                    <a href="{{route('viewappointment')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-stethoscope"></i>
                                        <span class="title">Appointment</span>
                                    </a>
                                </li>    
                    
                        <li class="nav-item  ">
                                    <a href="{{route('viewcontact')}}" class="nav-link nav-toggle">
                                        <i class="fa fa-book"></i>
                                        <span class="title">Contacts</span>
                                     </a>
                                </li>
                        
                               
                        
                        <li class="nav-item  ">
                                    <a href="{{route('viewinquiry')}}" class="nav-link nav-toggle">
                                        <i class="fa fa-pencil-square-o"></i>
                                        <span class="title">Inquiries</span>
                                     </a>
                                </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->