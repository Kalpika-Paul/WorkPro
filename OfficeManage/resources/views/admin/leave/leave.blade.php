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
            <div class="container mt-5">
                <h2 class="mb-4">Leave Applications</h2>
                
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
                        width: 20%; /* Name column width */
                    }
                    .table th:nth-child(3),
                    .table td:nth-child(3) {
                        width: 15%; /* Type column width */
                    }
                    .table th:nth-child(4),
                    .table td:nth-child(4) {
                        width: 15%; /* Start Date column width */
                    }
                    .table th:nth-child(5),
                    .table td:nth-child(5) {
                        width: 15%; /* End Date column width */
                    }
                    .table th:nth-child(6),
                    .table td:nth-child(6) {
                        width: 20%; /* Reason column width */
                        word-wrap: break-word; /* Allow text wrapping */
                        white-space: normal; /* Ensure text can wrap */
                    }
                    .table th:nth-child(7),
                    .table td:nth-child(7) {
                        width: 10%; /* Actions column width */
                    }
                </style>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Reason</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through leave applications and display them -->
                        @foreach($leaves as $leave)
                            <tr>
                                <td>{{ $leave->id }}</td>
                                <td>{{ $leave->user->name ?? 'No User Assigned' }}</td>
                                <td>{{ $leave->type }}</td>
                                <td>{{ $leave->start_date }}</td>
                                <td>{{ $leave->end_date }}</td>
                                <td>{{ $leave->reason }}</td>
                                <td>
                                    <form action="{{ route('frontend.leave.destroy', $leave->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('PUT') <!-- Use DELETE for destroying the resource -->
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
