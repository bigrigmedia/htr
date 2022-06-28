<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Collection extends Component
{
    /**
     * The collection content.
     *
     * @var string
     */
    public $content;

    /**
     * The collection destinations.
     *
     * @var array
     */
    public $destinations;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($content, $destinations)
    {
        $this->content = $content;
        $this->destinations = $destinations;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.collection');
    }
}
