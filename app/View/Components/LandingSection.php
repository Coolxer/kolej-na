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
     *dark
     *
     * @var boolean
     */
    public $dark;

    /**
     * Is image on left side?
     *
     * @var boolean
     */
    public $imageOnLeftSide;

    /**
     * Create a new component instance.
     *
     * @param  string  $title
     * @param array $sentences
     * @return void
     */
    public function __construct($title, $sentences, $dark, $imageOnLeftSide)
    {
        $this->title = $title;
        $this->sentences = $sentences;
        $this->dark = $dark;
        $this->imageOnLeftSide = $imageOnLeftSide;
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
