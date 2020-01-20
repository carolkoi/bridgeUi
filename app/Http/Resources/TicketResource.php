<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class TicketResource extends JsonResource
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
            'user_id' => $this->user_id,
            'department_id' => $this->department_id,
            'location' => $this->location,
            'issue_type_id' => $this->issue_type_id,
            'business_continuity_impacted' => $this->business_continuity_impacted,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'deleted_at' => (string) $this->updated_at,
        ];
    }
}
