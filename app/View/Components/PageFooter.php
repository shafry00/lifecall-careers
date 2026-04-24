<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageFooter extends Component
{
    public $sosmed;
    public $layanan;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sosmed  = config('global.sosmed');
        $this->layanan = config('global.layanan');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('page.components.page-footer');
    }
}
