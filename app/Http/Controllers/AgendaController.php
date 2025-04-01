<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index()
    {
        // Récupérer les agendas de l'utilisateur connecté
        $agendas = Auth::user()->agendas()->with('evenements')->get();

        return view('agenda.index', compact('agendas'));
    }
}
