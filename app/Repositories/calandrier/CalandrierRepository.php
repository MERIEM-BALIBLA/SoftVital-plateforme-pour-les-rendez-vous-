<?php

namespace App\Repositories\Calandrier;

use App\Models\Medecin\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class CalandrierRepository implements CalandrierInterfaceRepository
{

    public function getEvenements()
    {
        $user = Auth::user();
        return Event::where('user_id', $user->id)
            ->where('type', 'evenement')
            ->get();
    }

    public function getHoraire()
    {
        $user = Auth::user();
        return Event::where('user_id', $user->id)
            ->where('type', 'travail')
            ->get();
    }


    public function divideTime($totalHours, $division)
    {
        $totalMinutes = $totalHours * 60; // Convertir les heures en minutes

        // Déterminer la taille de l'intervalle en fonction de la division saisie
        switch ($division) {
            case '15min':
                $interval = 15;
                break;
            case '20min':
                $interval = 20;
                break;
            case '30min':
                $interval = 30;
                break;
            // case '40min':
            //     $interval = 40;
            //     break;
            default:
                // Valeur par défaut si la division n'est pas reconnue
                $interval = 30; // Utilisation d'une valeur par défaut de 30 minutes
        }
        $result = [];
        // Diviser la durée totale en tranches de la taille de l'intervalle
        while ($totalMinutes >= $interval) {
            $result[] = $interval;
            $totalMinutes -= $interval;
        }
        // Ajouter les minutes restantes si elles ne remplissent pas un intervalle complet
        if ($totalMinutes > 0) {
            $result[] = $totalMinutes;
        }
        return $result;
    }

    public function createEvent(Request $request)
    {
        // public function createEvent(Request $request){
        $user = auth()->user();

        $title = $request->input("title");
        $range = $request->input("rangepick");
        $type = $request->input("type");
        $division = $request->input("division");
        // dd($request);

        $dates = explode(' - ', $range);
        $start_datetime = Carbon::parse($dates[0]);
        $end_datetime = Carbon::parse($dates[1]);
        if ($division) {
            // Diviser la durée de l'événement en tranches plus petites en utilisant la fonction divideTime
            $durationInHours = $start_datetime->diffInHours($end_datetime);
            $dividedTime = $this->divideTime($durationInHours, $division);
        } else {
            // Si aucune division n'a été sélectionnée, traiter l'événement comme une unité
            $dividedTime = [$start_datetime->diffInMinutes($end_datetime)];
        }
        // Enregistrer chaque tranche de temps comme un événement séparé
        $events = [];
        $currentDateTime = $start_datetime;
        foreach ($dividedTime as $time) {
            $event = new Event();
            $event->title = $title;
            $event->start = $currentDateTime;
            $currentDateTime = $currentDateTime->copy()->addMinutes($time); // Ajouter la durée de la tranche
            $event->end = $currentDateTime;
            $event->type = $type;
            $event->user_id = $user->id; // Définir la valeur de 'user_id'

            $event->save();
            $events[] = $event;
        }
    }

    public function destroyEvent(Request $request, $id){
        Event::destroy($id);

    }

}