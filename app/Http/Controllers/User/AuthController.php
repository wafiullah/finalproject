<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email',
            'name' => 'required|string',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string',
        ]);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registration successfull',
        ]);
    }

    public function authenticate(Request $request)
    {
        $validator = $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'The provided credentials are incorrect.'], 403);
        }

        $token = $user->createToken('AppToken')->plainTextToken;

        return response()->json([
            'company_user_token' => $token,
            'company_user' => $user,
        ]);
    }

    public function activeUsers($user)
    {
        return User::query()
        ->select(['id', 'avatar', 'name', 'sur_name', 'status'])
        ->where('status', 1)
        ->where('id', '!=', $user->id)
        ->get();
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->noContent();
    }
}
