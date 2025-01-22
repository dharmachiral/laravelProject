@extends('layouts.app')

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
                        <form action="{{ route('students.store') }}" method="post">
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
                                            placeholder="Enter Student Address">
                                    </div>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Enter Student Number">
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
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
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
                                            placeholder="Enter Country Name">
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
                                            <option value="1">koshi</option>
                                            <option value="2">Madhesh</option>
                                            <option value="3">Bagmati Province</option>
                                            <option value="4">Gandaki Province</option>
                                            <option value="5">Lumbini Province</option>
                                            <option value="6">Karnali Province</option>
                                            <option value="7">Sudurpashchim Province</option>
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
                                            value="{{ date('Y-m-d') }}">
                                    </div>
                                    @error('birthdate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email">
                                    </div>
                                    @error('email')
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
                                    <a href="{{ route('students.index') }}" class="btn btn-danger w-100"
                                        type="submit">Cancel</a>
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
