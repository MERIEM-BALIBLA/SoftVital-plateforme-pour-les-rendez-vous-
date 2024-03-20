<?php

namespace App\Repositories;

use App\Models\Medecin\Medecin;
use App\Models\User;
use App\Models\Ville;
use App\Repositories\AuthInterfaceRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthRepository implements AuthInterfaceRepository
{
    public function createUser(array $userData)
    {
        return User::create($userData);
    }

    public function createMedecin(array $data)
    {
        return Medecin::create($data);
    }
    
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $request->session()->regenerate();
            return redirect()->route('/'); // Assurez-vous que 'home' est le nom de votre route pour la page d'accueil
        } else {
            return back()->withInput($request->only('email'));
        }
    }


    public function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function createOrUpdatePasswordResetToken($email, $token)
    {
        $existingEntry = DB::table('password_reset_tokens')->where('email', $email)->first();

        if ($existingEntry) {
            DB::table('password_reset_tokens')->where('email', $email)->update([
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        } else {
            DB::table('password_reset_tokens')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }
    }
    

}
