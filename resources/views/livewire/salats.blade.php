<div class="bg-white shadow-md rounded">

	<table class="min-w-max w-full table-auto">
	    <thead>
	    	<tr> 
	    		<th class="px-6 py-3 bg-gray-200 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider" colspan="4">
	    			Salah Times

					<!-- <x-jet-button>Update Salat Timetable</x-jet-button>		     -->
	    		</th>
	    	</tr>

	        <tr class="bg-gray-100 text-gray-500 uppercase text-sm ">
	            <th class="py-2 px-5 text-left">Salah</th>
	            <th class="py-2 px-5 text-left">Adhan</th>
	            <th class="py-2 px-5 text-left">Iqama</th>
	            <th class="py-2 px-5 text-left">Action</th>
	        </tr>
	    </thead>
	    <tbody class="text-gray-600 text-sm font-medium">
		    @foreach ($salats as $salatItem)
	        	@include('admin.components.salat', $salatItem)
		    @endforeach 	



	    </tbody>
	</table>


	<x-jet-dialog-modal wire:model="showModal" >
	    <x-slot name="title">
	        {{__('Update Salat Time') }}
	        <!-- {{ $updateSalat }} -->
	    </x-slot>

	    <x-slot name="content">

	        <x-jet-validation-errors class="mb-4" />

	    	<div class="flex gap-3 mb-3">
		        <div class="flex-1 w-full">
			        <x-jet-label value="Salat" for="salatInput" >
			        	<br/>
			        	<x-jet-input id="salatInput" class="w-full" wire:model="salat" value="{{ $salat }}"/>
			        </x-jet-label>
		        </div>
	    	</div>

	    	<div class="flex gap-3 mb-3">
		        <div class="flex-1">
			        <x-jet-label value="Adhan" for="adhanInput" >
			        	<x-jet-input id="adhanInput" class="w-full" wire:model="adhan" value="{{ $adhan }}" type="time"/>
			        </x-jet-label>
		        </div>
		        <div class="flex-1">
			        <x-jet-label value="Iqama" for="iqamaInput" >
			        	<x-jet-input id="iqamaInput" class="w-full" wire:model="iqama" value="{{ $iqama }}" type="time"/>
			        </x-jet-label>
		        </div>
	    	</div>
	    	
	    </x-slot>

	    <x-slot name="footer">
	        <x-jet-secondary-button wire:click="hideModalTrigger()" >
	            Close
	        </x-jet-secondary-button>

	        <x-jet-button class="ml-2"  wire:click="updateSalat()">
	            Update Timetable
	        </x-jet-button>
	    </x-slot>
	</x-jet-dialog-modal>

</div>

