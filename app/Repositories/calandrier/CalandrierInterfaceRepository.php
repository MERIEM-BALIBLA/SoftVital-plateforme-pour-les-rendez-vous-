<?php

namespace App\Repositories\Calandrier;
use Illuminate\Http\Request;
interface CalandrierInterfaceRepository
{
    // public function getAllSpecialites();
    // public function updateUserInfo(User $user, array $data);
    // public function updateProffesionInfo(Medecin $medecin, array $data);
    public function getEvenements();

    public function getHoraire();
    public function divideTime($totalHours, $division);
    public function createEvent(Request $request);
    public function destroyEvent(Request $request, $id);

}