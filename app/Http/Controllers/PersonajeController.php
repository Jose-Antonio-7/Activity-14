<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaje;

class PersonajeController extends Controller
{
    //
    public function getPersonajes(){
        return response()->json(Personaje::all(),200);
    }
    public function getTokenAccess($id){
        $personaje = Personaje::find($id);
        if(is_null($personaje)){
            return response()->json(["message"=>"Registro no encontrado"],404);
        }
        $authToken = $personaje->createToken('auth-token')->plainTextToken;
        return response()->json($authToken,200);
    }
}
