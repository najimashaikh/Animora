<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Show the dedicated Sign In page.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    /**
     * Show the dedicated Sign Up page.
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    /**
     * Handle user Sign In.
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()->first(),
                ], 422);
            }
            return back()->withErrors($validator)->onlyInput('email');
        }

        $remember = $request->boolean('remember', true);

        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            $request->session()->regenerate();

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Welcome back!',
                    'redirect' => route('home'),
                ]);
            }

            return redirect()->intended(route('home'))->with('status', 'Welcome back!');
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'The provided credentials do not match our records.',
            ], 401);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle user Sign Up / Registration.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'program' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()->first(),
                ], 422);
            }
            return back()->withErrors($validator)->withInput();
        }

        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'program' => $request->input('program', 'General'),
                'password' => Hash::make($request->input('password')),
            ]);

            Auth::login($user, true);

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => '✨ Verification successful! Welcome to Animora, ' . $user->name . '. Redirecting...',
                    'redirect' => route('home'),
                ]);
            }

            return redirect()->route('home')->with('status', 'Account created successfully! Welcome to Animora.');
        } catch (\Exception $e) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Database error: ' . $e->getMessage(),
                ], 500);
            }
            return back()->withErrors(['email' => 'Database error occurred.'])->withInput();
        }
    }

    /**
     * Handle user logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    /**
     * Handle contact form submission:
     * Stores contact data in Neon PostgreSQL database and sends email notification.
     */
    public function submitContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'course_interest' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'course_interest' => $request->course_interest,
                'message' => $request->message,
            ]);

            // Web3Forms email notification is dispatched directly from the client side (browser)
            // to comply with Web3Forms API requirements and ensure fast DB response without server timeouts.

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully. Our campus team will contact you shortly.',
                'contact_id' => $contact->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save inquiry: ' . $e->getMessage(),
            ], 500);
        }
    }
}
