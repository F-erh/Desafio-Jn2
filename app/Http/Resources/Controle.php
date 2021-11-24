<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class Controle extends JsonResource {
  public function toArray($request){
    //return parent::toArray($request);
    return [
      'id' => $this->id,
      'Nome' => $this->Nome,
      'Telefone' => $this->Telefone,
      'CPF' => $this->CPF,
      'Placa_do_Carro' => $this->Placa_do_Carro
      
    ];
  }

  /* public function with( $request ){
    return [
      'version' => '1.0.0',
      'author_url' => url('https://terminalroot.com.br')
    ];
  } */
}