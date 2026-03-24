<?php

namespace App\Http\Controllers;
use App\Models\Note; 

use Illuminate\Http\Request;

class NoteController extends Controller
{
    
public function index() 
{ 
    $notes = Note::all(); 
    return view('index', compact('notes')); 
} 
public function store(Request $request) 
{ 
    Note::create([ 
        'title' => $request->title 
    ]); 
    return redirect('/'); 
}
}
