@extends('layouts.app')
@section('title','view students')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h2>list of Blogs</h2>

                            </div>
                            <div class="col">
                                <h3><a href="{{ route('blogs.create') }}" class="btn btn-success float-end">Create</a></h3>
                            </div>
                        </div>
                    </div>
                    {{-- succcess msg print --}}
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
                                    <th>Blog Name</th>
                                    <th>Content</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $id => $blg)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blg->blogName }}</td>
                                        <td>{{ $blg->content }}</td>
                                        <td>
                                            <img src="{{ asset('images/blogs/' . $blg->image) }}" width="50" alt="No image">
                                        </td>

                                        <td>
                                            <!-- Edit Button -->
                                            <a class="btn btn-success " href="{{ route('blogs.edit', $blg->id) }}">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('blogs.destroy', $blg->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>

                                            <!-- Show Button -->
                                            <a class="btn btn-info" href="{{ route('blogs.show', $blg->id) }}">
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
