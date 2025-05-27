<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Club;
use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view("eleves.index", compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::all();
        return view("eleves.create", compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'string|required',
            'prenom' => 'string|required',
            'club_id' => 'required'
        ]);

        Eleve::create($request->all());
        return redirect(route("eleves.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eleve = Eleve::with('activites')->findOrFail($id);

        // $activites = $eleve->activites;

        return view('eleves.show', compact("eleve"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $clubs = Club::all();
        return view("eleves.edit", compact('eleve', 'clubs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'string|required',
            'prenom' => 'string|required',
            'club_id' => 'required'
        ]);
        $eleve = Eleve::findOrFail($id);
        $eleve->update($request->only(['nom', 'prenom', 'club_id']));

        return redirect(route('eleves.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();
        return redirect(route("eleves.index"));
    }
}
