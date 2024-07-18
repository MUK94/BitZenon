<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Service;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
			$title = 'Dashboard';
			$services = Service::all();
      return view('layouts.guest')->with(['services'=>$services, 'title'=>$title]);
    }
}
