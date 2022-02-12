<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\UserAccountBlock;
use App\Mail\UserAccountUnBlock;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query()
        ->when($request->email, function ($query, $email) {
            return $query->where('email', $email);
        })
        ->when($request->name, function ($query, $name) {
            return $query->where('first_name', $name);
            return $query->Orwhere('last_name', $name);
        })
        ->latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function profile($id)
    {
        $user = User::with('state')->where(['id' => $id])->first();
        $sales = Sale::where('user_id', $id)->count();

        return view('admin.users.profile', compact('user', 'sales'));
    }


    public function blockUserAccount(Request $request)
    {
        $user = User::find($request->userId);
        $user->status = 1;
        $user->save();

        return redirect()->back()->with('success', 'Account successfully blocked.');
    }

    public function unblockUserAccount($userId)
    {
        $user = User::find($userId);
        $user->status = 0;
        $user->save();

        return redirect()->back()->with('success', 'Account successfully unblocked.');
    }

    public function deleteUser(Request $request)
    {
        User::find($request->id)->delete();

        return redirect()->back()->with('success', 'User successfully deleted.');
    }

   
}
