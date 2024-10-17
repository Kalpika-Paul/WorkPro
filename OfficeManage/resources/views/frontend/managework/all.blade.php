@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h2>All Projects</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Assigned Team</th>
                        <th>Status</th>
                        <th>Due Date</th>
                        <th>Dependencies</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if($tasks->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center">No projects available yet.</td>
                        </tr>
                    @else
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->addtask->taskName }}</td> <!-- Assuming the relationship is set -->
                            <td>{{ $task->team->team_name }}</td> <!-- Assuming the relationship is set -->
                            <td>{{ $task->status }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td>{{ $task->dependencies }}</td>
                            <td>
                                <a href="{{ route('frontend.managework.edit', $task->id) }}" class="btn btn-info btn-sm">Update</a>
                            </td>
                            <td>
                                <form action="{{ route('frontend.managework.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') <!-- Changed to DELETE -->
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
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
