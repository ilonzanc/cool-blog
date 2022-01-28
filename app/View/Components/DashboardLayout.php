<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardLayout extends Component
{

    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $title = ''
    ) {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.dashboard');
    }
}
