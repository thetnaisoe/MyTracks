<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show(){
        $noProjects = Project::count();

        return view('main', [
            'numberOfProjects' => $noProjects,
        ]); // it will look for main.blade.php file in resources/views folder
    }
    public function list(){
        $projects = Project::all();
        //dd($projects);
        // $projects = [
        //     ['name' => 'my project1'],
        //     ['name' => 'my project2'],
        //     ['name' => 'my project3'],
        //     ['name' => 'my project4'],
        // ];
        return view('projects.list', [
            'projects' => $projects,
        ]); // it will look for list.blade.php file in resources/views/projects folder
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){
        //dd($request); //it stands for dump and die, it will print the data sent in the request and stop the execution
        $validatedData = $request -> validate([ // please assign a validated data to a variable
            'name' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url', // can be empty but if it is present, should be a valid url.
        ]);
        //dd($validatedData);
        Project::create($validatedData); // it will create a new record in the projects table
        return redirect('/projects');
    }

    public function detail($id){
        $project = Project::find($id);
        return view('projects.detail', [
            'project' => $project,
        ]);
    }
    
    public function edit($id){
        $project = Project::find($id);
        return view('projects.edit', [
            'project' => $project,
        ]);
    }

    public function update($id, Request $request){
        //dd($request); //it stands for dump and die, it will print the data sent in the request and stop the execution
        $validatedData = $request -> validate([ // please assign a validated data to a variable
            'name' => 'required',
            'description' => 'nullable',
            'image_url' => 'nullable|url', // can be empty but if it is present, should be a valid url.
        ]);
        $project = Project::find($id);
        $project->update($validatedData); // it will update the record in the projects table
        return redirect("/projects/{$id}" ); // be sure to use "" instead of '' to use the variable in the string
    }

    public function delete($id){
        $project = Project::find($id);
        $project->delete();
        return redirect("/projects");
    }
    

}
