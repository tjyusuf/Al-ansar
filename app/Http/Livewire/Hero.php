<?php

namespace App\Http\Livewire;

use App\Hadith;
use Livewire\Component;

class Hero extends Component
{

	public $english;
	public $arabic;


	public function mount()
	{
    	$data = Hadith::find(1);
    	$this->english = $data->english;
    	$this->arabic = $data->arabic;
	}


    public function render()
    {
        return view('livewire.hero', [
        	'hadith' =>  Hadith::find(1),
        ]);
    }
}
