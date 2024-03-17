<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Partial;

class PostsSlider extends Partial
{
    /**
     * The partial field group.
     */
    public function fields(): Builder
    {
        $postsSlider = Builder::make('posts_slider');

        $postsSlider
            ->addRepeater('posts')
            ->addPostObject('post', [
                'post_type' => ['post']
            ])
            ->endRepeater();

        return $postsSlider;
    }
}
