<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(){
        $noProjects = 46;
        return view('main', [
            'numberOfProjects' => $noProjects,
        ]); // it will look for main.blade.php file in resources/views folder
    }
    public function list(){
        $projects = [
            ['name' => 'my project1'],
            ['name' => 'my project2'],
            ['name' => 'my project3'],
            ['name' => 'my project4'],
        ];
        return view('projects.list', [
            'projects' => $projects,
        ]); // it will look for projects.blade.php file in resources/views folder
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
        return redirect('/projects');
    }
}
