@extends('admin.master')

@section('admin-content')
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('admin.header')
        @include('admin.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container mt-3">
                <h2 class="mt-5 mb-3">All Projects (Business)</h2>
               
                <style>
                    .table th, .table td {
                        text-align: center; /* Center align text */
                        vertical-align: middle; /* Center vertically */
                        word-wrap: break-word; /* Break long words */
                        white-space: normal; /* Allow wrapping */
                        padding: 12px; /* Add some padding for a better look */
                    }
                    .table th {
                        background-color: #f8f9fa; /* Light background for the header */
                        font-weight: bold; /* Bold header text */
                    }
                    .table tbody tr:nth-child(odd) {
                        background-color: #f2f2f2; /* Zebra striping for odd rows */
                    }
                    .table tbody tr:hover {
                        background-color: #e9ecef; /* Highlight row on hover */
                    }
                    /* Column width adjustments */
                    .table th:nth-child(1),
                    .table td:nth-child(1) {
                        width: 5%; /* ID column width */
                    }
                    .table th:nth-child(2),
                    .table td:nth-child(2) {
                        width: 20%; /* Task name column width */
                    }
                    .table th:nth-child(3),
                    .table td:nth-child(3) {
                        width: 30%; /* Description column width */
                        max-width: 200px; /* Set a max width for the description */
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
                        width: 5%; /* Update column width */
                    }
                    .table th:nth-child(9),
                    .table td:nth-child(9) {
                        width: 5%; /* Delete column width */
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
                                <th>Client</th> <!-- Client column -->
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
                                        <form action="{{route('admin.addtask.destroy',$task->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No tasks available in Business</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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
