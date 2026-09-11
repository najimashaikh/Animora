@extends('layouts.app')

@section('title', 'Sign In | Animora')

@section('content')
<div class="auth-page-wrapper">
    <div class="auth-page-card">
        <!-- Logo & Header -->
        <div class="auth-page-header">
            <a href="{{ route('home') }}" class="auth-page-logo-link">
                <img src="{{ asset('images/logo.png') }}" alt="Animora" class="auth-page-logo">
            </a>
            <h1 class="auth-page-title">Sign In</h1>
            <p class="auth-page-subtitle">Welcome back! Please enter your details to access your account.</p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="auth-alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('status'))
            <div class="auth-alert-info">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('login.post') }}" method="POST" class="auth-page-form">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    placeholder="name@example.com" 
                    required 
                    autofocus
                    class="auth-input"
                >
            </div>

            <div class="form-group">
                <div class="auth-label-flex">
                    <label for="password">Password</label>
                    <a href="javascript:void(0);" onclick="alert('Password reset assistance: Please reach our campus admin or call (02425) 223181.');" class="auth-forgot-link">Forgot password?</a>
                </div>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="••••••••" 
                    required 
                    class="auth-input"
                >
            </div>

            <div class="auth-remember-row">
                <label class="auth-checkbox-label">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember', true) ? 'checked' : '' }}>
                    <span>Remember me on this device</span>
                </label>
            </div>

            <button type="submit" class="btn-auth-submit-page">
                Sign In
            </button>
        </form>

        <!-- Switch to Sign Up -->
        <div class="auth-page-footer">
            <span>Don't have an account?</span>
            <a href="{{ route('register') }}" class="auth-link-bold">Sign Up</a>
        </div>
    </div>
</div>
@endsection
