<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LandingSection extends Component
{
    /**
     * Section heading title
     *
     * @var string
     */
    public $title;

    /**
     * Section article sentences
     *
     * @var array
     */
    public $sentences;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param array $sentences
     * @return void
     */
    public function __construct($title, $sentences)
    {
        $this->title = $title;
        $this->sentences = $sentences;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.landing.partials._section');
    }
}
