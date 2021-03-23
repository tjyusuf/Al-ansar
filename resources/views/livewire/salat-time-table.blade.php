<div>

		<table class="min-w-max w-full bg-white table-auto">
            <thead>
                <tr>
                    <th class="py-2 px-5 text-center bg-green-300 text-green-700 uppercase text-sm tracking-wider" colspan="3">Salah Times</th>
                </tr>
                <tr class="bg-green-300 text-green-700 uppercase text-sm border-b border-gray-200">
                    <th class="py-2 px-5 text-left">Salah</th>
                    <th class="py-2 px-5 text-left">Adhan</th>
                    <th class="py-2 px-5 text-left">Iqama</th>
                </tr>
            </thead>
            <tbody class="text-green-600 text-sm font-medium">
                @foreach ($salats as $salat)
	                
					@if($salat->salat !== "Juma'a")
		                <tr class="border-b border-gray-200">
		                    <td class="py-2 px-5 text-left"> {{ $salat->salat }} </td>
		                    <td class="py-2 px-5 text-left"> 
		                    	{{ 

		                    		date('h:ia',strtotime($salat->adhan)) 
		                    	}} 
		                    </td>
		                    <td class="py-2 px-5 text-left"> {{ date('h:ia',strtotime($salat->iqama))  }} </td>
		                </tr>
		            @else

		                <tr class="bg-green-300 text-green-700 uppercase text-sm border-b border-gray-200">
		                    <th class="py-2 px-5 text-left">Salah</th>
		                    <th class="py-2 px-5 text-left">Khutba</th>
		                    <th class="py-2 px-5 text-left">Iqama</th>
		                </tr>		            
		                <tr class="border-b border-gray-200">
		                    <td class="py-2 px-5 text-left"> {{ $salat->salat }} </td>
		                    <td class="py-2 px-5 text-left"> {{ $salat->adhan }} </td>
		                    <td class="py-2 px-5 text-left"> {{ $salat->iqama }} </td>
		                </tr>

					@endif

                @endforeach

            </tbody>
        </table>



</div>
