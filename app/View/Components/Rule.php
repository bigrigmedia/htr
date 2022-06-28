<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Rule extends Component
{
    /**
     * The rule type.
     *
     * @var string
     */
    public $type;

    /**
     * The rule heading.
     *
     * @var string
     */
    public $heading;

    /**
     * The rule sub heading.
     *
     * @var string
     */
    public $subheading;

    /**
     * The rule types.
     *
     * @var array
     */
    public $types = [
        '1' => 'rule-1',
        '2' => 'rule-2',
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = '1', $heading, $subheading)
    {
        $this->type = $this->types[$type] ?? $this->types['1'];
        $this->heading = $heading;
        $this->subheading = $subheading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rule');
    }
}
