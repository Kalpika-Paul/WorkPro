@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    <div class="card mt-5" style="border-radius: 12px; background: linear-gradient(135deg, #4D79FF 0%, #E0E8FF 100%); box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                        <div class="card-body text-center">
                            @if (Auth::check()) {{-- Check if user is authenticated --}}
                                <h2 style="font-size: 32px; margin-bottom: 20px; color: #333; font-weight: 700;">Details</h2>

                                <div style="border-top: 2px solid #E0E8FF; margin: 20px 0;"></div>

                                <div class="info-item" style="text-align: left; padding: 20px;">
                                    <p style="font-size: 20px; color: #333; margin: 10px 0;"><strong>Email:</strong> <span style="color: #333;">{{ Auth::user()->email }}</span></p>
                                    <p style="font-size: 20px; color: #333; margin: 10px 0;"><strong>Department:</strong> <span style="color: #333;">{{ Auth::user()->dept }}</span></p>
                                    <p style="font-size: 20px; color: #333; margin: 10px 0;"><strong>Designation:</strong> <span style="color: #333;">{{ Auth::user()->designation }}</span></p>
                                    <p style="font-size: 20px; color: #333; margin: 10px 0;"><strong>Phone:</strong> <span style="color: #333;">{{ Auth::user()->phone }}</span></p>
                                    <p style="font-size: 20px; color: #333; margin: 10px 0;"><strong>Address:</strong> <span style="color: #333;">{{ Auth::user()->address }}</span></p>
                                    <p style="font-size: 20px; color: #333; margin: 10px 0;"><strong>Date of Joining:</strong> <span style="color: #333;">{{ Auth::user()->date_of_joining }}</span></p>
                                </div>

                                <div style="border-top: 2px solid #E0E8FF; margin: 20px 0;"></div>

                            @else
                                <h2 style="font-size: 24px; color: #E74C3C; font-weight: 600;">No user information available.</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer mt-4">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block" style="font-size: 14px; color: #555;">Employee Dashboard by Bootstrap</span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center" style="font-size: 14px; color: #555;">Copyright © 2024. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
@endsection
