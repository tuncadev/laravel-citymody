<a {{$attributes->merge(['href' => ''])}}>
	<li {{$attributes->merge(['class' => 'mr-6 text-sm hover:text-blue-800'])}}>
		{{$slot}}
	</li>
</a>