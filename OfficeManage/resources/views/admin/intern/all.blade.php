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
                <h2 class="mt-5 mb-3">Intern List</h2>

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
                        width: 15%; /* Intern Name column width */
                    }
                    .table th:nth-child(3),
                    .table td:nth-child(3) {
                        width: 10%; /* Department column width */
                    }
                    .table th:nth-child(4),
                    .table td:nth-child(4) {
                        width: 15%; /* Supervisor column width */
                    }
                    .table th:nth-child(5),
                    .table td:nth-child(5) {
                        width: 10%; /* Stipend column width */
                    }
                    .table th:nth-child(6),
                    .table td:nth-child(6) {
                        width: 15%; /* Educational Qualification column width */
                        word-wrap: break-word; /* Break long words */
                        white-space: normal; /* Allow wrapping */
                        max-width: 150px; /* Set a max width for qualification */
                    }
                    .table th:nth-child(7),
                    .table td:nth-child(7) {
                        width: 10%; /* Email column width */
                    }
                    .table th:nth-child(8),
                    .table td:nth-child(8) {
                        width: 10%; /* Phone column width */
                    }
                    .table th:nth-child(9),
                    .table td:nth-child(9) {
                        width: 15%; /* Address column width */
                        word-wrap: break-word; /* Break long words */
                        white-space: normal; /* Allow wrapping */
                        max-width: 150px; /* Set a max width for address */
                    }
                    .table th:nth-child(10),
                    .table td:nth-child(10) {
                        width: 10%; /* Start Date column width */
                    }
                    .table th:nth-child(11),
                    .table td:nth-child(11) {
                        width: 10%; /* End Date column width */
                    }
                    .table th:nth-child(12),
                    .table td:nth-child(12) {
                        width: 10%; /* Internship Status column width */
                    }
                    .table th:nth-child(13),
                    .table td:nth-child(13) {
                        width: 5%; /* Update column width */
                    }
                    .table th:nth-child(14),
                    .table td:nth-child(14) {
                        width: 5%; /* Delete column width */
                    }
                </style>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Intern Name</th>
                                <th>Department</th>
                                <th>Supervisor</th>
                                <th>Stipend</th>
                                <th>Educational Qualification</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Internship Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($interns->isEmpty())
                                <tr>
                                    <td colspan="14" class="text-center">No interns available yet.</td>
                                </tr>
                            @else
                                @foreach ($interns as $intern)
                                    <tr>
                                        <td>{{ $intern->id }}</td>
                                        <td>{{ $intern->name }}</td>
                                        <td>{{ $intern->dept }}</td>
                                        <td>{{ $intern->supervisor }}</td>
                                        <td>{{ $intern->stipend }}</td>
                                        <td>{{ $intern->edu }}</td>
                                        <td>{{ $intern->email }}</td>
                                        <td>{{ $intern->phone }}</td>
                                        <td>{{ $intern->address }}</td>
                                        <td>{{ $intern->start_date }}</td>
                                        <td>{{ $intern->end_date }}</td>
                                        <td>{{ $intern->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.intern.edit', $intern->id) }}">
                                                <button class="btn btn-primary">Update</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.intern.destroy', $intern->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE') <!-- Changed to DELETE -->
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
