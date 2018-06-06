<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Logout;
 
class UpdateLastLoggedAtOnLogout
{
    public function handle(Logout $event)
    {
        // para que no se actualice la columna "updated_at"
        $event->user->timestamps     = false;
        $event->user->online         = false;
        $event->user->last_logged_at = $event->user->current_login_time;
        $event->user->save();
    }
}
