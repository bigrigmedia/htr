<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CallToAction extends Component
{
    /**
     * The call to action heading.
     *
     * @var string
     */
    public $heading;

    /**
     * The call to action height.
     *
     * @var string
     */
    public $height;

    /**
     * The call to action mobile image.
     *
     * @var string
     */
    public $mobile;

    /**
     * The call to action desktop image.
     *
     * @var string
     */
    public $desktop;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading, $height, $mobile, $desktop)
    {
        $this->heading = $heading;
        $this->height = $height;
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
        return view('components.call-to-action');
    }
}
