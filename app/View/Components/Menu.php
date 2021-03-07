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
    public $active;
    public function __construct($active)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $username = Auth::user()->name;
        $active = $this->active;
        return view('components.menu', compact('username', 'active'));
    }

    public function list() {
        return [
            [
                'label' => 'Skill',
                'icon' => 'fas fa-trophy'
            ],
            [
                'label' => 'Class',
                'icon' => 'fab fa-discourse'
            ],
            [
                'label' => 'Learner',
                'icon' => 'fas fa-user-graduate',
            ],
            [
                'label' => 'Teacher',
                'icon' => 'fas fa-chalkboard-teacher',
            ],
            [
                'label' => 'Order',
                'icon' => 'fas fa-shopping-basket'
            ],
            [
                'label' => 'Payment',
                'icon' => 'fas fa-cash-register',
            ],
        ];
    }

    public function isActive($label){
        return $label == $this->active;
    }
}