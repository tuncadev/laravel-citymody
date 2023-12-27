@if(session()->has('info'))
 	<div x-data="{show: true}" class="z-50">
		<div x-show="show" x-effect="if (show) setTimeout(function() {show = false}, 2000)" class="z-50 fixed top-3 left-1/2 p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
			<span class="font-medium">
				{{session('info')}}
			</span>
		</div>
	</div>
@endif
@if(session()->has('danger'))
	<div x-data="{show: true}" class="z-50">
		<div x-show="show" x-effect="if (show) setTimeout(function() {show = false}, 3500)"  class="z-50 fixed top-1/2 left-1/2 p-20 transform -translate-x-1/2 -translate-y-1/2  mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
  		<span class="font-medium">	
				{{session('danger')}} 
			</span> 
		</div>
	</div>
@endif
@if(session()->has('success'))

	<div x-data="{show: true}" class="z-50">
		<div x-show="show" x-effect="if (show) setTimeout(function() {show = false}, 2000)"  class="z-50 fixed top-3 left-1/2 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
			<span class="font-medium">
				{{session('success')}}
			</span>
		</div>
	</div> 	
@endif
@if(session()->has('warning'))
 	<div x-data="{show: true}" class="z-50">
		<div x-show="show" x-effect="if (show) setTimeout(function() {show = false}, 3000)"  class="z-50 fixed top-3 left-1/2 p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
			<span class="font-medium">	
				{{session('warning')}} 
			</span>
		</div>
	</div>
@endif



