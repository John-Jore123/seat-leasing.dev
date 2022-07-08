<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Service extends Component
{
    public array $serviceItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->serviceItems = [
            [ 'type'=> 'Spacious dedicated workstations for your staff' ],
            [ 'type'=> 'Ergonomically designed workstations' ],
            [ 'type'=> 'Up to 125 Mbps uninterrupted internet connectivity' ],
            [ 'type'=> 'Use of community facilities (including the cafeteria and sanitary facilities)' ],
            [ 'type'=> '24/7 IT and admin support' ],
            [ 'type'=> '24/7 security personnel and CCTV cameras' ],
            [ 'type'=> '24/7 generator sets for an uninterrupted power supply' ],
            [ 'type'=> 'Conference room (subject to schedule request)' ],
            [ 'type'=> 'Customizable facilities and services upon request at the beginning of a contract' ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page.service');
    }
}