<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;

class SocialController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $user1 = User::where('google_id', $user->id)->first();
            if ($user1) {
                Auth::login($user);
                return redirect('/dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                ]);
                Auth::login($newUser);
                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            return redirect('/', ['error' => $e->getMessage()]);
        }
    }
}
