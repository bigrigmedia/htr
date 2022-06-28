<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DestinationPortal extends Component
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
     * The destination item description.
     *
     * @var string
     */
    public $description;

    /**
     * The destination item booking.
     *
     * @var string
     */
    public $booking;

    /**
     * The destination item image.
     *
     * @var string
     */
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $city, $state, $description, $booking, $image)
    {
        $this->link = $link;
        $this->city = $city;
        $this->state = $state;
        $this->description = $description;
        $this->booking = $booking;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.destination-portal');
    }
}
