<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BedList extends Component
{
    public $beds;

    protected $listeners = ['bedAdded'];

    public function render()
    {
        return view('livewire.bed-list');
    }

    public function bedAdded($beds)
    {
        $this->beds = $beds;
    }
}
