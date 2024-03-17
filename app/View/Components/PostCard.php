<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use WP_Post;

class PostCard extends Component
{
    public $date;
    public $title;
    public $exceprt;
    public $image;
    public $url;

    /**
     * Create a new component instance.
     */
    public function __construct($post = null)
    {
        if ($post instanceof WP_Post) {
            $newPost = $post;
            global $post;

            $post = $newPost;
        }

        $this->date = $this->getDate();
        $this->title = $this->getTitle();
        $this->exceprt = $this->getExceprt();
        $this->image = $this->getImage();
        $this->url = $this->getUrl();
    }

    protected function getDate()
    {
        $diff = date_diff(date_create(get_the_date('Y-m-d')), date_create(date('Y-m-d')));
        $output = __('today', "tamago");

        if ($diff->days === 1) {
            $output = __('yesterday', "tamago");
        } else if ($diff->days > 1) {
            $output = $diff->days . ' ' . __('days ago', "tamago");
        }

        return $output;
    }

    protected function getTitle()
    {
        return get_the_title();
    }

    protected function getExceprt()
    {
        return get_the_excerpt();
    }

    protected function getImage()
    {
        $thumbId = get_post_thumbnail_id();

        return $thumbId !== 0 && $thumbId !== false ? wp_get_attachment_url($thumbId) : null;
    }

    protected function getUrl()
    {
        return get_permalink();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.loop.post-card');
    }
}
