<?php

namespace App\Views\Composers;

use App\Classes\Webflow;
use Illuminate\View\View;

class WebflowComposer
{
    /**
     * Create a new webflow composer.
     */
    public function __construct() {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('webflow', Webflow::make(request()->route()->getName()));
    }
}
