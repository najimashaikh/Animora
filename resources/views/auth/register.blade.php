@extends('layouts.app')

@section('title', 'Sign Up | Animora')

@section('content')
<div class="auth-page-wrapper">
    <div class="auth-page-card">
        <!-- Logo & Header -->
        <div class="auth-page-header">
            <a href="{{ route('home') }}" class="auth-page-logo-link">
                <img src="{{ asset('images/logo.png') }}" alt="Animora" class="auth-page-logo">
            </a>
            <h1 class="auth-page-title">Create an Account</h1>
            <p class="auth-page-subtitle">Join Animora to access student rigs, assets, and learning materials.</p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="auth-alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Registration Form -->
        <form action="{{ route('register.post') }}" method="POST" class="auth-page-form">
            @csrf

            <div class="form-group">
                <label for="name">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name') }}" 
                    placeholder="Enter your full name" 
                    required 
                    autofocus
                    class="auth-input"
                >
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    placeholder="name@example.com" 
                    required 
                    class="auth-input"
                >
            </div>

            <div class="form-group">
                <label for="program">Enrolled / Target Program</label>
                <select id="program" name="program" class="auth-select">
                    <option value="3D Animation" {{ old('program') == '3D Animation' ? 'selected' : '' }}>2-Year Full-Time – 3D Animation</option>
                    <option value="Game Art Design" {{ old('program') == 'Game Art Design' ? 'selected' : '' }}>2-Year Full-Time – Game Art Design</option>
                    <option value="VFX" {{ old('program') == 'VFX' ? 'selected' : '' }}>2-Year Full-Time – VFX</option>
                    <option value="Professional Program" {{ old('program') == 'Professional Program' ? 'selected' : '' }}>3-Year Professional Program (2D, 3D, VFX)</option>
                    <option value="Individual Courses" {{ old('program') == 'Individual Courses' ? 'selected' : '' }}>1-Year Full-Time – Individual Courses</option>
                    <option value="Short Term Courses" {{ old('program') == 'Short Term Courses' ? 'selected' : '' }}>10-Week On-Campus Short Term</option>
                    <option value="General Student" {{ old('program') == 'General Student' ? 'selected' : '' }}>General Student / Creator</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Minimum 6 characters" 
                    required 
                    class="auth-input"
                >
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    placeholder="Re-enter password" 
                    required 
                    class="auth-input"
                >
            </div>

            <button type="submit" class="btn-auth-submit-page">
                Sign Up
            </button>
        </form>

        <!-- Switch to Sign In -->
        <div class="auth-page-footer">
            <span>Already have an account?</span>
            <a href="{{ route('login') }}" class="auth-link-bold">Sign In</a>
        </div>
    </div>
</div>
@endsection
