<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use App\Models\Role;
use App\Models\Company;
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

    public function view() {
        return view('index');
    }

    public function company_dashboard() {
        return view('company_dashboard');
    }

    public function register() {
        $roles = Role::all();
        return view('register', compact('roles'));
    }

    public function login() {
        return view('login');
    }

    public function signup(Request $request) {
        $data = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|exists:roles,id',
        ];

        if ($request->has('role')) {
            $role = Role::find($request->role);
            
            if ($role && $role->slug === 'company') {
                $data['company_name'] = 'required|string|max:255';
            }
        }

        $request->validate($data);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::findOrFail($request->role);
        $user->roles()->attach($role);
        
        if ($role->slug === 'company' && $request->has('company_name')) {
            Company::create([
                'user_id' => $user->id,
                'name' => $request->company_name,
            ]);
        }

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
            return redirect()->intended(route('view'));
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
