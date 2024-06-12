<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Musicas;

class PlayerController extends Controller
{

    public function listar(){

        $lista = array();
            $lista["musicas"][0]["title"] = "Snuff";
            $lista["musicas"][0]["artist"] = "Corey Taylor";
            $lista["musicas"][0]["imageUrl "] = "https://github.com/Francisco-lira/Player-musica-js/blob/main/imagens/snuff.jpg";
            $lista["musicas"][0]["audioUrl"] = "https://github.com/Francisco-lira/Player-musica-js/blob/main/musicas/Corey%20Taylor%20-%20Snuff.mp3";
        
            return response()->json($lista);
           
        }

        //Buscar todos
        // $lista = Musicas::all();

        //Bucar por id
        // $lista = Musicas::find(2);

        //Deletar por id
        //Antes de deletar, verificar se existe
        // if($lista){
        //     $lista->delete();
        // }


    public function buscar($id){
        $lista = Musicas::find($id);

        return response()->json($lista);

    }

    public function salvar(){}

    public function atualizar($id){
        $lista = Musicas::find($id);

        if(!$lista){
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        $lista->title = "Snuff";
        $lista->artist = "Corey Talor";
        $lista->imageUrl = "https://github.com/Francisco-lira/Player-musica-js/blob/main/imagens/snuff.jpg";
        $lista->audioUrl = "https://github.com/Francisco-lira/Player-musica-js/blob/main/musicas/Corey%20Taylor%20-%20Snuff.mp3";
        $lista->save();
    }

    public function deletar($id){
        $lista = Musicas::find($id);
        if($lista){
                $lista->delete();
                if(!$lista){
                    return response()->json(['sucess' => 'registro deletado']);
                }
             }


    }


  }
