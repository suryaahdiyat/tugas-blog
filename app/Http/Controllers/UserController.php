<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns|max:255',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'failed login');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|string|min:4',
            'rePassword' => 'required|string|min:4'
        ]);

        if($validatedData['password'] != $validatedData['rePassword']) return back()->with('registerError', 'password does not match');
        $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['role'] = 'user';
        User::create($validatedData);
        return redirect('/login')->with('success', 'register success');
    }

    public function index() {
        return view('Users.index', [
            'users' => User::where('id', '!=', auth()->user()->id)->latest()->paginate(5),
        ]);
    }
    public function create() {}
    public function store(Request $request) {}
    public function edit(User $user) {
        return view('Users.edit', [
            'user' => $user
        ]);
    }
    public function update(Request $request, User $user) {
        $user->update($request->all());

        return redirect('/users')->with('success', 'updated successfully!');
    }
    public function destroy(User $user) {}
}