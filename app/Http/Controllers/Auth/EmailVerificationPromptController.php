<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return $request->user()->hasVerifiedEmail()
                    ? response()->json([
                        'message' => 'Email already verified.',
                        'verified' => true,
                    ])
                    : response()->json([
                        'message' => 'Email not verified.',
                        'verified' => false,
                    ]);
    }
}
