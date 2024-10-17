@extends('admin.master')

@section('admin-content')
    <div id="main-wrapper">
        @include('admin.header')
        @include('admin.sidebar')

        <div class="content-body">
            <div class="container mt-5">
                <h2 class="mb-4">Leave Approval</h2>

                <style>
                    .card {
                        margin-bottom: 20px;
                    }
                    .card-header {
                        background-color: #f7f7f7;
                    }
                    .card-body {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }
                    .card-buttons {
                        display: flex;
                        gap: 10px;
                    }
                </style>

                <div class="row">
                    @foreach($leaves as $leave)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $leave->user->name ?? 'No User Assigned' }}</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <p><strong>Type:</strong> {{ $leave->type }}</p>
                                    <p><strong>Start Date:</strong> {{ $leave->start_date }}</p>
                                    <p><strong>End Date:</strong> {{ $leave->end_date }}</p>
                                    <p><strong>Reason:</strong> {{ $leave->reason }}</p>
                                </div>
                                <div class="card-buttons">
                                    <!-- Approve Button -->
                                    @if($leave->status == 'approved')
                                        {{-- Approved Button (bigger size) --}}
                                        <button class="btn btn-success btn-lg" style="width: 100%;">Approved</button>
                                    @else
                                        {{-- Approve Button --}}
                                        <form action="{{ route('admin.leave.approve', $leave->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                        </form>
                                    @endif
                                
                                    <!-- Decline Button -->
                                    @if($leave->status == 'declined')
                                        {{-- Declined Button (disabled, optional) --}}
                                        <button class="btn btn-danger btn-lg" style="width: 100%;">Declined</button>
                                    @else
                                        {{-- Decline Button --}}
                                        <form action="{{ route('admin.leave.decline', $leave->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>
@endsection
