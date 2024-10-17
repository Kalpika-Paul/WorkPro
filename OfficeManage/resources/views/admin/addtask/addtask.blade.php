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


                <h2 class="text-center">Assign Project</h2>
                <form method="POST" action="{{route('admin.addtask.store')}}" >
                    @csrf
             
                    <div class="mb-3">
                        <label for="taskName" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter project name" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="client" class="form-label">Clients</label>
                        <select class="form-select" id="client" name="client" required>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="client" class="form-label">Client Email</label>
                        <select class="form-select" id="client" name="client" required>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="client" class="form-label">Client Phone</label>
                        <select class="form-select" id="client" name="client" required>
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->phone }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Department -->
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select class="form-select" id="department" name="dept" required>
                            <option value="Business">Business</option>
                            <option value="Design">Design</option>
                            <option value="Web development">Web Development</option>
                            <option value="App development">App Development</option>
                            <option value="Digital marketing">Digital Marketing</option>
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter task description" required></textarea>
                    </div>

                    <!-- Priority -->
                    <div class="mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select class="form-select" id="priority" name="priority" required>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </div>

                    <!-- Deadline -->
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                     
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="not_started">Not Started</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                   
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Assign </button>
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
