<?php

namespace App\Http\Livewire;

use App\Hadith;
use Livewire\Component;

class Hadiths extends Component
{

	public $english;
	public $arabic;


	protected $rules = [
		'english' => 'required',
		'arabic' => 'required',
	];

	public function mount()
	{
    	$data = Hadith::find(1);
    	$this->english = $data->hadith;
    	$this->arabic = $data->translation;
	}


	public function updateHadith()
	{
		$this->validate();
		Hadith::find(1)->update($this->modelData());

	    $this->banner('Hadith successfully updated!');

	    return redirect()->to('/hadiths');
    }   


	public function banner(string $message, string $style = 'success')
	{
	    request()->session()->flash('flash.banner', $message);
	    request()->session()->flash('flash.bannerStyle', $style);
	} 

    public function modelData()
    {
    	return [
    		'english' => $this->english,
    		'arabic' => $this->arabic
    	];
    }	

    public function render()
    {
        return view('livewire.hadiths');
    }

}
