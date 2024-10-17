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
                <h2 class="text-center">New Client</h2>
                
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

                <form method="POST" action="{{ route('admin.client.store') }}">
                    @csrf
                    
                    <!-- Client Name -->
                    <div class="mb-3">
                        <label for="clientName" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="clientName" name="name" value="{{ old('name') }}" placeholder="Enter client name" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="clientEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="clientEmail" name="email" value="{{ old('email') }}" placeholder="Enter client email" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="clientPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="clientPhone" name="phone" value="{{ old('phone') }}" placeholder="Enter client phone number" required>
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="clientAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="clientAddress" name="address" placeholder="Enter client address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- About -->
                    <div class="mb-3">
                        <label for="clientAbout" class="form-label">About</label>
                        <textarea class="form-control" id="clientAbout" name="about" placeholder="Enter about" required>{{ old('about') }}</textarea>
                        @error('about')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Meeting Time -->
                    <div class="mb-3">
                        <label for="meetingTime" class="form-label">Meeting Time</label>
                        <input type="datetime-local" class="form-control" id="meetingTime" name="meeting_time" value="{{ old('meeting_time') }}" required>
                        @error('meeting_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Submit Button -->
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
