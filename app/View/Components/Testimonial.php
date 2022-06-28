<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Testimonial extends Component
{
    /**
     * The testimonial quote.
     *
     * @var string
     */
    public $quote;

    /**
     * The testimonial mobile background.
     *
     * @var string
     */
    public $mobile;

    /**
     * The testimonial desktop background.
     *
     * @var string
     */
    public $desktop;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quote, $mobile, $desktop)
    {
        $this->quote = $quote;
        $this->mobile = $mobile;
        $this->desktop = $desktop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
