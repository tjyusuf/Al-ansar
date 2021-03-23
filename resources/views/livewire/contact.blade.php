<div>

	<x-jet-form-section submit="updateContactInfo">
    	
		<x-slot name="title" >Update Contact Info</x-slot>
		<x-slot name="description">Please update valid contact details</x-slot>
		<x-slot name="form">
			<x-jet-validation-errors class="mb-4" />

	    	<div class="flex gap-3 mb-3">
		        <div class="flex-1">
			        <x-jet-label value="Phone Numebr" for="phoneInput" >
			        	<x-jet-input id="phoneInput" class="" wire:model="phone" />
			        </x-jet-label>

			        <x-jet-label value="Email Address" for="emailInput" >
			        	<x-jet-input id="emailInput" class="" wire:model="email" type="email"/>
			        </x-jet-label>
		        </div>
		    </div>

	    	<div class="flex gap-3 mb-3">
		        <div class="flex-1">	    	

			        <x-jet-label value="Address" for="addressInput" class="block w-full">
			        	<br/>
			        	<textarea class="w-full"  id="addressInput" wire:model="address" class="w-full"></textarea>
			        </x-jet-label>
		        </div>
			</div>			
		</x-slot>
	    <x-slot name="actions">

	        <x-jet-button class="ml-2"  wire:click="updateContactInfo">
	            <span wire:loading.class="hidden">Update Contact</span>
			    <span wire:loading wire:target="updateContactInfo"> Processing...</span>	            
	        </x-jet-button>
	    </x-slot>		
	</x-jet-form-section>

</div>
