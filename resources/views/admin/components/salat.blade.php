<div>
	@if($salat !== "Juma'a")
	    <tr class="border-b border-gray-200">
	        <td class="py-1 px-5 text-left">
	            {{ $salat }}
	        </td>
	        <td class="py-1 px-5 text-left">
	            {{ $adhan }}
	        </td>
	        <td class="py-1 px-5 text-left">
	            {{ $iqama }}
	        </td>
	        <td class="py-1 px-5 text-left">
	        	<x-jet-button  wire:click="showModalTrigger({{ $id }})" class="align-right" wire:loading.attr="disabled">Update</x-jet-button>
	        </td>
	    </tr>                     

	@else

	    <tr class="border-b border-gray-200 bg-gray-100">
	        <td class="py-1 px-5 text-left">
	        	Salah
	        </td>
	        <td class="py-1 px-5 text-left">
	        	Khutba
	        </td>
	        <td class="py-1 px-5 text-left">
	        	Iqama
	        </td>
	        <td class="py-1 px-5 text-left">
	        	Action
	        </td>
		</tr>  
	    <tr class="border-b border-gray-200">
	        <td class="py-1 px-5 text-left">
	            {{ $salat }}
	        </td>
	        <td class="py-1 px-5 text-left">
	            {{ $adhan }}
	        </td>
	        <td class="py-1 px-5 text-left">
	            {{ $iqama }}
	        </td>
	        <td class="py-1 px-5 text-left">
	        	<x-jet-button  wire:click="showModalTrigger({{ $id }})" class="align-right" wire:loading.attr="disabled">Update</x-jet-button>
	        </td>
	    </tr> 
	@endif



</div>