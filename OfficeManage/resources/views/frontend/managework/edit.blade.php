@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            <h2>Update Project</h2>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('frontend.managework.update', $allwork->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="project_id">Project:</label>
                    <select class="form-control" id="task_id" name="task_id" required>
                        <option value="">Select a project</option>
                        @foreach($addtasks as $addtask)
                            <option value="{{ $addtask->id }}" {{ old('task_id', $allwork->task_id) == $addtask->id ? 'selected' : '' }}>{{ $addtask->taskName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="assigned_to">Assigned Team:</label>
                    <select class="form-control" id="assigned_team" name="assigned_team" required>
                        <option value="">Select Team</option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}" {{ old('assigned_team', $allwork->assigned_team) == $team->id ? 'selected' : '' }}>{{ $team->team_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="">Select status</option>
                        <option value="To Do" {{ old('status', $allwork->status) == 'To Do' ? 'selected' : '' }}>To Do</option>
                        <option value="In Progress" {{ old('status', $allwork->status) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Completed" {{ old('status', $allwork->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="due_date">Due Date:</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required value="{{ old('due_date', $allwork->due_date) }}">
                </div>

                <div class="form-group">
                    <label for="dependencies">Dependencies:</label>
                    <input type="text" class="form-control" id="dependencies" name="dependencies" placeholder="List of tasks that must be completed before" value="{{ old('dependencies', $allwork->dependencies) }}">
                </div>

                <button type="submit" class="btn btn-primary">Save Task</button>
            </form>
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
