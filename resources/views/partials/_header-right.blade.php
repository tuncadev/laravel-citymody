@php
		$current_locale = Config::get('app.locale');
		$language_icon = false;
	//	dd($current_locale);
		if($current_locale && $current_locale == "en") {
			$active_flag_filename = 'united-kingdom_flag.svg';
		} elseif ($current_locale && $current_locale == "ru") {
			$active_flag_filename = 'russian_flag.svg';
		} elseif ($current_locale && $current_locale == "tr") {
			$active_flag_filename = 'turkish_flag.svg';
		} else {
			$language_icon = true;
		}
		
@endphp
<div class="container lg:mx-auto text-right w-5/12 flex justify-end ">

<button id="dropdownHoverButton"  title="{{__('general.messages.langswitch')}}"  data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-blue-700 text-center inline-flex items-center mr-2" type="button">
	@if ($current_locale)
		<img src="{{ asset('/images/svg/'.$active_flag_filename) }}" alt="United Kingdom flag icon" class="w-7">
	@endif
	@if ($language_icon)
		<i class="fa-solid fa-globe"></i>
	@endif
	<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
		<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
		</svg>
	</button>
	<!-- Dropdown language menu -->
	<div id="dropdownHover"class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
			<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
				@if ($current_locale != 'en')
					<li>
						<a href="{{url('en')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
							<img src="{{ asset('/images/svg/united-kingdom_flag.svg') }}" alt="United Kingdom flag icon" class="w-7">
						</a>
					</li>
				@endif
				@if ($current_locale != 'ru')
				<li>
					<a href="{{url('ru')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
						<img src="{{ asset('/images/svg/russian_flag.svg') }}" alt="United Kingdom flag icon" class="w-7">
					</a>
				</li>
				@endif
				@if ($current_locale != 'tr')
				<li>
					<a href="{{url('tr')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
						<img src="{{ asset('/images/svg/turkish_flag.svg') }}" alt="United Kingdom flag icon" class="w-7">
					</a>
				</li>
				@endif
			</ul>
	</div>
	
	@auth
	<i class="fa-solid fa-house-user text-blue-500 text-md ml-1 hover:cursor-pointer" title="{{__('dashboard.dashboard')}}"></i>
		<span class="sentence text-sm mx-2">
			{{__('auth.welcome')}}  
		</span>
		<span class="font-bold text-sm">{{auth()->user()->name}} 
			<span class="text-xsm font-thin">
				<form class="inline" method="POST" action="/logout">
					@csrf
					<button type="submit">
						<i class="fa-solid fa-right-from-bracket text-blue-500 ml-2" title="{{__('general.buttons.logout')}}"></i> 
					</button>
				</form>
			</span>
		</span>
	@else
	<div class="loggedout flex justify-end">
		<button data-modal-target="register-modal" data-modal-toggle="register-modal" class="block ml-2.5 rounded-md border border-blue-400 px-2.5 py-2 bg-blue-400 text-white hover:bg-white hover:text-blue-400 hover:border hover:border-blue-400" type="button">
			<i class="fa-solid fa-id-card "> </i>
			{{__('general.buttons.register')}}
		</button>
 
		<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block ml-2.5 hover:bg-white hover:text-blue-800 hover:border hover:border-blue-800 rounded-md border border-blue-800 px-2.5 py-2 bg-blue-800 text-white" type="button">
			<i class="fa-solid fa-right-to-bracket"></i>
			{{__('general.buttons.login')}}
		</button>
	</div>
	@endauth
</div> {{-- div container end --}}
