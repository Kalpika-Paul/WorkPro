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
                        <h2>Manage Team</h2>

                        <!-- Form to add Project Name and User Name -->
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Add Project and Team Member</h4>
                                <form action="{{route('frontend.teams.update',$team->id)}}" method="POST">
                                    @csrf
                                   
                                
                                    <div class="form-group">
                                        <label for="team_name">Team Name:</label>
                                        <input type="text" class="form-control" id="project_name" name="team_name" required value="{{old('team_name',$team->team_name)}}">
                                       
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="team_members">Assign Team Members:</label>
                                        <input type="text" class="form-control" id="team_members" name="team_members" placeholder="Enter team members' names, separated by commas" value="{{old('team_members',$team->team_members)}}">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Add to Team</button>
                                </form>
                                
                            </div>

                            <!-- Table to show the project and team member -->

                        </div>
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
