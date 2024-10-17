@extends('admin.master')

@section('admin-content')
      <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('admin.header')

         @include('admin.sidebar')

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container mt-3">
            <style>
                .equal-columns {
    width: 100%;
    table-layout: fixed;
}

.equal-columns th, .equal-columns td {
    width: 33.33%; /* Each column gets one-third of the table's width */
    text-align: left; /* Align text as you need */
    padding: 8px; /* Adjust padding for better spacing */
}
            </style>
            
            <h2 class="mt-5 mb-3" >Employee Attendence</h2>
          
            <table class="table table-hover equal-columns">
              <thead>
                
                <tr>
                 
                 <th>Employee Name</th>
                 <th>Date</th>
               <th>Department</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($attendances as $attendance)
                    
                <tr>
                 
                  <td>{{ $attendance->user ? $attendance->user->name : 'N/A' }}</td>
                  <td>{{ $attendance->user ? $attendance->user->dept : 'N/A' }}</td>
                    <td>{{$attendance->date}}</td>
                    
                  </tr>
               </tr>
              
               @endforeach
              </tbody>
            </table>
           
           
          </div>
          
        
           
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
      @include('admin.footer')
    
  
</div>
<!--**********************************
    Main wrapper end
***********************************-->

@endsection