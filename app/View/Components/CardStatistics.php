<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardStatistics extends Component
{
    public $users;
    public $inc;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users, $text)
    {
        $this->$users = $users;
//        $this->$inc = $inc;
        $this->$text = $text;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-statistics');
    }
}
