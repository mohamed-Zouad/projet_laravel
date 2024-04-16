<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Employe;
use App\Models\Competence;
class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
$employes = Employe::all();
return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
// Valider les données du formulaire
$validatedData = $request->validate([
'nom' => 'required|string|max:255',
'ville' => 'required|string|max:255',
'date_naiss' => 'required|date',
'email' => 'required|email',
'salaire' => 'required|numeric',
'motorise' => 'nullable|boolean',
]);
// Créer un nouvel employé avec les données validées
Employe::create($validatedData);
// Rediriger vers la page d'index des employés
// Journalisation de l'action
Log::channel('daily')->info('Nouvel employé créé: ' . $validatedData['nom']);
return redirect()->route('employes.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Récupérer l'employé correspondant à l'ID
$employe = Employe::findOrFail($id);
// Passer l'employé à la vue 'employes.show'
return view('employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Récupérer l'employé correspondant à l'ID
$employe = Employe::findOrFail($id);
// Passer l'employé à la vue 'employes.edit'
return view('employes.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupérer l'employé correspondant à l'ID
$employe = Employe::findOrFail($id);
// Valider les données du formulaire
$validatedData = $request->validate([
    'nom' => 'required|string|max:255',
    'ville' => 'required|string|max:255',
    'date_naiss' => 'required|date',
    'email' => 'required|email',
    'salaire' => 'required|numeric',
    'motorise' => 'required|boolean'
    ]);
    // Mettre à jour les données de l'employé
    $employe->update($validatedData);
    // Journalisation de l'action
    Log::channel('daily')->info('Employé mis à jour: ' . $employe->nom);
    // Rediriger vers la page d'index des employés
    return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Récupérer l'employé correspondant à l'ID
$employe = Employe::findOrFail($id);
// Supprimer l'employé
$employe->delete();
// Journalisation de l'action
Log::channel('daily')->info('Employé supprimé: ' . $employe->nom);
// Rediriger vers la page d'index des employés
return redirect()->route('employes.index');
    }
    
//     public function rechercheParVille(Request $request)
// {
// $ville = $request->input('ville');
// // Effectuer la recherche des employés pour la ville donnée
// $employesParVille = Employe::where('ville', $ville)->get();
// return view('employes.employes_par_ville', compact('employesParVille'));
// }



    public function rechercheParVille(Request $request)
    {
    // Obtenir une liste distincte des villes depuis la table des employés
    $villes = Employe::distinct()->pluck('ville');
    // Récupérer la ville sélectionnée dans le formulaire
    $villeSelectionnee = $request->input('ville');
    // Effectuer la recherche des employés pour la ville sélectionnée
    $employesParVille = Employe::where('ville', $villeSelectionnee)->get();
    // Passer les villes et les employés à la vue pour les afficher
    return view('employes.employes_par_ville', compact('villes','employesParVille'));
    }

    public function rechercheMulticriteres(Request $request)
    {
    // Récupérer le critère de recherche saisi par l'utilisateur
    $critereRecherche = $request->input('recherche');
    // Construction de la requête dynamique
    $query = Employe::query();
    // dd($request->all());
    // Recherche dans les champs pertinents de la table
    $query->where(function($query) use ($critereRecherche) {
    $query->where('nom', 'like', '%' . $critereRecherche . '%')
    ->orWhere('ville', 'like', '%' . $critereRecherche . '%')
    ->orWhere('email', 'like', '%' . $critereRecherche . '%')
    ->orWhere('date_naiss', 'like', '%' . $critereRecherche .
    '%')
    ->orWhere('salaire', 'like', '%' . $critereRecherche . '%');
    // Vérifie si $critereRecherche est 'oui' pour inclure la clause WHERE pour 'motorise'
    if ($critereRecherche === 'oui') {
    $query->orWhere('motorise', true);
    } elseif ($critereRecherche === 'non') {
    $query->orWhere('motorise', false);
    }
    });
    // Exécution de la requête
    $resultats = $query->get();
    // Retour de la vue avec les résultats et les données du formulaire
    return view('employes.employes_multicriteres', compact('resultats','critereRecherche'))->withInput($request->except('_token'));
    }

    public function showMulticriteresForm()
    {
    $searchValue = ''; // Initialisez la variable searchValue avec une valeur par défaut
    $critere = ''; // Initialisez la variable critere avec une valeur par défaut
    return View('employes.employes_multicriteres_radio',compact('searchValue','critere'));
    }
    public function rechercheMulticriteres2(Request $request)
    {
    $validatedData = $request->validate([
    'searchValue' => 'required|string|max:255',
    'critere' => 'required|in:nom,ville,salaire',
    ]);
    $critere = $validatedData['critere'];
    $searchValue = $validatedData['searchValue'];
    $employes = Employe::where($critere, 'like', "%$searchValue%")->get();
    // Retourne la vue avec les résultats de la recherche
    return view('employes.employes_multicriteres_radio', compact('employes',
    'searchValue', 'critere'));
    }

    public function getData()
    {
    $employes = Employe::paginate(8); // Paginate les employés avec 8 éléments par page
    return view('employes.pagination_employees', compact('employes'));
    }


    public function index2()
    {
    // Sélectionner tous les employés avec ou sans compétences
    $employes = Employe::leftJoin('employe_competence', 'employes.id', '=',
    'employe_competence.employe_id')
    ->select('employes.*')
    ->distinct()
    ->get();
    return view('employes.index2', compact('employes'));
    }


    // public function showCompetences(Employe $employe)
    // {
    // // Récupérer les compétences de l'employé
    // $competences = $employe->competences;
    // // Passer les compétences à la vue pour les afficher
    // return view('employes.competences', compact('competences'));
    // }

        public function showCompetences(Employe $employe)
    {
    // Récupérer les compétences de l'employé
    $competences = $employe->competences;
    // Récupérer toutes les compétences disponibles pour l'affectation
    $competencesDisponibles = Competence::all();
    // Passer les compétences et les compétences disponibles à la vue
    return view('employes.competences', compact('competences', 'employe',
    'competencesDisponibles'));
    }

    // public function showNiveau(Employe $employe)
    // {
    // // Récupérer les compétences de l'employé
    // $niveau = $employe->niveau;
    // // Récupérer toutes les niveau disponibles pour l'affectation
    // $niveauDisponibles = Competence::all();
    // // Passer les niveau et les niveau disponibles à la vue
    // return view('employes.competences', compact('niveau', 'employe',
    // 'niveausDisponibles'));
    // }


        public function affecterCompetence(Request $request, Employe $employe)
    {
    // Valider les données de la requête
    $request->validate([
    'competence_id' => 'required|exists:competences,id',
    'niveau' => 'required|in:Débutant,Intermédiaire,Avancé'
    // Valider le niveau sélectionné
    ]);
    // Récupérer l'ID de la compétence à affecter à l'employé
    $competenceId = $request->input('competence_id');
    // Vérifier si l'association entre l'employé et la compétence existe déjà
    if (!$employe->competences->contains($competenceId)) {
    // Récupérer le niveau sélectionné à partir des boutons radio
    $niveau = $request->input('niveau');
    // Associer la compétence à l'employé avec le niveau sélectionné
    $employe->competences()->attach($competenceId, ['niveau' =>
    $niveau]);
    }
    // Rediriger l'utilisateur vers la page des compétences de l'employéTP2- relation – many to many entre modèles en Laravel – M. TAIS – DD2 web
    return redirect()->route('employes.competences', $employe);
    }

     public function retirerCompetence(Employe $employe, Competence $competence)
    {
    // Vérifier si l'employé possède cette compétence
    if ($employe->competences->contains($competence)) {
    // Retirer la compétence de l'employé
    $employe->competences()->detach($competence->id);
    // Redirection avec un message de succès
    return redirect()->back()->withSuccess('La compétence a été retirée avec succès.');

    }
    }
    




}
