<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Homepage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'home'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'portfolios' => $this->getPortfolio(),
            'marketings' => $this->getPortfolio(),
        ];
    }

    private function getPortfolio()
    {
        $portfolios = [];

        $posts = new WP_Query([
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => 10
        ]);

        while ($posts->have_posts()) {
            $posts->the_post();
            $terms = get_the_terms(get_the_ID(), 'portfolio_category');
            $category = [];

            foreach ($terms as $term) {
                $category[] = $term->name;
            }

            $portfolios[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'image' => get_the_post_thumbnail_url(),
                'url' => get_permalink(),
                'category' => $category
            ];
        }

        return collect($portfolios);
    }
}
