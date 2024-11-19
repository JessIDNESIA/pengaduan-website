@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/user/register.css') }}">
    <style>
        body {
            background: #fbbe81;
        }
        .btn-purple {
            background: #FF6500;
            width: 100%;
            color: #fff;
        }

        .btn-purple:hover {
            background: #FF6500;
            width: 100%;
            color: #fff;
            font-weight: 550;
        }

    </style>
@endsection

@section('title', 'Register')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" number="nik" placeholder="NIK" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" number="nama" placeholder="Full Name" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" number="username" placeholder="Username" class="form-control">
                        </div>

                        <div class="form-group">
                             <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number" number="telp" placeholder="Phone Number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">Register</button>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2" >
                    {{ Session::get('pesan') }}
                </div>
            @endif
            <a href="{{ route('ereporthub.index') }}" class="btn btn-warning text-white mt-3 w-100">Back to Home</a>
        </div>
    </div>
</div>


