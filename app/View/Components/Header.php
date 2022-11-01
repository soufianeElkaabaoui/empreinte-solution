<?php

namespace App\View\Components;

use App\Models\Company;
use App\Models\Service;
use Illuminate\View\Component;

class Header extends Component
{
    public $services;
    public $company;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::all();
        $this->company = Company::find(1);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
