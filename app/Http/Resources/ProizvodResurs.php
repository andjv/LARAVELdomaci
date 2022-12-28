<?php

namespace App\Http\Resources;

use App\Models\Brend;
use App\Models\Tip;
use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $brend = Brend::find($this->brendID);
        $tip = Tip::find($this->tipID);

        return [
            'id' => $this->id,
            'naziv' => $this->naziv,
            'brendID' => $brend->brend,
            'tipID' => $tip->tip,
            'cena' => $this->cena . " RSD"
        ];
    }
}
