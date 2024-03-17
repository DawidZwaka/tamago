<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlexibleContent extends Component
{
    public $layouts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->layouts = $this->getLayouts();
    }

    protected function getLayouts()
    {
        return array_map(function ($layout) {
            $id = 'flexible-content.' . $layout['acf_fc_layout'];
            unset($layout['acf_fc_layout']);

            return [
                'id' => $id,
                'data' => $layout
            ];
        }, get_field('content') ?: []);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flexible-content.index');
    }
}
