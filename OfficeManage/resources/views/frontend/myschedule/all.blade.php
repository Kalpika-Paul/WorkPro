@extends('frontend.master')

@section('employee-content')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('frontend.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h3 style="margin-bottom: 20px;">All Schedule Items</h3>

            <style>
                .table-fixed {
                    table-layout: fixed; /* Force table to respect column widths */
                    width: 100%;
                }
            
                .table-fixed td, .table-fixed th {
                    white-space: normal; /* Allows the text to wrap within the cell */
                    word-wrap: break-word; /* Ensures long words break and wrap */
                    overflow-wrap: break-word; /* For modern browsers */
                    vertical-align: top; /* Align text to the top of the cell */
                }
            
                /* Specifically target the description column */
                .description-col {
                    width: 300px; /* Set a maximum width for the description column */
                    word-break: break-word; /* Break long words */
                }
            </style>
            
            <table class="table table-striped table-fixed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Schedule Name</th>
                        <th>Type</th>
                        <th>Due Date</th>
                        <th class="description-col">Description</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if($myschedules->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center">No schedule made yet.</td>
                        </tr>
                    @else
                        @foreach($myschedules as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->date }}</td>
                                <td class="description-col">{{ $item->description }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('frontend.myschedule.edit', $item->id) }}" class="btn btn-info btn-sm">Update</a>
                                </td>
                                <td>
                                    <form action="{{ route('frontend.myschedule.destroy', $item->id) }}" method="POST" style="display:inline;">
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
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Employee Dashboard by Bootstrap</span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
@endsection
