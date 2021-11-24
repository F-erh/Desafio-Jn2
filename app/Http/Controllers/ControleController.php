<?php

namespace App\Http\Controllers;

use App\Models\Controle as Controle;
use App\Http\Resources\Controle as ControleResource;
use Illuminate\Http\Request;

class ControleController extends Controller {

  public function index(){
    $controles = Controle::paginate(10);
    return ControleResource::collection($controles);
  }

  public function show_Placa_do_Carro($Placa_do_Carro){
    $controle = Controle::where('Placa_do_Carro', 'like', '%'.$Placa_do_Carro)->get();
    return ControleResource::collection($controle);
    
  }

  public function show($id){
    $controle = Controle::findOrFail( $id );
    return new ControleResource( $controle );
    
  }

  public function store(Request $request){
    $controle = new Controle;
    $controle->Nome = $request->input('Nome');
    $controle->Telefone = $request->input('Telefone');
    $controle->CPF = $request->input('CPF');
    $controle->Placa_do_Carro = $request->input('Placa_do_Carro');

    if( $controle->save() ){
      return new ControleResource( $controle );
    }
  }

   public function update(Request $request){
    $controle = Controle::findOrFail( $request->id );
    $controle->Nome = $request->input('Nome');
    $controle->Telefone = $request->input('Telefone');
    $controle->CPF = $request->input('CPF');
    $controle->Placa_do_Carro = $request->input('Placa_do_Carro');
    

    if( $controle->save() ){
      return new ControleResource( $controle );
    }
  } 

  public function destroy($id){
    $controle = Controle::findOrFail( $id );
    if( $controle->delete() ){
      return new ControleResource( $controle );
    }

  }
}