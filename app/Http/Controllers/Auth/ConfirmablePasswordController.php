<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;

class ConfirmablePasswordController extends Controller
{
    /**
     * Confirm the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            return response()->json([
                'message' => __('auth.password'),
                'success' => false,
            ], 422); // 422 Unprocessable Entity
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return response()->json([
            'message' => 'Password confirmed successfully.',
            'success' => true,
        ]);
    }
}
