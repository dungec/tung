@extends('background')
@section('title')
    Forgot Password
@endsection
@section('form')
<div class="w-100">
    <div class="w-100 d-flex" style="margin-top: 234px;">
        <p class="mx-auto title ">IMPEKABLE</p>
    </div>
    <div class="w-100 d-flex">
        <p class="mx-auto trick">Enter your email and we send you a password reset link.</p>
    </div>
    <div class="d-flex w-100">
        <div class="form mx-auto">
            <form action="">

                <div class="mt-4 d-flex">
                    <input class="mx-auto input-custom" type="email" placeholder="Email" name="email">
                </div>

                <div class="d-flex">
                    <button class="mx-auto btn btn-forgot mt-5">Send Request</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
