<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    private static $materiels = [
        1 => [
        'id' => 1,
        'nom' => 'Materiel 1',
        'description' => 'Description du Materiel 1',
        ],
        2 => [
        'id' => 2,
        'nom' => 'Materiel 2',
        'description' => 'Description du Materiel 2',
        ],
        // Ajoutez d'autres entrées de matériel ici
        ];
        
    /**
     * Display a listing of the resource.
     */
    public function index0() {
        // Retourner l'ensemble des matériels sous forme de tableau JSON
        return response()->json(self::$materiels);
    }

    public function index() {
        // Génération du tableau HTML
        $table = '<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>';
    
        foreach (self::$materiels as $id => $materiel) {
            $table .= '<tr>
                        <td>' . $id . '</td>
                        <td>' . $materiel['nom'] . '</td>
                        <td>' . $materiel['description'] . '</td>
                    </tr>';
        }
    
        $table .= '</tbody></table>';
    
        return $table;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
  /*
        // Vérifier si l'ID existe dans le tableau
        if (isset(self::$materiels[$id])) {
            $materiel = self::$materiels[$id];
            // Afficher les détails du matériel
            return ['materiel' => $materiel];
        } else {
            // Gérer le cas où l'ID n'existe pas
            return "Matériel non trouvé";
        }
*/

        if (isset(self::$materiels[$id])) {
            $materiel = self::$materiels[$id];
            // Retourner les données au format JSON
            return [
            'nom' =>$materiel["nom"],
            'description' =>$materiel["description"],
            ];
            } else {
            // Gérer le cas où l'ID n'existe pas
            return response()->json(['message' => 'Matériel non trouvé'], 
            404 );
            }
        // return view('afficher ', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function lister_materiels_categorie($code_categorie)
    {
       
        return "La catégorie est " . $code_categorie;
    }

}

