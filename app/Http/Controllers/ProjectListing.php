<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class ProjectListing extends Controller
{
	//protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];
  // Show all projects
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function home() {
		return view('index');
	}
	public function index(Request $request) {
 
		array_key_exists('sort', request()->query()) ? $sort = request()->sort : $sort = 'desc';
		$count = Project::latest()->get() ? count(Project::latest()->get()) : 0 ;
		$projects = Project::latest()->orderBy('id',$sort)->get()->map(function ($projects) {
			$projects->project_category = urlencode($projects->project_category);
			return $projects;
	});;
		return view('projects.projects', [
			
			'projects' => $projects,
			'project_count' => $count
	
		]);
	}
	public function filter() {
	$keys = request()->query();
	
	array_key_exists('sort', request()->query()) ? $sort = request()->sort : $sort = 'desc';
		foreach ($keys as $key => $value) { 
			if($key != 'sort') {
				if(Schema::hasColumn('projects', $key)) { 
					$count = count(Project::latest()->filter(array($key=>$value))->get());

					$projects = Project::latest()->filter(array($key=>$value))->orderBy('id',$sort)->get();
				} 
			}
		}
		return view('projects.projects', [
			'projects' => $projects,
			'project_count' => $count	
		]);
	}	
	public function search() {
		array_key_exists('sort', request()->query()) ? $sort = request()->sort : $sort = 'desc';
		$count = count(Project::latest()->get());
	
		$projects = Project::latest()->filter(request(['search']))->orderBy('id',$sort)->get();
		return view('projects.projects', [
			
			'projects' => $projects,
			'project_count' => $count
	
		]);
	}
}