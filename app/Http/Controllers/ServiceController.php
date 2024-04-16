<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Employe;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function showEmployees(Service $service)
    {
         $employes = $service->employes;
        //$employes = $service->employes récupère tous les employés associés à un service
        //donné à partir de la relation définie dans votre modèle Service.
        return view('services.employees', compact('service', 'employes'));
    }

    public function index3()
    {
    $services = Service::all();
    return view('services.index3', compact('services'));
    }

    public function employes($serviceId)
    {
    // Récupérer les employés du service
    $employes = Employe::where('service_id', $serviceId)->get();
    // Renvoyer les employés au format JSON
    return response()->json($employes);
    }
}
