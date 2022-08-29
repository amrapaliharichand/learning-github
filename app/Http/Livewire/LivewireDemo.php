<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivewireDemo extends Component {
    public $amra = 'I am using livewire';

    public function render() {
        return view( 'livewire.livewire-demo' );
    }
}
