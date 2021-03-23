<div class="bg-white shadow-md rounded">

	<x-jet-form-section submit="updateHadith">
    	
		<x-slot name="title" >Update Hadith of Day</x-slot>
		<x-slot name="description">Add both english and arabic text of hadith</x-slot>
		<x-slot name="form">
			<x-jet-validation-errors class="mb-4" />
			<div class="flex w-full">
		        <div class="flex-1 w-full">
			        <x-jet-label value="English Text " for="hadithInputEN" class="block w-full">
			        	<br/>
			        	<textarea class="w-full"  id="hadithInputEN" wire:model="english" class="w-full mb-4"></textarea>
			        </x-jet-label>

			        <x-jet-label value="Arabic Text" for="hadithInputAR" class="block w-full">
			        	<br/>
			        	<textarea class="w-full"  id="hadithInputAR" wire:model="arabic" class="w-full"></textarea>
			        </x-jet-label>
		        </div>
			</div>			
		</x-slot>
	    <x-slot name="actions">

	        <x-jet-button class="ml-2"  wire:click="updateHadith">
	            <span wire:loading.class="hidden">Update Hadith</span>
			    <span wire:loading wire:target="updateHadith"> Processing...</span>	            
	        </x-jet-button>
	    </x-slot>		
	</x-jet-form-section>

</div>

