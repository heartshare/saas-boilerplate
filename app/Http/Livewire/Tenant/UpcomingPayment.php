<?php

namespace App\Http\Livewire\Tenant;

use Livewire\Component;

class UpcomingPayment extends Component
{
    protected $listeners = ['billingUpdated' => '$refresh'];

    public function render()
    {
        return view('livewire.tenant.upcoming-payment');
    }
}
