<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

use App\Fields\Partials\PostsSlider;

class FlexibleContent extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $flexibleContent = Builder::make('flexible_content');

        $flexibleContent
            ->setLocation('page_type', '==', 'front_page');

        $flexibleContent
            ->addFlexibleContent('content')
            ->addLayout($this->get(PostsSlider::class))
            ->endFlexibleContent();

        return $flexibleContent->build();
    }
}
