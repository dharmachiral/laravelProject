@extends('layouts.app')
@section('title', 'Add blogs')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h2>Blogs</h2>
                        </div>
                        <div class="col">
                            <h3><a href="{{ route('blogs.index') }}" class="btn btn-info float-end">blogs List</a></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="blogName">Blog Name</label>
                                    <input type="text" name="blogName" class="form-control"
                                        value="{{ old('blogName') }}" placeholder="Enter name">
                                </div>
                                @error('blogName')
                                    <span class="text-danger">{{ $message }}blogname</span>
                                @enderror
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="content" name="content" placeholder="Enter content">{{ old('content') }}</textarea>

                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-success w-100" type="submit">Save Change</button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('blogs.index') }}" class="btn btn-danger w-100">Cancel</a>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
