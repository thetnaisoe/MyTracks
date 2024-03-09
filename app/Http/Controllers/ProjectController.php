<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
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
}
