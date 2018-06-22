<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\SubCategory;

class SubCategoryComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $subcategories = SubCategory::all();
        $view->with('subcategories', $subcategories);
    }

}