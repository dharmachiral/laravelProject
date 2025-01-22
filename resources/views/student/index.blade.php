@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h2>list of Students</h2>

                            </div>
                            <div class="col">
                                <h3><a href="{{ route('students.create') }}" class="btn btn-success float-end">Create</a></h3>
                            </div>
                        </div>
                    </div>
                    {{-- success msg print --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table" border="1" cellspacing="10" cellpadding="5">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>country</th>
                                    <th>province</th>
                                    <th>birthdate</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $id => $std)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $std->studentName }}</td>
                                        <td>{{ $std->address }}</td>
                                        <td>{{ $std->phone }}</td>
                                        <td>{{ $std->gender }}</td>
                                        <td>{{ $std->country }}</td>
                                        <td>{{ $std->province }}</td>
                                        <td>{{ $std->birthdate }}</td>
                                        <td>{{ $std->email }}</td>
                                        <td>
                                            <!-- Edit Button -->
                                            <a class="btn btn-success " href="{{ route('students.edit', $std->id) }}">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('students.destroy', $std->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>

                                            <!-- Show Button -->
                                            <a class="btn btn-info" href="{{ route('students.show', $std->id) }}">
                                                <i class="bi bi-eye"></i> Show
                                            </a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
