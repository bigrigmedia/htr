<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Intro extends Component
{
    /**
     * The intro heading.
     *
     * @var string
     */
    public $heading;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading)
    {
        $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.intro');
    }
}
