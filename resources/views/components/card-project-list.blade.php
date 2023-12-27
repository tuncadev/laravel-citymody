@props(['project'])

@php	 

		$future = strtotime($project->project_end);
		$now = time();
		$timeleft = $future-$now;
		$days = round((($timeleft/24)/60)/60); 
		$left_to_apply = trans_choice('meta.projects.left_to_apply', $days);
		$daysleft = $days <= 0 ? '<span class="text-red-400 ">' . __('meta.projects.application_closed') . '</span> ': '<span class="text-blue-800 ">' . $days . '</span>&nbsp;' . $left_to_apply;
		$closed = $days <= 0 ? "border-red-200" : "";
		$category_str = preg_replace('/[^a-z]/i','',strtolower($project->project_category ));
		$citiesCsv = urldecode($project->project_location);
		$skillsCsv = urldecode($project->project_skills);
		$skills = explode(',', $skillsCsv);
		$cities = explode(',', $citiesCsv);

@endphp

<x-blue-card class="{{$closed}}">
		<div {{$attributes->merge(['class' => 'card-project_header flex justify-between items-center flex-wrap  gap-y-2'])}}>
			<div class="card-project_header-left flex items-center">
				<img class="logo-comnpany w-14 h-auto mr-5"  src="https://www.citymody.com/wp-content/uploads/2023/08/citymody_fb.png" alt="">
				<div class="card-header-company_info ">
					<h3 class="project-title text-base font-bold">{{$project->id .	" - " . $project->project_title}}</h3>
					<div class="card-company_meta text-sm">
						{{__('meta.projects.company')}} <a href="/projects/search/?project_company={{ htmlspecialchars($project->project_company)  }}" class="text-blue-600 hover:text-blue-800">{{ urldecode($project->project_company) }}</a>, 		{{__('meta.projects.category')}}   <a href="/projects/search/?project_category={{ $project->project_category }}" class="text-blue-600 hover:text-blue-800">{{ __('project_categories.'.$category_str) }}</a>
					</div>
					@unless ($skills === "")
						<div class="card-company_meta text-sm">
							{{__('meta.projects.skills')}}  
							@foreach ($skills as $skill)
							<a href="/projects/search/?project_skills={{$skill}}" class="text-blue-600 hover:text-blue-800">{{$skill}}</a> | 
							@endforeach							
						</div>
					@endunless
				</div>
			</div>
			<div class="card-project_header-right text-blue-400">
				<i class="fas fa-heart mr-1  hover:text-blue-800 cursor-pointer" aria-hidden="true"></i>
				<i class="fas fa-share-alt mr-1  hover:text-blue-800 cursor-pointer"  aria-hidden="true"></i>
			</div>
		</div>
		<div class="card-project_desc">
			<p class="mt-4 text-sm font-400">
				{{$truncated = Str::of($project->project_desc)->limit(450)}}
			</p>
		</div>
		<div class="card-project_footer flex justify-between items-center	 mt-4 text-blue-500 mr-2 flex-col md:flex-row">
			<div class="card-project_footer-left flex text-xs md:text-sm flex-wrap md:flex-nowrap gap-y-2 w-full">
				@unless ($project->project_location == '')
					@foreach ($cities as $city) 
						<a href="/projects/search/?project_location={{$city}}" class="py-1.5 px-3.5 bg-green-50 text-xs md:text-sm rounded-3xl hover:text-blue-700 hover:bg-green-100 hover:cursor-pointer  mr-3">
							<i class="fa-solid fa-location-dot"></i>
							{{$city}}
						</a>
					@endforeach
				@endunless
			</div>
			<div class="card-project_footer-right text-gray-600 text-xs md:text-sm text-right md:text-right w-full mt-4 md:mt-auto">
				@php
						echo $daysleft;
				@endphp
			</div>
		</div>
	</x-blue-card>