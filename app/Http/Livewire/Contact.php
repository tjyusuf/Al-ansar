<?php

namespace App\Http\Livewire;

use App\ContactInfo;
use Livewire\Component;

class Contact extends Component
{

	public $email;
	public $phone;
	public $address;

	protected $rules = [
		'email' => 'required',
		'phone' => 'required',
		'address' => 'required',
	];

	public function mount()
	{
    	$data = ContactInfo::find(1);
    	$this->email = $data->email;
    	$this->phone = $data->phone;		
    	$this->address = $data->address;		
	}

    public function updateContactInfo()
    {
		$this->validate();
		ContactInfo::find(1)->update($this->modelData());

	    $this->banner('Conatact Info successfully updated!');

	    return redirect()->to('/contact-info');
    }


	public function banner(string $message, string $style = 'success')
	{
	    request()->session()->flash('flash.banner', $message);
	    request()->session()->flash('flash.bannerStyle', $style);
	} 
    

    public function modelData()
    {
    	return [
    		'email' => $this->email,
    		'phone' => $this->phone,
    		'address' => $this->address
    	];
    }	


    public function render()
    {
        return view('livewire.contact');
    }
}
