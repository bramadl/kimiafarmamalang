<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterDoctorRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.index');
    }

    public function getRegister()
    {
        return view('auth.index');
    }

    public function postRegister(RegisterDoctorRequest $request)
    {
        $validated = $request->validated();
        
        return $validated;
    }
}
