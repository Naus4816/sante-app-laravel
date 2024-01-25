<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

    class AuthenticatedSessionController extends Controller
    {
        /**
         * Display the login view.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view('auth.login');
        }

        /**
         * Handle an incoming authentication request.
         *
         * @param  \App\Http\Requests\Auth\LoginRequest  $request
         * @return \Illuminate\Http\RedirectResponse
         */
        public function store(LoginRequest $request): JsonResponse
        {
            $request->authenticate();
            $request->session()->regenerate();
        
            $user = Auth::user();
            return response()->json([
                'success' => true,
                'isAdmin' => $user->isAdmin(),
                'redirect' => $user->isAdmin() ? route('admin.index') : RouteServiceProvider::HOME,
            ]);
        }
        
        public function destroy(Request $request): JsonResponse
        {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            return response()->json(['success' => true]);
        }
        
    }
