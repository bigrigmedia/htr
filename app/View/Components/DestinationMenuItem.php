<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DestinationMenuItem extends Component
{

    /**
     * The destination item link.
     *
     * @var string
     */
    public $link;

    /**
     * The destination item city.
     *
     * @var string
     */
    public $city;

    /**
     * The destination item state.
     *
     * @var string
     */
    public $state;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $city, $state)
    {
        $this->link = $link;
        $this->city = $city;
        $this->state = $state;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.destination-menu-item');
    }
}
