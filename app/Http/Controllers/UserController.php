<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Equipement;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=User::create([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "password"=>$request->input("password")
        ]);
        
        return redirect()->route('welcome', ['success' => "congratulation  , user created succesfuly"]);

    }


    /**
     * for user connection
     */
    public function connect() {
        return view("user.connect");
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Tente de connecter l'utilisateur avec les informations d'identification fournies
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Auth::attempt a réussi, redirige l'utilisateur vers le tableau de bord ou une autre page
            return redirect()->intended('dashboard');
        }
        // Auth::attempt a échoué, redirige l'utilisateur vers la page de connexion avec un message d'erreur
        return redirect()->route('connect')->with('error', 'Utilisateur non présent');
    }

    public function dashboard()
    {
        // Obtenir tous les équipements disponibles
        $equipementsDisponibles = Equipement::where('status', 'disponible')->paginate(2);

        // Passer les équipements à la vue
        return view('user.index', compact('equipementsDisponibles'));
    }
    
    public function admin()
    {
        // Obtenir tous les équipements disponibles
        $equipementsDisponibles = Equipement::where('status', 'disponible')->paginate(2);

        // Passer les équipements à la vue
        return view('admin.dashboard', compact('equipementsDisponibles'));
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
}
