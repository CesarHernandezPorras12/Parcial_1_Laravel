<?php

namespace Database\Factories;
use App\Models\Ciudad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciudad>
 */
class CiudadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ciudad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->city,
            'pais' => $this->faker->country,
            'poblacion' => $this->faker->numberBetween(10000, 10000000),
            'area' => $this->faker->randomFloat(2, 10, 1000),
            'capital' => $this->faker->boolean(50),
            'fecha_fundacion' => $this->faker->date(),
            'descripcion' => $this->faker->paragraph,
            'clima' => $this->faker->randomElement(['Tropical', 'Templado', 'Árido']),
            'moneda' => $this->faker->currencyCode,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
