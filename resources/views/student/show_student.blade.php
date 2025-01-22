@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Student Detail</h2>
                        <a href="{{ route('students.index') }}" class="btn btn-success">List</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <strong>Name:</strong> <span>{{ $student->studentName ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Address:</strong> <span>{{ $student->address ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Phone:</strong> <span>{{ $student->phone ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Gender:</strong> <span>{{ $student->gender ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Country:</strong> <span>{{ $student->country ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Province:</strong> <span>{{ $student->province ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Birthdate:</strong> <span>{{ $student->birthdate ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Email:</strong> <span>{{ $student->email ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
