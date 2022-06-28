<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageWithText extends Component
{
    /**
     * The image with text rule heading.
     *
     * @var string
     */
    public $rule;

    /**
     * The image with text heading.
     *
     * @var string
     */
    public $heading;

    /**
     * The image with text button url.
     *
     * @var string
     */
    public $url;

    /**
     * The image with text button text.
     *
     * @var string
     */
    public $text;

    /**
     * The image with text image sizes.
     *
     * @var array
     */
    public $sizes;

    /**
     * The image with text content.
     *
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rule, $heading, $url, $text, $sizes, $content)
    {
        $this->rule = $rule;
        $this->heading = $heading;
        $this->url = $url;
        $this->text = $text;
        $this->sizes = $sizes;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image-with-text');
    }
}
