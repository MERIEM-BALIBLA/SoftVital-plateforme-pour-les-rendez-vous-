<?php

namespace App\Http\Controllers;

use App\Models\Medecin\Event;
use App\Models\Medecin\Medecin;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $medecins = Medecin::leftJoin('users', 'medecins.user_id', '=', 'users.id')
            ->leftJoin('specialites', 'medecins.specialite_id', '=', 'specialites.id')
            ->select('medecins.*', 'users.nom as user_name', 'users.email as user_email', 'specialites.specialite as specialite')
            ->get();

        $horaireTravail = Event::where('type', 'travail')
            // ->where('status', 'active')
            ->get();

        // dd($medecins);
        return view('SoftVital/reserve', compact('medecins', 'horaireTravail'));
    }

  
    


}
