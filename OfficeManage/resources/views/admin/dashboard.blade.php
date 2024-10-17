@extends('admin.master')

@section('admin-content')
<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper" style="background: linear-gradient(135deg, #f0f4f8, #dfe9f3); color: #333;">

    @include('admin.header')

    @include('admin.sidebar')

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body" style="background-color: #ffffff; border-radius: 15px; padding: 30px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="font-size: 32px; font-weight: 600; color: #34495e; margin-bottom: 30px;">Statistics Overview</h2>

                   
                    <div class="stat-container" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
                        
                        <!-- Registered Employees -->
                        <div class="stat-box" style="width: 220px; background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); margin-bottom: 20px; transition: all 0.3s ease;">
                            <p style="font-size: 18px; color: #888;">Total Employees</p>
                            <h3 style="font-size: 28px; font-weight: 700; color: #3498db;">{{ $registeredUserCount ?? 0 }}</h3>
                        </div>

                        <!-- Present Employees -->
                        <div class="stat-box" style="width: 220px; background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); margin-bottom: 20px; transition: all 0.3s ease;">
                            <p style="font-size: 18px; color: #888;">Present Today</p>
                            <h3 style="font-size: 28px; font-weight: 700; color: #27ae60;">{{ $todayAttendanceCount }}</h3>
                        </div>

                        <!-- Total Clients -->
                        <div class="stat-box" style="width: 220px; background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); margin-bottom: 20px; transition: all 0.3s ease;">
                            <p style="font-size: 18px; color: #888;">Total Clients</p>
                            <h3 style="font-size: 28px; font-weight: 700; color: #9b59b6;">{{ $totalClients }}</h3>
                        </div>

                        <!-- Total Interns -->
                        <div class="stat-box" style="width: 220px; background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); margin-bottom: 20px; transition: all 0.3s ease;">
                            <p style="font-size: 18px; color: #888;">Total Interns</p>
                            <h3 style="font-size: 28px; font-weight: 700; color: #f39c12;">{{ $totalInterns }}</h3>
                        </div>
                        <div class="stat-box" style="width: 220px; background: #ffffff; border-radius: 10px; padding: 20px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); margin-bottom: 20px; transition: all 0.3s ease;">
                            <p style="font-size: 18px; color: #888;">Total Projects</p>
                            <h3 style="font-size: 28px; font-weight: 700; color: #f39c12;">{{ $totalTasks }}</h3>
                        </div>

                    </div>

                </div>
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
