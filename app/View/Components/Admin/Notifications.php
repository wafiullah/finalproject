<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Notifications extends Component
{
    public $notifications;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->notifications = auth()->user()->unreadNotifications()->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->notifications);
        return view('components.admin.notifications');
    }
}
