
@extends('site.layouts.base')

@section('title', $title)

@section('content')

<div class="page-content">
    <div class="page-title">
        <h1>Login</h1>
    </div>

    <div class="page-info">
        <p>Enter your email and password to login.</p>
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="POST" action="{{ route('site.login') }}">
                @csrf

                <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" >
                <br>
                <input name="password" type="password" id="password" placeholder="Password" >
                <button type="submit">Login</button>
            </form>
            {{ isset($error) && $error != '' ? $error : '' }}
        </div>
    </div>
</div>
@endsection
