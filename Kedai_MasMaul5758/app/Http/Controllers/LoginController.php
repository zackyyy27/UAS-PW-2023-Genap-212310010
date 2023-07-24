<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use app\Models\User;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login()
    {
        return view('Auth.login', [
            'title' => 'Login',
            'active' => 'Login'
        ]);
    }


    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'code' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/overview');
        }
        return back();
    }
}
// php artisan tinker
// use App\Models\User
// $user = new User()
// $user->code = 'apadatanya'
// $user->password = 'bcrypt('apadatanya')
// $user->save()