<?php

namespace Modules\Personal\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_surname' => $this->name_surname,
            'username' => $this->username,
            'phone' => $this->phone,
            'position' => ucfirst($this->position),
            'hourly_price' => (float) $this->hourly_price,
            'start_date' => $this->work_start_date,
            'end_date' => $this->work_end_date,
            'position' => $this->position == 'apprentice' ? 'Çırak' : ($this->position == 'journeyman' ? 'Kalfa' : 'Usta'),
            'status' => $this->status ? 'Çalışıyor' : 'Ayrıldı',
        ];
    }
}