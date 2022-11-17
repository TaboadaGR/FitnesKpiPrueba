<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table_secretos_model;


class table_secretos_controller extends Controller
{
    public function index()
    {
        
        $secretos = table_secretos_model::all();
        return response()->json($secretos);
    }

    public function store (Request $request)
    {
        $secretos = new table_secretos_model
        ([
        'Titulo' => $request->input('Titulo'),
        'Descripcion' => $request->input( 'Descripcion ') ,
        ]);

        $secretos ->save ();
        return response () ->json ( " Secreto registrado ");
    }


}
