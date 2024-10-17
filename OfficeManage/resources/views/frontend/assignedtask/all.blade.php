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
                        <h3 style="margin-bottom: 20px; text-align:center;">Assigned Projects</h3>

                        @if($addtasks->isEmpty())
                            <p>No Projects assigned to your department yet.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Description</th>
                                        <th>Deadline</th>
                                        <th>Client</th>
                                        <th>Client Email</th>
                                        <th>Client Phone</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($addtasks as $task)
                                        <tr>
                                            <td>{{ $task->taskName }}</td>
                                            <td>{{ $task->description }}</td> 
                                             <td>{{ $task->deadline }}</td> 
                                            <td>{{ $task->client->name }}</td>
                                            <td>{{ $task->client->email }}</td>
                                            <td>{{ $task->client->phone }}</td>
                                            <td>{{ $task->status }}</td> 
                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Employee Dashboard by Bootstrap</span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
@endsection
