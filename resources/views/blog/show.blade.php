@extends('layouts.app')
@section('title','Show blog')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Blog Detail</h2>
                        <a href="{{ route('blogs.index') }}" class="btn btn-success">List</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <strong>Name:</strong> <span>{{ $blog->blogName ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>
                        <div class="mb-2">
                            <strong>Content:</strong> <span>{{ $blog->content ?? '<span class="border px-2">Not Available</span>' }}</span>
                        </div>

                        <div class="mb-2">
                        <strong>Profile:</strong>  <img src="{{ asset('images/blogs/' . $blog->image) }}" width="50" alt="No image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
