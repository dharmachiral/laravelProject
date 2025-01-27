@extends('layouts.app')
@section('title', 'Add Students')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h2>Students</h2>
                        </div>
                        <div class="col">
                            <h3><a href="{{ route('students.index') }}" class="btn btn-info float-end">Students List</a></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" name="studentName" class="form-control"
                                        value="{{ old('studentName') }}" placeholder="Enter name">
                                </div>
                                @error('studentName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ old('address') }}" placeholder="Enter Student Address">
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}" placeholder="Enter Student Number">
                                </div>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" name="country"
                                        value="{{ old('country') }}" placeholder="Enter Country Name">
                                </div>
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="province" class="form-label">Province</label>
                                    <select class="form-select" id="province" name="province">
                                        <option value="">Select Province</option>
                                        <option value="1" {{ old('province') == '1' ? 'selected' : '' }}>Koshi</option>
                                        <option value="2" {{ old('province') == '2' ? 'selected' : '' }}>Madhesh</option>
                                        <option value="3" {{ old('province') == '3' ? 'selected' : '' }}>Bagmati Province</option>
                                        <option value="4" {{ old('province') == '4' ? 'selected' : '' }}>Gandaki Province</option>
                                        <option value="5" {{ old('province') == '5' ? 'selected' : '' }}>Lumbini Province</option>
                                        <option value="6" {{ old('province') == '6' ? 'selected' : '' }}>Karnali Province</option>
                                        <option value="7" {{ old('province') == '7' ? 'selected' : '' }}>Sudurpashchim Province</option>
                                    </select>
                                </div>
                                @error('province')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birthdate" class="form-label">Birthdate</label>
                                    <input type="date" class="form-control" id="birthdate" name="birthdate"
                                        value="{{ old('birthdate') }}">
                                </div>
                                @error('birthdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Enter Email">
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profile" class="form-label">Profile</label>
                                    <input type="file" name="profile" id="profile" class="form-control">
                                    @error('profile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-success w-100" type="submit">Save Change</button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('students.index') }}" class="btn btn-danger w-100">Cancel</a>
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
