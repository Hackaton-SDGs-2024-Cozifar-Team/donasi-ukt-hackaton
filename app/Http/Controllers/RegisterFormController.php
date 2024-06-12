<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterFormController extends Controller
{
    public function index(){
        return view('all-role.layouts.register');
    }
}