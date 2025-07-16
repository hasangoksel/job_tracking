<?php

namespace Modules\Personal\Observers;

use Modules\Personal\Models\Personal;
use Illuminate\Support\Facades\Log;

class PersonalObserver
{
    public function creating(Personal $personal)
    {
        // Örn: otomatik olarak bir şey ayarla
        if (empty($personal->status)) {
            $personal->status = true;
        }
    }
    /**
     * Handle the Personal "created" event.
     */
    public function created(Personal $personal): void
    {
        Log::info('Yeni çalışan profili oluşturuldu:', [
            'id' => $personal->id,
            'name' => $personal->name_surname,
            'username' => $personal->username
        ]);
    }
    /**
     * Handle the Personal "deleted" event.
     */
    public function deleted(Personal $personal): void
    {
        Log::info('Çalışan profili silindi:', [
            'id' => $personal->id,
            'name' => $personal->name_surname,
            'username' => $personal->username
        ]);
    }
}
