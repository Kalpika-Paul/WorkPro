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
                <h2 class="mt-5 mb-3">Task List</h2>
              

                <style>
                    .table th, .table td {
                        text-align: center; /* Center align text */
                        vertical-align: middle; /* Center vertically */
                    }
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
                        width: 25%; /* Description column width */
                        word-wrap: break-word; /* Break long words */
                        white-space: normal; /* Allow wrapping */
                        max-width: 200px; /* Set a max width for description */
                    }
                    .table th:nth-child(4),
                    .table td:nth-child(4) {
                        width: 15%; /* Department column width */
                    }
                    .table th:nth-child(5),
                    .table td:nth-child(5) {
                        width: 10%; /* Due Date column width */
                    }
                    .table th:nth-child(6),
                    .table td:nth-child(6) {
                        width: 10%; /* Status column width */
                    }
                    .table th:nth-child(7),
                    .table td:nth-child(7) {
                        width: 10%; /* Change Status column width */
                    }
                    .table th:nth-child(8),
                    .table td:nth-child(8) {
                        width: 5%; /* Update column width */
                    }
                    .table th:nth-child(9),
                    .table td:nth-child(9) {
                        width: 5%; /* Delete column width */
                    }

                    /* Custom styles for labels */
                    .label {
                        display: inline-block;
                        padding: 0.5em 1em; /* Add padding */
                        border-radius: 1em; /* Rounded corners */
                        font-size: 0.9em; /* Font size */
                        color: white; /* Text color */
                    }
                    .label-danger {
                        background-color: rgb(220, 53, 69); /* Bootstrap danger color */
                    }
                    .label-success {
                        background-color: rgb(40, 170, 43); /* Bootstrap success color */
                    }
                </style>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Task name</th>
                            <th>Description</th>
                            <th>Department</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->name}}</td>
                            <td>{{$task->des}}</td>
                            <td>{{$task->dept}}</td>
                            <td>{{$task->deadline}}</td>
                            <td class="center">
                                @if($task->status == 1)
                                    <span class="label label-danger">Not Done Yet</span>
                                @else
                                    <span class="label label-success">Done</span>
                                @endif
                            </td>
                            <td class="center">
                                <div class="new"></div>
                                <div class="span1">
                                    @if($task->status == 1)
                                        <a href="{{route('admin.task.status',$task->id)}}" class="btn btn-danger">
                                            <i class="fa-solid fa-thumbs-down"></i>
                                        </a>
                                    @else
                                        <a href="{{route('admin.task.status',$task->id)}}" class="btn btn-success">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <a href="{{route('admin.task.edit',$task->id)}}">
                                    <button class="btn btn-primary">Update</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('admin.task.delete',$task->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
