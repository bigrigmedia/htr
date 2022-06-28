<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Destinations extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.menus.off-canvas-destinations',
        'sections.home.destinations',
        'sections.header-destination',
        'sections.destinations.list',
        'sections.destinations.map',
        'sections.footer.nav',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'getDestinations' => $this->getDestinations(),
            'getDestinationSections' => $this->getDestinationSections(),
        ];
    }

    public function getDestinations()
    {
        $query = new WP_Query([
            'post_type'         => 'destinations',
            'post_parent'       => 0,
            'posts_per_page'    => -1,
            'order'             => 'ASC',
            'no_found_rows'     => true,
        ]);

        if ($query->have_posts()) {
            return $query->posts;
        }

        return;
    }

    public function getDestinationSections()
    {
        return [
            'location'      => 'Location',
            'amenities'     => 'Amenities',
            'site-types'    => 'Site Types',
            'map'           => 'Map',
            'faqs'          => 'Faqs',
            'gallery'       => 'Gallery'
        ];
    }
}
