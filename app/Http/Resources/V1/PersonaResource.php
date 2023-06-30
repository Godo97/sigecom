<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'ci' => $this->ci,
            'usuario' => $this->usuario,
            'nombre' => $this->nombre,
            'snombre' => $this->snombre,
            'apellido' => $this->apellido,
            'sapellido' => $this->sapellido,
            'foto' => $this->foto,
            'genero' => $this->genero_id,
            'estatu' => $this->estatus_id,
        ];
    }
}
