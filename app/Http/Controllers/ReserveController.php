<?php

namespace App\Http\Controllers;

use App\Models\Medecin\Event;
use App\Models\Medecin\Medecin;
<<<<<<< HEAD
use App\Models\Medecin\Specialite;
use App\Models\RendezVous;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
=======
use App\Models\RendezVous;
use Illuminate\Http\Request;
>>>>>>> ab0b16a8d40deba901b275864c75f50097109340

class ReserveController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        // $today = now(); // Obtenez la date d'aujourd'hui
        $aujourdhui = Carbon::today();
        $medecins = Medecin::leftJoin('users', 'medecins.user_id', '=', 'users.id')
            ->leftJoin('specialites', 'medecins.specialite_id', '=', 'specialites.id')
            ->select('medecins.*', 'users.nom as user_name', 'users.email as user_email', 'users.numero as user_numero', 'specialites.specialite as specialite')
            ->get();
        $horaireTravail = Event::where('type', 'travail')
            ->whereDate('start', $aujourdhui)
            ->where('status', 'active')
            ->take(8) // Limitez les résultats à 4 événements
            ->get();

        $specialites = Specialite::all();
        $villes = Ville::all();

        return view('SoftVital/reserve', compact('medecins', 'horaireTravail', 'aujourdhui', 'specialites', 'villes'));
    }
=======
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

  
    


>>>>>>> ab0b16a8d40deba901b275864c75f50097109340
}
