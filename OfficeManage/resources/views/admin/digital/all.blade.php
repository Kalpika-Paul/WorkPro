@extends('admin.master')

@section('admin-content')
    <div id="main-wrapper">
        @include('admin.header')
        @include('admin.sidebar')

        <div class="content-body">
            <div class="container mt-3">
                <h2 class="mt-5 mb-3">All Projects (Digital Marketing)</h2>

                <style>
                    .table th, .table td {
                        text-align: center; /* Center align text */
                        vertical-align: middle; /* Center vertically */
                    }
                    .table th:nth-child(1),
                    .table td:nth-child(1) {
                        width: 5%; /* Row number column width */
                    }
                    .table th:nth-child(2),
                    .table td:nth-child(2) {
                        width: 20%; /* Task name column width */
                    }
                    .table th:nth-child(3),
                    .table td:nth-child(3) {
                        width: 30%; /* Description column width */
                        word-wrap: break-word; /* Allow text wrapping */
                        white-space: normal; /* Ensure text can wrap */
                    }
                    .table th:nth-child(4),
                    .table td:nth-child(4) {
                        width: 10%; /* Priority column width */
                    }
                    .table th:nth-child(5),
                    .table td:nth-child(5) {
                        width: 10%; /* Deadline column width */
                    }
                    .table th:nth-child(6),
                    .table td:nth-child(6) {
                        width: 10%; /* Status column width */
                    }
                    .table th:nth-child(7),
                    .table td:nth-child(7) {
                        width: 10%; /* Client column width */
                    }
                    .table th:nth-child(8),
                    .table td:nth-child(8) {
                        width: 10%; /* Actions column width */
                    }

                    /* Ensuring the description can take multiple lines */
                    .table td {
                        max-width: 200px; /* Set a max width to control the cell size */
                        overflow-wrap: break-word; /* Break words if they are too long */
                        hyphens: auto; /* Automatically hyphenate words if necessary */
                    }
                </style>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Description</th>
                                <th>Priority</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>Client</th>
                                <th>Client Email</th>
                                <th>Client Phone</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($addtasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Row number -->
                                    <td>{{ $task->taskName }}</td> <!-- Task name -->
                                    <td>{{ $task->description }}</td> <!-- Task description -->
                                    <td>{{ $task->priority }}</td> <!-- Task priority -->
                                    <td>{{ $task->deadline }}</td> <!-- Task deadline -->
                                    <td>{{ $task->status }}</td> <!-- Task status -->
                                    <td>{{ $task->client->name }}</td> <!-- Display client name -->
                                    <td>{{$task->client->email}}</td>
                                    <td>{{$task->client->phone}}</td>
                                    <td>
                                        <a href="{{route('admin.addtask.edit', $task->id)}}">
                                            <button class="btn btn-primary">Update</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('admin.addtask.destroy',$task->id)}}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No tasks available in Digital Marketing</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>
@endsection
