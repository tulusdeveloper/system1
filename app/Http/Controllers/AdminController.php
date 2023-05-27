<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard(){
        if (Auth::guard('web')->check()) {
        return view('admin.index');
        }
        return redirect('/admin/login');

    } // End Method

    public function AdminLogout(Request $request)//: RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End Method

    public function AdminLogin(){
        return view('admin.admin_login');
    }// End Method

    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }// End Method
}