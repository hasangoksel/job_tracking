<?php

namespace Modules\Personal\Services;

use Modules\Personal\Models\Personal;

class PersonalService
{
    public function create(array $data): Personal
    {
        return Personal::create($data);
    }
}