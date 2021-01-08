<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Username and password in wrong";
        } else {
            $request->session()->put('user', $user);
            return redirect('/home')->with('login','You are login !');
        }
    }

    public function registerForm()
    {
        return view('user.register');
    }

    public function userStore(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'min:2', 'max:255'],
            'lastname' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        // $user (Save All)
        // $user->id (Save Id)
        $request->session()->put('user', $user);
        return redirect('/home')->with('register','You have successfully register!');
    }

    public function logout()
    {
        Session::forget('user');
        Session::forget('joined');
        return redirect('/home');
    }

    public function admin()
    {
        return view('user.admin');
    }
    public function adminLoginForm(){
        return view('admin.login');
    }
    public function feedback(Request $request){
        $feedback = new Feedback();
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect('/home')->with('feedback',"Thank you for your feedback");
    }
    public function listFeedback(){
        $feedback = Feedback::all();
        return view('admin.listFeedback',compact('feedback'));
    }


}
