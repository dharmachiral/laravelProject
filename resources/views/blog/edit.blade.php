@extends('layouts.app')
@section('title','Edit blogs')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                {{-- <h3>{{ __('blogs') }}</h3> --}}

                            </div>
                            <div class="col">
                                <h3><a href="{{ route('blogs.index') }}" class="btn btn-info float-end">blogs list</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="blogName">Full Name</label>
                                        <input type="text" name="blogName" class="form-control"
                                            value="{{ $blog->blogName}}" placeholder="Enter name">
                                    </div>
                                    @error('blogName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        <img src="{{ asset('images/blogs/' . $blog->image) }}" width="100" alt="No image">
                                    </div>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" id="content" name="content" value="{{ $blog->content}}" >{{ $blog->content}}</textarea>

                                        {{-- <input type="text" class="form-control" id="content" name="content"
                                        value="{{ $blog->content}}"  placeholder="Enter blog content"> --}}
                                    </div>
                                    @error('content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success w-100" type="submit">Save Change</button>
                                </div>
                                {{-- <div class="col-md-6">
                                    <a href="{{ route('blogs.edit') }}" class="btn btn-danger w-100"
                                        type="submit">Cancel</a>
                                </div> --}}
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
