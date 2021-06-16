<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Http\Requests\LoginDoctorRequest;
use App\Http\Requests\RegisterDoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Comment\Doc;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.index');
    }

    public function postLogin(LoginDoctorRequest $request)
    {
        $validated = $request->validated();
        
        $emailAddress = $validated['email_address'];
        $password = $validated['password'];
        
        $doctor = Doctor::where('email_address', $emailAddress)->first();
        if (!$doctor) {
            return redirect()
                    ->back()
                    ->with('error', 'Alamat email belum terdaftar.');
        }

        $isPasswordCorrect = Hash::check($password, $doctor->password);
        if (!$isPasswordCorrect) {
            return redirect()
                    ->back()
                    ->with('error', 'Password anda salah.');
        }

        $credentials = $request->only('email_address', 'password');
        $attemptLogin = Auth::attempt($credentials);
        if ($attemptLogin) {
            return redirect()
                    ->route('home')
                    ->with('success', 'Halo ' . $doctor->fullname . '!');
        }
    }

    public function getRegister()
    {
        return view('auth.index');
    }

    public function postRegister(RegisterDoctorRequest $request)
    {
        $validated = $request->validated();
        $doctor = Doctor::create([
            'fullname' => $validated['fullname'],
            'email_address' => $validated['email_address'],
            'password' => Hash::make($validated['password'])
        ]);

        if (!$doctor) {
            return redirect()
                    ->back()
                    ->with('error', 'Oops, terjadi kesalahan. Mohon ulangi beberapa waktu lagi.');
        }

        return redirect()
                ->route('login')
                ->with('success', 'Akun anda berhasil dibuat.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
