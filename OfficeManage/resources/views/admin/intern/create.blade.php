

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
                <h2 class="text-center">New Intern</h2>
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
                <form action="{{route('admin.intern.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="internName" class="form-label">Intern Name</label>
                        <input type="text" class="form-control" id="internName" name="name" required>
                    </div>
                
                
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select class="form-control" id="department" name="dept" required>
                            <option value="">Select Department</option>
                            <option value="Design">Graphics Design</option>
                            <option value="Business">Business</option>
                            <option value="Web Development">Web Development</option>
                            <option value="App Development">App Development</option>
                            <option value="Digital Marketing ">Digital Marketing</option>
                            <option value="Security">Security</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="supervisor" class="form-label">Supervisor</label>
                        <input type="text" class="form-control" id="supervisor" name="supervisor" required>
                    </div>

                    <div class="mb-3">
                        <label for="stipend" class="form-label">Stipend</label>
                        <input type="number" class="form-control" id="stipend" name="stipend" placeholder="Enter Stipend Amount in Taka">
                    </div>

                    <div class="mb-3">
                        <label for="education" class="form-label">Educational Qualification</label>
                        <input type="text" class="form-control" id="education" name="edu" required placeholder="e.g. Bachelors in Computer Science">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class="mb-3">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="startDate" name="start_date" required>
                        @error('start_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="endDate" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="endDate" name="end_date" required>
                        @error('end_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Intern Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="active">Active</option>
                            <option value="on_leave">On Leave</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
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