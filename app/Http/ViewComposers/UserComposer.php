<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\User;

class UserComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $users = User::all();
        $view->with('users', $users->count());
    }

}