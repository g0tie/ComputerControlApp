<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Attributions extends Component
{
    public $attributions;
    public $users;
    public $computers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($attributions, $users, $computers)
    {
        $this->computers = $computers;
        $this->users = $users;
        $this->attributions = $attributions;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.attributions');
    }
}
