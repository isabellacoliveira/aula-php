<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Funcionario extends JsonResource
{
    /**
     * @param
     *
     * @return
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
