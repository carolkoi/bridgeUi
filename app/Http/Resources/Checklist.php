<?php

namespace App\Http\Resources;

use App\Models\MaintenanceSchedule;
use Illuminate\Http\Resources\Json\JsonResource;

class Checklist extends JsonResource
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
            'action' => $this->action,
            'comment' => $this->comment,
            'maintenance_schedule_id' => $this->maintenance_schedule_id,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'deleted_at' => (string) $this->updated_at,
        ];
    }
}
