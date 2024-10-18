@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Edit Profile Info</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('user.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control"  value="{{ Auth::user()->name }}">
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control"  value="{{ Auth::user()->email}}">
                        @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Update Password</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('user.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <label for="name">Current Password</label>
                        <input type="text" name="name" class="form-control"  value="{{ Auth::user()->name }}">
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control"  value="{{ Auth::user()->email}}">
                        @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
