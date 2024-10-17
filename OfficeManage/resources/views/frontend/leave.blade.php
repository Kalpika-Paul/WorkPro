@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <div class="container mt-5">
              <h2 >Apply for Leave</h2>
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

              <form action="{{route('frontend.leave.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="leave_type">Leave Type</label>
                  <select name="type" class="form-control" required>
                    <option value="sick">Sick Leave</option>
                    <option value="casual">Casual Leave</option>
                    <option value="annual">Annual Leave</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="start_date">Start Date</label>
                  <input type="date" name="start_date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="end_date">End Date</label>
                  <input type="date" name="end_date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="reason">Reason for Leave</label>
                  <textarea name="reason" class="form-control" rows="3" required></textarea>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit Leave Application</button>
                <a href="{{route('frontend.leaveapproval')}}" style="margin-left: 10px;">See Your Approval</a>
              </form>
             
      
      
          </div>
          </div>
        </div>
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