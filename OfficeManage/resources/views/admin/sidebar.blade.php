
<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="{{route('admin.master')}}" >
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                       
                    </li>

                    <li class="nav-label">Office Acivities</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-list-check"></i> <span class="nav-text">Task</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.task.all')}}">All Tasks</a></li>
                            <li><a href="{{route('admin.task.create')}}">Create Task</a></li>
                       </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-mug-hot"></i> <span class="nav-text">Clients</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.client.all')}}">All Clients</a></li>
                            <li><a href="{{route('admin.client.create')}}">Add Client</a></li>
                          
                           
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-regular fa-file"></i> 
                            <span class="nav-text">Leave Application</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.leave.leave') }}">All Applications</a></li>
                            <li><a href="{{ route('admin.leave.approvedleave') }}">Approval/Decline Application</a></li>
                        </ul>
                    </li>
                    
                   
                    <li class="nav-label">Employees Info</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-users"></i><span class="nav-text">Employee</span>
                        </a>
                        <ul aria-expanded="false">

                            <li><a href="{{route('admin.employee.regemp')}}">Employee List</a></li>
                            
                            <li><a href="{{route('admin.employee.attendence')}}">Employee Attendence</a></li>
                           
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user-pen"></i><span class="nav-text">Intern</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.intern.all')}}">All Intern</a></li>
                            <li><a href="{{route('admin.intern.create')}}">Create Intern</a></li>
                            
                        </ul>
                    </li>
                 
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="fa-solid fa-clipboard"></i><span class="nav-text">Departments Wise Project</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.addtask.addtask')}}">Add Project</a></li>
                            <li><a href="{{route('admin.business.all')}}">Business</a></li>
                            <li><a href="{{route('admin.design.all')}}">Design</a></li>
                            <li><a href="{{route('admin.web.all')}}">Web Development</a></li>
                            <li><a href="{{route('admin.app.all')}}">App Development</a></li>
                            <li><a href="{{route('admin.digital.all')}}">Digital Marketing</a></li>
                          
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a  href="{{route('admin.lr.logout')}}" aria-expanded="false">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> <span class="nav-text">Log Out</span>
                        </a>
                       
                    </li>



                    
                    
                   
                    
                  
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
