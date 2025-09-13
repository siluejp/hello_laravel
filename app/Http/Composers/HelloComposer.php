<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('view_message', 'this is value is "'. $view->getName() . '"!!');
    }
}