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
                    <h2 class="text-center">New Task</h2>

                    <!-- Display Validation Errors -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('admin.task.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="taskName" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="taskDescription" class="form-label">Task Description</label>
                            <textarea class="form-control" id="taskDescription" name="des" rows="3" required>{{ old('des') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="taskSector" class="form-label">Department</label>
                            <select class="form-control" id="taskSector" name="dept" required>
                                <option value="">Select Department</option>
                                <option value="Design">Graphics Design</option>
                                <option value="Business" >Business</option>
                                <option value="Web Development" >Web Development</option>
                                <option value="App Development">App Development</option>
                                <option value="Digital Marketing" >Digital Marketing</option>
                                <option value="security" >Security</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dueDate" class="form-label">Due Date</label>
                            <input type="date" class="form-control" id="dueDate" name="deadline" value="{{ old('deadline') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Task</button>
                    </form>
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
