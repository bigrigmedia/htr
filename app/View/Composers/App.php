<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'getPrimaryMenuItems' => $this->getPrimaryMenuItems(),
            'headerType' => $this->headerType(),
            'logoType' => $this->logoType(),
            'svgType' => $this->svgType(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function getPrimaryMenuItems()
    {
        return wp_get_nav_menu_items('primary');
    }

    public function headerType()
    {
        if (is_front_page()) {
            return 'header-fixed';
        } else if (is_page(['about'])) {
            return 'header-fixed';
        } else {
            return 'header-static';
        }
    }

    public function logoType()
    {
        if (is_front_page()) {
            return 'header-large-logo js-logo';
        } else if (is_page(['about'])) {
            return 'header-large-logo js-logo';
        } else {
            return 'header-small-logo';
        }
    }

    public function svgType()
    {
        if (is_front_page()) {
            return 'fill-htr-charcoal lg:fill-htr-logo';
        } else if (is_page(['about'])) {
            return 'fill-htr-charcoal lg:fill-htr-logo';
        } else {
            return 'fill-htr-charcoal';
        }
    }
}
