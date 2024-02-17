<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        $nom =null;
        //$nom = $request -> nom;
        $prenom = $request -> prenom;
        $cours = ['PHP', 'HTML', 'JAVA', 'SPRING', 'BOOTSTRAP', 'FLASK'];
        return view('page1', compact('nom', 'prenom', 'cours'));
    }
}
