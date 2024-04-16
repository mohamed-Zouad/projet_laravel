<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function ajoutPanier(Request $request)
    {
        $cart = session()->get('panier');

        $id = $request->id; // récupéré depuis l’URL
        $qte = $request->quantite; // récupéré depuis l’URL

        // si le panier est vide, c'est le premier produit
        if (!$cart) {
            $cart = [$id => ["quantite" => $qte]];
            session()->put('panier', $cart);
            return $this->contenuPanier(); // affichage du contenu du panier
        }

        // vérifier si ce produit existe dans le panier pour incrémenter la quantité
        if (isset($cart[$id])) {
            $cart[$id]["quantite"] += $qte;
        } else {
            // si l'article n'existe pas dans le panier, l'ajouter avec la quantité passée en paramètre
            $cart[$id] = ["quantite" => $qte];
        }

        session()->put('panier', $cart);
        return $this->contenuPanier(); // affichage du contenu du panier
    }

    public function contenuPanier()
    {
        $cart = session()->get('panier');
        return response()->json(['panier' => $cart]);
    }

    public function supprimer(Request $request)
    {
        $cart = session()->get('panier');
        $id = $request->id;

        // si l'id existe dans le panier, le supprimer
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('panier', $cart);
        }

        return $this->contenuPanier(); // affichage du contenu du panier
    }

    public function modifier(Request $request)
    {
        $cart = session()->get('panier');
        $id = $request->id;
        $qte = $request->quantite;

        // si l'id existe dans le panier, modifier la quantité
        if (isset($cart[$id])) {
            $cart[$id]["quantite"] = $qte;
            session()->put('panier', $cart);
        }

        return $this->contenuPanier(); // affichage du contenu du panier
    }
}




