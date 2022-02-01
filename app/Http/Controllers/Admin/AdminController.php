<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        try {
            $user = auth()->guard('admin')->user();
            $request->validate([
                'name' => 'required|max:100',
            ]);

            if ($request->current_password != '') {
                $request->validate([
                    'current_password' => 'required',
                    'new_password' => 'required|string|min:6',
                    'password_confirmation' => 'required|same:new_password',
                ]);
                if (Hash::check($request->current_password, $user->password)) {
                    $user->password = Hash::make($request->new_password);
                } else {
                    return redirect()->back()->with('error', 'Your old password does not match.');
                }
            }

            $user->name = $request->name;
            $user->save();

            return redirect()->back()->with('success', 'Profile successfully updated');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
