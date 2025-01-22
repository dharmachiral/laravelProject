@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('list of Students') }}</div>

                <body>
                    <a href="{{ route('students.create') }}" style="color:green;" >Add New Student</a>
                    <table border='1' cellspacing="0" cellpadding="5" >
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
                            {{-- <th>Action</th> --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>dharma chiral</td>
                            <td>doti</td>
                            <td>9876543210</td>
                            <td>male</td>
                            <td>nepal</td>
                            <td>koshi</td>
                            <td>2002-02-02</td>
                            <td>dharma@gmail.com</td>
                            {{-- <th>Action</th> --}}
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>dharma chiral</td>
                            <td>doti</td>
                            <td>9876543210</td>
                            <td>male</td>
                            <td>nepal</td>
                            <td>koshi</td>
                            <td>2002-02-02</td>
                            <td>dharma@gmail.com</td>
                            {{-- <th>Action</th> --}}
                        </tr>
                        {{-- @foreach ($students as $id=>$std )
                        <tr>
                            <td>{{ $std->id }}</td>
                            <td>{{ $std->studentName }}</td>
                            <td>{{ $std->address }}</td>
                            <td>{{ $std->phone }}</td>
                            <td>{{ $std->gender }}</td>
                            <td>{{ $std->country }}</td>
                            <td>{{ $std->province }}</td>
                            <td>{{ $std->birthdate }}</td>
                            <td>{{ $std->email }}</td> --}}

                            {{-- <td><a href="{{ route('update.page', ['id' => $std->id]) }}">Edit</a> | <a href="{{ route('delete.student', ['id' => $std->id]) }}">Delete</a></td> --}}
                            {{-- <td></td> --}}

                             {{-- href="{{ route('update_student', ['id' => $std->id]) }}">Update</a></td>  --}}

                        {{-- </tr>
                        @endforeach --}}
                    </table>
                </body>
            </div>
        </div>
    </div>
</div>
@endsection
