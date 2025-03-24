
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

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    <input name="password" type="password" id="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
