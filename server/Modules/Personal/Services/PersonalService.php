<?php

namespace Modules\Personal\Services;

use Modules\Personal\Models\Personal;

class PersonalService
{
    public function create(array $data): Personal
    {
        $data->status = true;
        return Personal::create($data);
    }
}