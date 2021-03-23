<div>


	  <!-- Footer Section Start -->
    <footer id="footer" class="bg-blue-500 py-10">
        <div class="flex ">
          <div class="w-full  md:w-6/12">
            <div class="mx-3 mb-8">



	    	<div class="flex gap-3 mb-3">
		        <div class="flex-1">
			        <x-jet-label value="Phone Numebr" for="phoneInput" >
			        	<x-jet-input id="phoneInput" class="" wire:model="phone" />
			        </x-jet-label>
		        </div>
		        <div class="flex-1 flex-stretched">
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


            </div>
          </div>
          <div class="w-full md:w-3/12">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Navigations</h3>
              <ul>
                <li><a href="/" >Home</a></li>
                <li><a href="#" >News</a></li>
                <li><a href="#contact" >Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="w-full md:w-3/12">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Our Affiliates</h3>
              <ul>
                <li><a href="/" >Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>


        </div>

    </footer> 
    <!-- Footer Section End -->

</div>
