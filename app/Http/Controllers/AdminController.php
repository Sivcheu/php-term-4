<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\Org;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function adminLoginForm()
    {
        return view('admin/login');
    }

    public function adminLogin(Request $request)
    {
        $admin = Admin::where(['name' => $request->name])->first();
        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return "name and password in wrong";
        } else {
            $request->session()->put('admin', $admin);
            return redirect('/admin');
        }

    }

    public function logout()
    {
        Session::forget('admin');
        return redirect('/home');
    }
}
