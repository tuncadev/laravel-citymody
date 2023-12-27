<x-layout>
	<div class="flex flex-col md:flex-row  md:w-full  gap-4 pt-10">
		<div class="w-full md:w-1/4 p-2 md:block">
			Filters
		</div>
		<div class="w-full flex flex-col md:w-3/4 p-2">
			@unless ( count($projects) == 0 )
			<div class="w-full p-2">
				<x-project-list-meta :project_count="$project_count" />
			</div>
				<div class="w-full p-2 grid grid-cols-1 gap-2" id="project_list">
					@foreach ($projects as $project)
						<x-card-project-list :project="$project" />
					@endforeach
				</div>
			@endunless
		</div>
	</div>
	<script>
		const $project_list = document.getElementById('project_list')
		var $card_header = $('.card-project_header');
		function change_grid_two() {

				$project_list.classList.remove('grid-cols-1', 'gap-2');
    		$project_list.classList.add('grid-cols-2', 'gap-6'); 
				$('.card-project_header').removeClass('justify-between');
				$('.card-project_header').addClass('justify-end');
		}
		function change_grid_one() {
			$project_list.classList.remove('grid-cols-2', 'gap-6');
    	$project_list.classList.add('grid-cols-1', 'gap-2'); 
			$('.card-project_header').removeClass('justify-end');
			$('.card-project_header').addClass('justify-between');
		}
	</script>
</x-layout>