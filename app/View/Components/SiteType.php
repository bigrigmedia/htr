<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SiteType extends Component
{
    /**
     * The site type heading.
     *
     * @var string
     */
    public $heading;

    /**
     * The site type content.
     *
     * @var string
     */
    public $content;

    /**
     * The site type link.
     *
     * @var string
     */
    public $link;

    /**
     * The site type image.
     *
     * @var string
     */
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading, $content, $link, $image)
    {
        $this->heading = $heading;
        $this->content = $content;
        $this->link = $link;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.site-type');
    }
}
