<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveComponet extends Component
{
    public $msg = "helolo amit ramteke";
    public function render()
    {
        return view('livewire.live-componet');
    }
}
