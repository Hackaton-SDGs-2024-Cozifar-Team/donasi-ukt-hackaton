<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterFormController extends Controller
{
    public function index(){
        return view('all-role.layouts.register');
    }

    public function addRecipient(Request $request){
        $user  = User::where('id', Auth::user()->id)->first();

        $user_update = $user->update([
            'place_birth' => $request->place_birth,
            'date_birth' => $request->date_birth,
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'role' => 'recipient',
        ]);

        if($user_update){
            return redirect('/');
        }
    }
}