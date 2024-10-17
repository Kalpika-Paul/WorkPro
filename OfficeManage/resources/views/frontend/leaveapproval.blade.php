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
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your Leave Requests</h4>
                            <div class="row">
                                @forelse($leaves as $leave)
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $leave->type }}</h5>
                                                <p class="card-text"><strong>Start Date:</strong> {{ $leave->start_date }}</p>
                                                <p class="card-text"><strong>End Date:</strong> {{ $leave->end_date }}</p>
                                                <p class="card-text"><strong>Reason:</strong> {{ $leave->reason }}</p>
                                                <p class="card-text">
                                                    <strong>Status:</strong>
                                                    @if($leave->status == 'approved')
                                                        <span class="badge badge-success">Approved</span>
                                                    @elseif($leave->status == 'declined')
                                                        <span class="badge badge-danger">Declined</span>
                                                    @else
                                                        <span class="badge badge-warning">Pending</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <div class="alert alert-info text-center">No leave requests found.</div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Employee Dashboard by Bootstrap</span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
@endsection
