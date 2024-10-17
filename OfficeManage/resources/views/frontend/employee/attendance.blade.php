@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <h2 class="text-center">Attendance</h2>

     <!-- Success Message -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Error Message -->
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<!-- Validation Errors -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

        <form method="POST" action="{{ route('frontend.employee.store') }}">
          @csrf
            <div class="form-group">
                <label for="employeeId">Name:</label>
                <input type="text" class="form-control" id="employeeId" name="emp_id" required>
            </div>

            <div class="form-group">
                <label for="attendanceDate">Date:</label>
                <input type="date" class="form-control" id="attendanceDate" name="date" required>
            </div>
            <div class="form-group">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Mark Attendance</button>
        </form>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Employee Dashboard</a> by Bootstrap</span>
          <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
@endsection
