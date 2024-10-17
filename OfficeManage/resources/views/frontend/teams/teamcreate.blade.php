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
                        <h2>Make Teams</h2>

                        <!-- Form to add Project Name and User Name -->
                        <div class="row">
                            <div class="col-md-4">
                             
                                <form action="{{route('frontend.teams.store')}}" method="POST">
                                    @csrf
                                  
                                    <div class="form-group">
                                        <label for="team_name">Team Name:</label>
                                        <input type="text" class="form-control" id="team_name" name="team_name" required>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="team_members">Assign Team Members:</label>
                                        <input type="text" class="form-control" id="team_members" name="team_members" placeholder="Enter team members' names, separated by commas">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Add to Team</button>
                                </form>
                                
                            </div>

                            <!-- Table to show the project and team member -->
                            <div class="col-md-8">
                                <h4>Current Projects and Team Members</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                          
                                            <th>Team Name</th>
                                            <th>Team Members</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teams as $team)
                                            <tr>
                                             
                                                <td>{{ $team->team_name }}</td>
                                                <td>{{$team->team_members}}</td>
                                                <td>
                                                <a href="{{route('frontend.teams.edit',$team->id)}}"><button class="btn btn-info btn-sm">Update</button></a>
                                                <td>
                                                    <form action="{{route('frontend.teams.destroy',$team->id)}}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Employee Dashboard by Bootstrap</span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
@endsection
