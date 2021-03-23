<?php

namespace App\Http\Livewire;

use App\Salat;
use Livewire\Component;

class SalatTimeTable extends Component
{


	public $salats;

	public function mount()
	{
		$this->salats = Salat::all();
	}

    public function render()
    {
        return view('livewire.salat-time-table');
    }
}
