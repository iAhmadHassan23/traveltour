<?php

namespace App\View\Components;

use App\Models\Tour;
use Illuminate\View\Component;

class TourCard extends Component
{
    public $tour;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Tour $tour)
    {
        $this->tour = $tour;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tour-card');
    }
}
