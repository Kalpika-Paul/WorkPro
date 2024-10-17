<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('frontend.master')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Officials</li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('frontend.employee.attendance')}}">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Attendance</span>
        </a>
    </li>
    



      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Assigned Tasks</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('frontend.assignedtask.all')}}">See all</a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-chart-line"></i>
          <span class="menu-title">Manage Projects</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Add Projects</a></li>
          </ul>
        </div>
      </li> --}}


      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="menu-icon mdi mdi-chart-line"></i>
            <span class="menu-title">Manage Projects</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
             <li class="nav-item">
                  <a class="nav-link" href="{{route('frontend.teams.teamcreate')}}">Manage Team</a>
              </li>   
              <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.managework.create')}}">Add Projects</a>
                </li> 
              
               <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.managework.all')}}">See All</a> <!-- New "See All" link -->
               </li> 
              
              
              
             
            </ul>
        </div>
    </li>


    

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">My Schedule</span>
          <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> 
                  <a class="nav-link" href="{{route('frontend.myschedule.create')}}">Add Schedule</a>
              </li>
              <li class="nav-item"> 
                  <a class="nav-link" href="{{route('frontend.myschedule.all')}}">See All</a>
              </li>
          </ul>
      </div>
  </li>
  
      <li class="nav-item">
        <a class="nav-link"  href="{{route('frontend.leave')}}">
           <i class="menu-icon fa-regular fa-file"></i>
          <span class="menu-title">Leave Application</span>
          
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('company.policies')}}" >
         <i class="menu-icon mdi mdi-layers-outline"></i>
         
          <span class="menu-title">Company Policies</span>
       
        </a>
        
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('frontend.logout')}}">
          
          <i class="menu-icon fa-solid fa-right-to-bracket"></i>
      
          <span class="menu-title">Log Out</span>
        </a>
      </li>
    </ul>
  </nav>