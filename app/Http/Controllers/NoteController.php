<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //
    public function getNote(){
        return response()->json(Note::all(),200);
    }

    public function getNoteid($id){
        $note = Note::find($id);
        if(is_null($note)){
            return response()->json(["message"=>"Registro no encontrado"],404);
        }
        return response()->json($note,200);
    }

    public function insertNote(Request $request){
        $note = Note::create($request->all());
        if(is_null($note)){
            return response()->json(["message"=>"Hubo un problema al registrar"],404);
        }
        return response()->json($note,200);
    }

    public function updateNote(Request $request,$id){
        $note = Note::find($id);
        if(is_null($note)){
            return response()->json(["message"=>"Registro no encontrado"],404);
        }
        $note->update($request->all());
        return response()->json($note,200);
    }

    public function deleteNote($id){
        $note = Note::find($id);
        if(is_null($note)){
            return response()->json(["message"=>"Registro no encontrado"],404);
        }
        $note->delete();
        return response()->json(["message"=>"Registro eliminado"],200);
    }
}
