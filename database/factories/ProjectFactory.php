<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     /* 
    > $r = \App\Models\Project::factory()->make();
    = App\Models\Project {#5073
        name: "Wolff",
        description: "Nihil numquam modi iste est natus tempora voluptatem.",
        image_url: "https://via.placeholder.com/640x480.png/004455?text=project+modi",
    }

    > $r -> save  
    = null

    > $r -> save()
    = true

    ***if you use make() method, you need to call save() method to save the data to the database. If you use create() method, it will save the data to the database automatically.***

    > \App\Models\Project::factory()->create()    
    = App\Models\Project {#5874
        name: "Deckow",
        description: "Aut vel quae maiores.",
        image_url: "https://via.placeholder.com/640x480.png/0000dd?text=project+officia",
        updated_at: "2024-03-11 10:01:30",
        created_at: "2024-03-11 10:01:30",
        id: 6,
  }
     */
    public function definition(): array
    {
        return [
            "name" => fake() -> lastName(),
            "description" => fake()->optional()->sentence(),
            "image_url" => fake()->optional()->imageUrl(640, 480, 'project', true),
        ];
    }
}
