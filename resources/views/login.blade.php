@extends('background')
@section('title')
    Login
@endsection

@section('form')
    <div class="w-100">
        <div class="w-100 d-flex" style="margin-top: 234px;">
            <p class="mx-auto title ">OBD TELEMATICS</p>
        </div>
        <div class="w-100 d-flex">
            <p class="mx-auto trick">Welcome back! Please login to your account.</p>
        </div>
        <div class="d-flex w-100">
            <div class="form mx-auto">
                <form action="">
                    <div class="mt-4 d-flex">
                        <input class="mx-auto input-custom" type="text" placeholder="Organization" name="organization">
                    </div>
                    <div class="mt-4 d-flex">
                        <input class="mx-auto input-custom" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="mt-4 d-flex">
                        <input class="mx-auto input-custom" type="password" placeholder="Password" name="password">
                    </div>

                    <div class="mt-5 d-flex form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox" name="remember">
                        <p style="font-size: 15px; color: #43425D; margin-left: 10px;">Remember me</p>
                        <a href="#" class="forgot" style="">Forgot Password</a>
                    </div>
                    <div class="d-flex">
                        <button class="mx-auto btn btn-login mt-5">Login</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
