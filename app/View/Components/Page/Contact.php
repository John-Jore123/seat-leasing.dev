<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Contact extends Component
{
    public array $contactItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->contactItems = [
            [
                'href' => 'https://www.google.com/maps/place/ADG+IT+Center/@10.3207392,123.9206393,18z/data=!3m1!4b1!4m5!3m4!1s0x33a999e5a477b883:0xc68c63f7992a24cb!8m2!3d10.320737!4d123.9215595',
                'description' => '5th Floor, ADG I.T. Center, Lopez Jaena St., Subangdaku, Mandaue City, Cebu Philippines 6014',
                'image' => url('/images/svg/maps-black.svg'),
            ],
            [
                'href' => 'mailto:johnrey@innocentrixphilippines.com',
                'description' => 'themcsgroupofcompanies@gmail.com',
                'image' => url('/images/svg/mail.svg'),
            ],
            [
                'href' => 'tel:0325163137',
                'description' => '(032) 516 3137',
                'image' => url('/images/svg/phone-call.svg'),
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page.contact');
    }
}
