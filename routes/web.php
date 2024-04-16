<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('redirect1', function () {
//     return ('bienvenue');
//     });

//     Route::get('filieres1', function () {
//         return "développement info";
//         });

//         Route::get('filieres2', function () {
//             return "réseaux info";
//             });

//             Route::get('filieres3', function () {
//                 return "techniques de développement info";
//                 });



//         Route::fallback(function() {
//             return 'Page introuvable !!';
//             });
        


//             Route::get('multi', function($a,$b) {
//                 return $a.'*'. $b .'='.$a*$b;
//                 });

// Route::get('/', function () {
//     return view('welcome');
//     });
//     Route::get('/vote', function(){
//         $age = request()->age ;
// if ($age < 18) {
// return redirect('/');
// }else{
// return view('vote');
// }
// });
// $age = $request->age ;
// if ($age < 18) {
// return redirect('/');
// }else{
// return view('vote');}
Route::get('/', function () {
    return view('welcome');
    });
    // Route::get('/vote', function(){
    // return view('vote');
    // })->middleware('agecheck');

    // Route::get('/hello', function () {
    //     return view('welcome');
    //     })->middleware('LogRouteMiddleware');


        Route::get('/multi/{n}', 'App\Http\Controllers\TestController@tablem');
        Route::get('/te/{min}/{max}', 'App\Http\Controllers\TestController@conversion_temp');
        Route::get('/multi/{n}', 'App\Http\Controllers\TestController@tablem');
        Route::get('/pers', 'App\Http\Controllers\GestPersoController@index');
        Route::get('/pers/{mat}', 'App\Http\Controllers\GestPersoController@rechercher');



        Route::get('user/{nom}', 'App\Http\Controllers\StagiaireController');
        Route::get('/index', 'App\Http\Controllers\ProduitController@index');
        Route::get('/index0', 'App\Http\Controllers\ProduitController@index0');
        Route::get('/show/{id}', 'App\Http\Controllers\ProduitController@show');

      
         Route::get('/show/lister-materiels-categorie/{code_categorie}', 'App\Http\Controllers\ProduitController@lister_materiels_categorie');


      

         Route::get('/creer-cookie', function () {
            return response('Cookie créé')->cookie('derniere_visite', now() ,  60* 60 * 24 * 7);
        });
        //ou
        Route::get('/derniere-visite', function () {
            // Obtenez la date et l'heure actuelles
            $date_heure = now();
        
            // Créez le cookie
            $response = response("derniere")->cookie('derniere_visite', $date_heure, 7 * 24 * 60 * 60);
        
            // Envoyez la réponse
            return $response;
        });
        //ou :
        Route::get('/definir-cookie', function () {
            // Crée la valeur du cookie avec la date et l'heure actuelles
            $valeurCookie = now();
        
            // Définir la durée de vie du cookie à 7 jours
            $expirationDate = now()->addDays(7);
        
            // Créer le cookie
            $cookie = Cookie::make('derniere_visite', $valeurCookie, $expirationDate);
        
            // Retourner une réponse avec le cookie
            return response('Cookie "derniere_visite" défini avec succès!')->cookie($cookie);
        });
        
        // 2.	Afficher la valeur du cookie :
        Route::get('/afficher-cookie', function () {
            $derniereVisite = request()->cookie('derniere_visite', 'Aucune visite récente.');
            return response($derniereVisite);
        });
        // 3.	Mettre à jour un cookie :
        Route::get('/mettre-a-jour-cookie', function () {
            return response('Cookie mis à jour')->cookie('derniere_visite', now(), 60 * 24 * 7);
        });
        //4.	Supprimer un cookie :
        
        Route::get('/supprimer-cookie', function () {
            return response('Cookie supprimé')->cookie('derniere_visite', null, -1);
        });

        Route::get('session/getVille', 'App\Http\Controllers\SessionController@accessSessionVilles');
        Route::get('session/setVille', 'App\Http\Controllers\SessionController@storeSessionVilles');
        Route::get('session/removeVilles', 'App\Http\Controllers\SessionController@deleteSessionVilles');
        Route::get('session/removeVille', 'App\Http\Controllers\SessionController@suppSessionVilles');

        use Illuminate\Support\Facades\Session;
        use App\Http\Controllers\ConnexController;

        Route::get("session/connection", [ConnexController::class,"verif_login"]);
        Route::get('/deconnexion', [ConnexController::class, 'deconnexion']);
        Route::get("admin", function () {
            if (!session::has("login"))
            {
            return "n'est pas connecté(e)";
            }
            return view("page_admin");
            });


            Route::get('/', function () {
                return view('welcome');
            })->name('welcome');

            use App\Http\Controllers\PanierController;

            Route::get('ajouterpanier/{id}/{quantite}', [PanierController::class, 'ajoutPanier']);
            Route::get('contenudupanier', [PanierController::class, 'contenuPanier']);
            Route::get('supprimerdupanier/{id}', [PanierController::class, 'supprimer']);
            Route::get('modifierpanier/{id}/{quantite}', [PanierController::class, 'modifier']);


            Route::get('article/{n}', function($n) {
                return view('article')->with('numero', $n);
                })->where('n', '[0-9]+');
                

                // Route::get('/layout', function () {
                //     return view('page');
                //     });
                //     Route::get('/home', function () {
                //         return view('home');
                //         })->name('home');
                //         Route::get('/infos', function () {
                //             return view('infos');
                //             })->name('infos');


                            // Route::get('/', function()
                            // {
                            // return View ('pages.home');
                            // });

                            // Route::get('/about', function()
                            // {
                            // return View ('pages.about') ;
                            // });

                            // Route::get('/contact', function()
                            // {
                            // return View ('pages.contact');
                            // });

                            use App\Http\Controllers\LayoutsController;

                            Route::get('/connectionLay', [LayoutsController::class, 'showPage']);

                            
                            use App\view\composers\MessageCountComposer;
                            Route::get('/composertest', function()
                             {
                             return View ('test-composer-view');
                             });
                             
                             use App\view\composers\StaticDataComposer;
                             Route::get('/composer', function()
                              {
                              return View ('product');
                              });
 
                            
                             Route::get('/test', function()
                              {
                              return View ('test');
                              });

                              Route::get('/article', function()
                              {
                              return View ('test');
                              });
                              use App\Http\Controllers\UsersController;
                              Route::get('users', [UsersController::class, 'create']);
                              Route::post('users', [UsersController::class, 'store']);

                              use App\Http\Controllers\ContactController;
                              Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
                              Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact2');

                              use App\Http\Controllers\CalculatorController;
                              Route::get('/calculator', [CalculatorController::class, 'showForm'])->name('calculator.form');
                              Route::post('/calculator', [CalculatorController::class, 'calculate'])->name('calculator.calculate');

                              use App\Http\Controllers\MerciController;
                              Route::get('/contacts', [MerciController::class, 'showForm'])->name('contacts.form');
                              Route::post('/contacts', [MerciController::class, 'submitForm'])->name('contacts.submit');
                              
                              use App\Http\Controllers\IMCController;

                              Route::get('/calcul_imc', [IMCController::class, 'showForm']);
                              Route::post('/calcul_imc', [IMCController::class, 'calculateIMC']);


            
                              use App\Http\Controllers\LoginController;
                              Route::get('/loginyou', [LoginController::class, 'showForm']);
                              Route::post('/loginyou', [LoginController::class, 'submitForm']);




                              Route::get('/erreur', function()
                              {
                              return View ('erreur');
                              });

                              Route::get('/moncompte', function()
                              {
                              return View ('moncompte');
                              });


                              use App\Http\Controllers\FactureController;
                              Route::get('/facture', [FactureController::class, 'index'])->name('facture.index');
                              Route::post('/calculerPrix', [FactureController::class, 'calculerPrix'])->name('facture.resultat');

                              use App\Http\Controllers\FactureFormController;
                              Route::get('/factureform', [FactureFormController::class, 'form'])->name('factureForm.form');
                              Route::post('/calculerP', [FactureFormController::class, 'calculerP'])->name('factureForm.result');

                              Route::get('/formulaire', function () {
                                return view('Forme');
                                });

                                use App\Http\Controllers\FormulaireController;
                                Route::post('/store', [FormulaireController::class, 'store'])->name('store');

                                Route::get('/formEmp', function () {
                                    return view('employee');
                                    });
                                use App\Http\Controllers\SalaireController;
                                Route::post('/calculateSalary', [SalaireController::class, 'calculateSalary'])->name('calculateSalary');

                                use App\Http\Controllers\InscriptionController;

// Afficher le formulaire
Route::get('form-inscription', function () {
    return view('showinscription'); // Remplacez 'nom_de_votre_vue' par le nom de votre vue Blade
});
// Valider le mot de passe
Route::post('form-inscription', [InscriptionController::class, 'validerMotDePasse'])->name("form-inscription");

use App\Http\Controllers\BailController;

Route::get('createP', [BailController::class, 'create'])->name("products.create");

Route::post('productstore', [BailController::class, 'store'])->name("products.store");

use App\Http\Controllers\ContactUsController;
Route::prefix('site')->group(function () {
    // Route to show post form
    Route::get('/contact-us', [ContactUsController::class,'create'])->name('contactus');
    // Route to submit form request
    Route::post('/contact-us',[ContactUsController::class,'store'])->name('contact-us');
    });

use App\Http\Controllers\VotreController;
Route::get('/register', [VotreController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [VotreController::class, 'register']);

use App\Http\Controllers\ArticleController;
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');


use App\Http\Controllers\CarController;
Route::get('/cars/ajouter', [CarController::class, 'ajouter'])->name('ajouter');
Route::post('/cars', [CarController::class, 'store'])->name('store');

use App\Http\Controllers\HomeController;
Route::get('js-validation1', [HomeController::class, 'jsValidation1']);
Route::get('js-validation2', [HomeController::class, 'jsValidation2']);


use App\Http\Controllers\EmployeController;
Route::resource('employes', EmployeController::class);

Route::get('/recherche-par-ville', [EmployeController::class,'rechercheParVille'])->name('employes.recherche_par_ville');
Route::get('/recherche-par-multicrit', [EmployeController::class,'rechercheMulticriteres'])->name('employes.recherche_multicriteres');


Route::get('/recherche_multicriteres_radio', [EmployeController::class,'showMulticriteresForm'])->name('employes.show_multicriteres_form');
Route::post('/recherche_multicriteres_radio', [EmployeController::class,'rechercheMulticriteres2'])->name('rechercheMulticriteres2');

Route::get('/employees', [EmployeController::class, 'getData'])->name('employees.getData');
Route::get('/employes/{employe}/competences', [EmployeController::class,'showCompetences'])->name('employes.competences');
Route::post('/employes/{employe}/affecter', [EmployeController::class,'affecterCompetence'])->name('employes.affecter');
Route::delete('/employes/{employe}/competences/{competence}',[EmployeController::class, 'retirerCompetence'])->name('employes.retirer');

use App\Http\Controllers\ServiceController;
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class,'showEmployees'])->name('services.employees');

Route::get('/index3', [ServiceController::class, 'index3'])->name('services.index3');
Route::get('services/employes/{serviceId}', [ServiceController::class,'employes'])->name('services.employes');
