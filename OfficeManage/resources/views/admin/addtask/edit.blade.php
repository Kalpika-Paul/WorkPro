@extends('admin.master')

@section('admin-content')
<div id="main-wrapper">

    @include('admin.header')

    @include('admin.sidebar')

    <!-- Content body start -->
    <div class="content-body">

        <div class="container mt-5">
            <h2 class="text-center">Edit Task</h2>

 <!-- Error Messages at the top of the form -->
 @if($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif
            
            <form method="POST" action="{{ route('admin.addtask.update', $addtask->id) }}">
                @csrf
        
                <!-- Task Name -->
                <div class="mb-3">
                    <label for="taskName" class="form-label">Task Name</label>
                    <input type="text" class="form-control" id="taskName" name="taskName" 
                           value="{{ old('taskName', $addtask->taskName) }}" required>
                </div>

                <!-- Clients -->
                <div class="mb-3">
                    <label for="client" class="form-label">Client</label>
                    <select class="form-select" id="client" name="client" required>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}" 
                                {{ old('client', $addtask->client_id) == $client->id ? 'selected' : '' }}>
                                {{ $client->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Department -->
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-select" id="department" name="dept" required>
                        <option value="Business" {{ old('dept', $addtask->dept) == 'Business' ? 'selected' : '' }}>Business</option>
                        <option value="Design" {{ old('dept', $addtask->dept) == 'Design' ? 'selected' : '' }}>Design</option>
                        <option value="Web Development" {{ old('dept', $addtask->dept) == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                        <option value="App Development" {{ old('dept', $addtask->dept) == 'App Development' ? 'selected' : '' }}>App Development</option>
                        <option value="Digital Marketing" {{ old('dept', $addtask->dept) == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $addtask->description) }}</textarea>
                </div>

                <!-- Priority -->
                <div class="mb-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-select" id="priority" name="priority" required>
                        <option value="high" {{ old('priority', $addtask->priority) == 'high' ? 'selected' : '' }}>High</option>
                        <option value="medium" {{ old('priority', $addtask->priority) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="low" {{ old('priority', $addtask->priority) == 'low' ? 'selected' : '' }}>Low</option>
                    </select>
                </div>

                <!-- Deadline -->
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" 
                           value="{{ old('deadline', $addtask->deadline) }}" required>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="not_started" {{ old('status', $addtask->status) == 'not_started' ? 'selected' : '' }}>Not Started</option>
                        <option value="in_progress" {{ old('status', $addtask->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="completed" {{ old('status', $addtask->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Task</button>
            </form>
        </div>

    </div>
    @include('admin.footer')

</div>
@endsection
