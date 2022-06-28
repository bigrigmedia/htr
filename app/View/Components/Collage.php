<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Collage extends Component
{
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
    public function __construct($mobile, $desktop)
    {
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
        return view('components.collage');
    }
}
