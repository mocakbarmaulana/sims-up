<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $username = Auth::user()->name;
        return view('components.menu', ['username' => $username]);
    }

    public function list() {
        return [
            [
                'label' => 'Skill'
            ],
            [
                'label' => 'Learner'
            ],
            [
                'label' => 'Class'
            ],
            [
                'label' => 'Teacher'
            ],
            [
                'label' => 'Order'
            ],
            [
                'label' => 'Payment'
            ],
        ];
    }
}