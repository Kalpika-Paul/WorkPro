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
                <h2 class="mt-5 mb-3">Client List</h2>
              

                <style>
                    .table th, .table td {
                        text-align: center; /* Center align text */
                        vertical-align: middle; /* Center vertically */
                        word-wrap: break-word; /* Break long words */
                        white-space: normal; /* Allow wrapping */
                    }
                    .table th:nth-child(1),
                    .table td:nth-child(1) {
                        width: 5%; /* ID column width */
                    }
                    .table th:nth-child(2),
                    .table td:nth-child(2) {
                        width: 20%; /* Client name column width */
                    }
                    .table th:nth-child(3),
                    .table td:nth-child(3) {
                        width: 25%; /* Email column width */
                    }
                    .table th:nth-child(4),
                    .table td:nth-child(4) {
                        width: 15%; /* Phone column width */
                    }
                    .table th:nth-child(5),
                    .table td:nth-child(5) {
                        width: 20%; /* Address column width */
                        max-width: 200px; /* Set a max width for the address */
                    }
                    .table th:nth-child(6),
                    .table td:nth-child(6) {
                        width: 10%; /* Meeting Status column width */
                    }
                    .table th:nth-child(7),
                    .table td:nth-child(7) {
                        width: 10%; /* Change Status column width */
                    }
                    .table th:nth-child(8),
                    .table td:nth-child(8) {
                        width: 15%; /* About column width */
                        max-width: 200px; /* Set a max width for about text */
                    }
                    .table th:nth-child(9),
                    .table td:nth-child(9) {
                        width: 10%; /* Created At column width */
                    }
                    .table th:nth-child(10),
                    .table td:nth-child(10) {
                        width: 5%; /* Update column width */
                    }
                    .table th:nth-child(11),
                    .table td:nth-child(11) {
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
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Meeting Status</th>
                            <th>Change Status</th>
                            <th>About</th>
                            <th>Created At</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->address }}</td>
                            <td class="center">
                                @if($client->status == 1)
                                    <span class="label label-danger">Not Done Yet</span>
                                @else
                                    <span class="label label-success">Done</span>
                                @endif
                            </td>
                            <td class="center">
                                <div class="span1">
                                    @if($client->status == 1)
                                        <a href="{{ route('admin.client.status', $client->id) }}" class="btn btn-danger">
                                            <i class="fa-solid fa-thumbs-down"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('admin.client.status', $client->id) }}" class="btn btn-success">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td>{{ $client->about }}</td>
                            <td>{{ $client->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.client.edit', $client->id) }}">
                                    <button class="btn btn-primary">Update</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.client.destroy', $client->id) }}" method="POST">
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

