<?php

namespace App\Http\Controllers\medecin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        // $medecin = $user->medecin(); 
        return view ('medecin.profile.index',compact('user'));
    }

    public function updateImage(Request $request){
        // $image['image'] = $request->file('image')->update('assets/images/events', 'public');
        $profile = $request;
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            // Enregistrer la nouvelle image
            $profile->image = $request->file('image')->store('assets/images/events', 'public');
        }
    }
}
