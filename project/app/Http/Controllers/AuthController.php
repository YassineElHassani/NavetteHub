<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function company_dashboard() {
        return view('company_dashboard');
    }

    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }

    public function signup(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
            'company_name'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role;
        $data['company_name'] = $request->company_name;
        $user = User::create($data);

        if(!$user) {
            return redirect(route('register'))->with("Error", "Registration failed, try again!");
        }

        return redirect(route('login'))->with("Success", "You have registered Successfully, Login to access the platform.");

    }

    public function signin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $messageCredentials = $request->only('email', 'password');
        if(Auth::attempt($messageCredentials)) {
            return redirect()->intended(route('company_dashboard'));
        }

        return redirect(route('login'))->with("Error", "Email or Password is invalid!");
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    public function create()
    {
        
    }

    public function store(StoreAuthRequest $request)
    {
        //
    }

    public function show(Auth $auth)
    {
        //
    }

    public function edit(Auth $auth)
    {
        //
    }

    public function update(UpdateAuthRequest $request, Auth $auth)
    {
        //
    }

    public function destroy(Auth $auth)
    {
        //
    }
}
