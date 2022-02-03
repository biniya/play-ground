<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // REGISTER
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = 'User register successfully';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    //LOGIN
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $success = true;
            $message = 'User login successfully';
        } else {
            $success = false;
            $message = 'Unauthorised';
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    // LOGOUT
    public function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    // OLD REGISTER
    // public function register(Request $request)
    // {
    //     $fields = $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string|unique:users,email',
    //         'password' => 'required|string'
    //     ]);
    //     $user = User::create([
    //         'name' => $fields['name'],
    //         'email' => $fields['email'],
    //         'password' => bcrypt($fields['password'])
    //     ]);
    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    //OLD LOGIN
    // public function login(Request $request)
    // {
    //     $fields = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
    //     // Check email  
    //     $user = User::where('email', $fields['email'])->first();

    //     // Check password
    //     if (!$user || !Hash::check($fields['password'], $user->password)) {
    //         return response([
    //             'message' => 'Bad creds'
    //         ], 401);
    //     }

    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    // OLD LOGOUT
    // public function logout(Request $request)
    // {
    //     auth()->user()->tokens()->delete();
    //     return [
    //         'messge' => 'Logged Out'
    //     ];
    // }

    // public function profile()
    // {
    //     return auth()->user();
    // }

}
