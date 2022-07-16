<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_Producto'=> $this-> faker->word(),
            'Descripcion'=> $this-> faker->text($maxNbChars = 80),
            'Precio'=> $this-> faker->latitude($min = 5, $max = 8000),
            'Fecha_Entrada'=> $this-> faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
