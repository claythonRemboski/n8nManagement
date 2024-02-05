<?php


namespace Database\Factories;

use App\Models\N8N;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\N8N.php>
 */
class N8NFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = N8N::class;


    public function definition(): array
    {

        $chave = 'EC-';
        $cardNumber = $this->faker->numberBetween(100, 350);
        $cardId = $chave . $cardNumber;


        return [
            'id' => $cardId,
            'name' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'createdAt' => $this->faker->dateTimeThisDecade(),
            'updatedAt' => $this->faker->dateTimeThisDecade(),
            'comercialProject' => $this->faker->boolean(),

        ];
    }
}
