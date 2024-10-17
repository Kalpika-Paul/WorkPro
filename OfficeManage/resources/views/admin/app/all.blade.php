@extends('admin.master')

@section('admin-content')
    <div id="main-wrapper">
        @include('admin.header')
        @include('admin.sidebar')

        <div class="content-body">
            <div class="container mt-3">
                <h2 class="mt-5 mb-3">All Projects(App Development)</h2>
                

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
                                <th>Client Email</th><!-- New column for Client -->
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
                                    <td colspan="12" class="text-center">No tasks available in App Development</td>
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
