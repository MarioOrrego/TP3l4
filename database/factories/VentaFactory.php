<?php

namespace Database\Factories;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_Producto'=> $this-> faker->word(),
            'Fecha_Emitida'=> $this-> faker->date($format = 'Y-m-d', $max = 'now'),
            'Hora_Emitida'=> $this-> faker->time($format = 'H:i:s', $max = 'now'),
            'Id_Empleado'=> $this-> faker->numberbetween(1, 500),
            'Id_Cliente'=> $this-> faker->randomDigit(),
            'Id_Producto'=> $this-> faker->swiftBicNumber(),
            'Pago_Total'=> $this-> faker->latitude($min = 5, $max = 1000000)
        ];
    }
}
