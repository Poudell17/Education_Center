<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;




class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'teachername' => $this->faker->name(),
            'coursename' =>$this->faker->course(),
            'image' =>$this->faker->image('public/storage/images',640,480, null, false),
            'description' =>$this->faker->realText(rand(10, 300)) , 
            'contact' => '90898767788',
        ];
    }
}
