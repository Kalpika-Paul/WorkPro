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


                    
                    <h2 class="text-center">Update Task</h2>

                   
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="{{ route('admin.task.update', $task->id) }}" method="POST">
                        @csrf
                       <!-- Use this for update requests -->

                        <div class="mb-3">
                            <label for="taskName" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="name" required value="{{ old('name', $task->name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="taskDescription" class="form-label">Task Description</label>
                            <textarea class="form-control" id="taskDescription" name="des" rows="3" required>{{ old('des', $task->des) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="taskSector" class="form-label">Department</label>
                            <select class="form-control" id="taskSector" name="dept" required>
                                <option value="">Select Department</option>
                                <option value="Design" {{ old('dept', $task->dept) == 'Design' ? 'selected' : '' }}>Graphics Design</option>
                                <option value="Business" {{ old('dept', $task->dept) == 'Business' ? 'selected' : '' }}>Business</option>
                                <option value="Web Development" {{ old('dept', $task->dept) == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="App Development" {{ old('dept', $task->dept) == 'App Development' ? 'selected' : '' }}>App Development</option>
                                <option value="Digital Marketing" {{ old('dept', $task->dept) == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                <option value="security" {{ old('dept', $task->dept) == 'security' ? 'selected' : '' }}>Security</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="dueDate" class="form-label">Due Date</label>
                            <input type="date" class="form-control" id="dueDate" name="deadline" required value="{{ old('deadline', $task->deadline) }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Task</button>
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
