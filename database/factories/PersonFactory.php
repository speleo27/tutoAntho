<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "desc"=>$this->faker->sentence(55),
            "socialTwitter"=>$this->faker->url(),
            "socialFacebook"=>$this->faker->url(),
            "socialLinkden"=>$this->faker->url(),
            "socialGit"=>$this->faker->url(),

        ];
    }
}
