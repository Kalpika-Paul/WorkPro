@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h2>Add Project</h2>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{route('frontend.managework.store')}}" method="POST"> <!-- Ensure to use the correct route -->
                @csrf
                
                <div class="form-group">
                    <label for="project_id">Project:</label>
                    <select class="form-control" id="task_id" name="task_id" required>
                        <option value="">Select a project</option>
                        @foreach($addtasks as $addtask)
                            <option value="{{ $addtask->id }}">{{ $addtask->taskName }}</option>
                        @endforeach
                    </select>
                </div>
               
                
                <div class="form-group">
                    <label for="assigned_to">Assigned Team:</label>
                    <select class="form-control" id="assigned_team" name="assigned_team" required>
                        <option value="">Select Team</option>
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->team_name }}</option>
                    @endforeach
                       
                    </select>
                </div>
                
             
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="">Select status</option>
                        <option value="To Do">To Do</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="due_date">Due Date:</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>
              
                <div class="form-group">
                    <label for="dependencies">Dependencies :</label>
                    <input type="text" class="form-control" id="dependencies" name="dependencies" placeholder="List of tasks that must be completed before ">
                </div>

                <button type="submit" class="btn btn-primary">Save Task</button>
            </form>
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
