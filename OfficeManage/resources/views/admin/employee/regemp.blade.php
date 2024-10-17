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

        <div class="container-fluid mt-3">
            
            <div class="container mt-5">
              <h2 class="mt-5 mb-3">Employee List</h2>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date Of Joining</th>
                        <th>Salary</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>File</th> <!-- Added column for file -->
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->address}}</td>
                          <td>{{ \Carbon\Carbon::parse($user->date_of_joining)->format('d-m-Y') }}</td>
                          <td>{{$user->salary}}/-</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->dept}}</td>
                          <td>{{$user->designation}}</td>

                          <!-- Display image directly in the table -->
                          <td>
                            @if ($user->file && in_array(pathinfo($user->file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                <img src="{{ asset('storage/files/' . $user->file) }}" alt="Employee File" width="100" height="100" style="object-fit: cover;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>

                          <td>
                            <form action="{{ route('admin.employee.regempo', $user->id) }}" method="POST">
                              @csrf
                              @method('PUT')
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
