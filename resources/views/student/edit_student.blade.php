@extends('layouts.app')
@section('title','Edit students')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                {{-- <h3>{{ __('Students') }}</h3> --}}

                            </div>
                            <div class="col">
                                <h3><a href="{{ route('students.index') }}" class="btn btn-info float-end">Students list</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" name="studentName" class="form-control"
                                            value="{{ $student->studentName}}" placeholder="Enter name">
                                    </div>
                                    @error('studentName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $student->address}}"  placeholder="Enter Student Address">
                                    </div>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                        value="{{ $student->phone}}"  placeholder="Enter Student Number">
                                    </div>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender">
                                            <option value="" select disabled>Select Gender</option>
                                            <option value="male"  @if($student['gender']=='male') selected @endif >Male</option>
                                            <option value="other"  @if($student['gender']=='female') selected @endif >Other</option>
                                            <option value="female"  @if($student['gender']=='other') selected @endif >Female</option>
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
                                        value="{{ $student->country}}"  placeholder="Enter Country Name">
                                    </div>
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="province" class="form-label">Province</label>
                                        <select class="form-select" id="province"  value name="province">
                                            <option value="" select disabled>select province</option>
                                            <option value="1" @if($student['province']=='1') selected @endif>koshi</option>
                                            <option value="3"@if($student['province']=='2') selected @endif>Bagmati Province</option>
                                            <option value="4"@if($student['province']=='3') selected @endif>Gandaki Province</option>
                                            <option value="2"@if($student['province']=='4') selected @endif>Madhesh</option>
                                            <option value="5"@if($student['province']=='5') selected @endif>Lumbini Province</option>
                                            <option value="6"@if($student['province']=='6') selected @endif>Karnali Province</option>
                                            <option value="7"@if($student['province']=='7') selected @endif>Sudurpashchim Province</option>
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
                                        value="{{ $student->birthdate}}" >
                                    </div>
                                    @error('birthdate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $student->email}}"   placeholder="Enter Email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="profile" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="profile" name="profile">
                                        <img src="{{ asset('images/students/' . $student->profile) }}" width="100" alt="No image">
                                    </div>
                                    @error('profile')
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
                                    <a href="{{ route('students.edit') }}" class="btn btn-danger w-100"
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
