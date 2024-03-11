<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
(base) ThetNaingSoe@Thet-Naing-Soes-MacBook-Pro mytracks % php artisan tinker
Psy Shell v0.12.0 (PHP 8.3.3 — cli) by Justin Hileman
> \App\Models\Project::all()
= Illuminate\Database\Eloquent\Collection {#5764
    all: [],
  }

> $p = new \App\Models\Project();
= App\Models\Project {#5005}

> $p
= App\Models\Project {#5005}

> $p -> name = "name2"
= "name2"

> $p
= App\Models\Project {#5005
    name: "name2",
  }

> $p -> save();
= true

> $p
= App\Models\Project {#5005
    name: "name2",
    updated_at: "2024-03-10 23:38:09",
    created_at: "2024-03-10 23:38:09",
    id: 1,
  }
*/

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image_url'];
    //In Laravel, the $fillable property of a model class is an array that contains the names of the database columns that can be mass assigned.Mass assignment is a feature of Laravel's Eloquent ORM that allows you to create a new model instance and set its attributes at the same time.the $fillable property is set to ['name', 'description', 'image_url']. This means that only these columns can be mass assigned. Any other columns in the projects table are protected against mass assignment.
}
