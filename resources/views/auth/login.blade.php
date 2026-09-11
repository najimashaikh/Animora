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

        <!-- Inline AJAX Feedback & Alert (No page reload) -->
        <div id="loginAlert" class="auth-alert-box" style="display: none;"></div>

        <!-- Fallback Validation Errors -->
        @if ($errors->any())
            <div class="auth-alert-box auth-alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('status'))
            <div class="auth-alert-box auth-alert-info">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <!-- Login Form with Spinning Button on Submit -->
        <form id="loginForm" action="{{ route('login.post') }}" method="POST" class="auth-page-form" onsubmit="handleLoginSubmit(event)">
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

            <button type="submit" id="btnLoginSubmit" class="btn-auth-submit-page">
                <span id="btnLoginText">Sign In</span>
            </button>
        </form>

        <!-- Switch to Sign Up -->
        <div class="auth-page-footer">
            <span>Don't have an account?</span>
            <a href="{{ route('register') }}" class="auth-link-bold">Sign Up</a>
        </div>
    </div>
</div>

<script>
    async function handleLoginSubmit(e) {
        e.preventDefault();
        const form = document.getElementById('loginForm');
        const btn = document.getElementById('btnLoginSubmit');
        const alertBox = document.getElementById('loginAlert');

        if (!form || !btn) return;

        // Button spinning animation (no page reload)
        btn.disabled = true;
        btn.innerHTML = '<span class="btn-spinner"></span> <span>Verifying...</span>';
        alertBox.style.display = 'none';

        const formData = new FormData(form);
        const metaCsrf = document.querySelector('meta[name="csrf-token"]');
        const csrfToken = metaCsrf ? metaCsrf.getAttribute('content') : '';

        try {
            const response = await fetch("{{ route('login.post') }}", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: formData
            });
            const data = await response.json();

            if (response.ok && data.success) {
                // Success: Verification passed!
                btn.innerHTML = '<span>✓ Verified!</span>';
                alertBox.className = 'auth-alert-box auth-alert-success';
                alertBox.innerHTML = '<p>' + data.message + '</p>';
                alertBox.style.display = 'block';

                setTimeout(() => {
                    window.location.href = data.redirect || "{{ route('home') }}";
                }, 800);
            } else {
                // Error: restore button
                btn.disabled = false;
                btn.innerHTML = '<span id="btnLoginText">Sign In</span>';
                alertBox.className = 'auth-alert-box auth-alert-error';
                alertBox.innerHTML = '<p>' + (data.message || 'The provided credentials do not match our records.') + '</p>';
                alertBox.style.display = 'block';
            }
        } catch (err) {
            btn.disabled = false;
            btn.innerHTML = '<span id="btnLoginText">Sign In</span>';
            alertBox.className = 'auth-alert-box auth-alert-error';
            alertBox.innerHTML = '<p>Network error. Please try again.</p>';
            alertBox.style.display = 'block';
        }
    }
</script>
@endsection
