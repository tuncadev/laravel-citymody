@props(['project_count'])

@php
	$sort_class = "border rounded-sm border-solid border-gray-400 p-1  cursor-default text-gray-400";
	$meta_text = "";
	if(empty(request()->query())) {
		$meta_text =  $project_count . '<span class="text-blue-500 font-bold">&nbsp;' . trans_choice('meta.projects.count_projects', $project_count) . '</span>';
	} else {
		foreach (request()->query() as $key => $value) {
			if($key != "sort" && Schema::hasColumn('projects', $key)) {
			$meta_text = $project_count . '<span class="text-blue-500 font-bold">&nbsp;' . trans_choice('meta.projects.count_projects', $project_count) . '</span>';
		} elseif ($key == "sort") {
			$meta_text = $project_count . '<span class="text-blue-500 font-bold">&nbsp;' . trans_choice('meta.projects.count_projects', $project_count) . '</span>';
		}
	}
	}
	if(!empty(request()->all())) {
		$url = url()->full()."&";
	} else {
		$url = "?";
	}
@endphp
<div class="flex justify-between ">
	<div class="left-meta flex items-center w-4/6">
		@php echo $meta_text ; @endphp	</div>
	<div class="right-meta flex items-center justify-end w-2/6">
		<i id="list-grid" class="hidden md:inline fa-solid fa-grip hover:text-blue-800 hover:cursor-pointer" onclick="change_grid_two()"></i>
		<i class="hidden md:inline fa-solid fa-list hover:text-blue-800 ml-2 hover:cursor-pointer" onclick="change_grid_one()"></i>
		<div class="project_sort ext-sm mr-2 ml-4 project_sort flex gap-2">
			<span class="text-xs text-blue-800 font-bold">
				{{__('meta.general.sort_by')}}
			</span>
			<span class="text-xs text-gray-600">
				<a href="javascript:void(0)" onclick="sortMe('desc')" class="<?php if( request()->sort == 'desc' || request()->sort == '') { echo $sort_class; }  ?>">
					{{__('meta.general.newest')}}
				</a> 
				| 
				<a href="javascript:void(0)" onclick="sortMe('asc')" class="<?php if( request()->sort == 'asc' ) { echo $sort_class;} ?>">
					{{__('meta.general.oldest')}}
				</a>
			</span>
		</div>
	</div>
</div>
<script>
		function getParams() {
		const queryParams = new URLSearchParams(window.location.search);
		var parr = [];
		for (const key of queryParams.keys()) {
			parr.push(key);
		}
 		return parr;
	}

	function sortMe(sort) {
 
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		const product = urlParams.get('sort');
		const first = queryString.substring(queryString.lastIndexOf("?") + 1).split("&")[0];
		const urlPath = location.protocol + '//' + location.host + location.pathname;

		if(queryString) {
			if ( getParams()[0] == 'sort') {
				window.location.href = urlPath + '?' + 'sort=' + sort;
			} else { 
				if(product) { 
				window.location.href = '?' + first + '&' + 'sort=' + sort;
			} else { 
				window.location.href =  queryString + '&' + 'sort=' + sort;
			}
			}
		} else {	
			window.location.href = '?' + 'sort=' + sort;
		}
	}
</script>