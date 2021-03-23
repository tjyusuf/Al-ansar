<?php

namespace App\Http\Livewire;

use App\Salat;
use Livewire\Component;

class Salats extends Component
{

    public $salat;
    public $adhan; 
    public $iqama;

    public $showModal = false;
    public $updateSalat;
    public $salats;

    protected $rules = [
        'salat' => 'required',
        'adhan' => 'required',
        'iqama' => 'required',
    ];

    public function mount()
    {
        $this->salats = Salat::all();
    }

    public function showModalTrigger($id)
    {
        $this->updateSalat = $id;
        $this->showModal = true;
        $this->loadUpdateSalat();
        // $this->updateSalat = Salat::find($id);
    }

    public function hideModalTrigger()
    {
        $this->showModal = false;
        $this->resetInputs();
    }

    public function loadUpdateSalat(){
    	$data = Salat::find($this->updateSalat);
    	$this->salat = $data->salat;
    	$this->adhan = $data->adhan;
    	$this->iqama = $data->iqama;
    }

    public function updateSalat()
    {
        $this->validate();

        Salat::find($this->updateSalat)->update($this->modelData());
        $this->resetInputs();
        $this->hideModalTrigger();


	    $this->banner('Salat timetable successfully updated!');

	    return redirect()->to('/salats');
    }   


	public function banner(string $message, string $style = 'success')
	{
	    request()->session()->flash('flash.banner', $message);
	    request()->session()->flash('flash.bannerStyle', $style);
	}    

    public function modelData()
    {
    	return [
    		'salat' => $this->salat,
    		'adhan' => $this->adhan,
    		'iqama' => $this->iqama    		
    	];
    }

    public function resetInputs()
    {

        $this->reset('updateSalat');
        $this->reset('salat');
        $this->reset('adhan');
        $this->reset('iqama');    	
    }

    public function submit()
    {
        $this->validate();

    	Salat::create([
    		'salat' => $this->salat,
    		'adhan' => $this->adhan,
    		'iqama' => $this->iqama
    	]);
    }

    public function render()
    {

		return view('livewire.salats');

	}

}
