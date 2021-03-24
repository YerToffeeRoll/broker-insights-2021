<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PolicyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id' => $this->id,
                'customer_name' => $this->customer_name,
                'customer_address' => $this->customer_address,
                'premium' => $this->premium,
                'policy_type' => $this->policy_type,
                'insurer_name' => $this->insurer_name,
        ];
    }
}
