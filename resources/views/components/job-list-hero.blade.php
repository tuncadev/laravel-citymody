<form  method="POST" action="">
<div {{$attributes->merge(['class' => 'project-hero  w-full bg-blue-500 align-center'])}}>
	<div class="max-w-lg md:max-w-7xl md:m-auto container  items-center text-center text-white pt-20 pb-20">
		<h1 class="text-white text-2xl font-bold mb-4">{{__('head.hero.h1')}}</h1>
		<div class="search-projects flex justify-center w-sm md:w-full align-center relative">
			<div class="searchbox" >

				<i class="fa-solid fa-magnifying-glass text-gray-500 absolute top-4 text-xl pl-3"></i>
				<input type="text" name="search" class="bg-gray-50 rounded-tl-lg rounded-bl-lg text-gray-600 px-6 py-4 pl-10 text-md max-w-min md:w-96">
			</div>
			<span class="bg-gray-50 flex items-center rounded-tr-lg rounded-br-lg md:w-28 text-center justify-end pr-2"><button class="border py-2 px-4  rounded rounded-lg bg-blue-500 hover:bg-blue-800">{{__('head.hero.search')}}</button></span>
		</div>
	</div>
</div>
</form>