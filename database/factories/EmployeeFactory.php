<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model=Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre'=> $this-> faker->name(),
            'Telefono'=> $this-> faker-> tollFreePhoneNumber(),
            'Direccion'=> $this-> faker-> address(),
            'Correo'=> $this-> faker->unique()->email(),
            'cargo'=> $this-> faker->sentence(2),
            'Area'=> $this-> faker-> numberbetween(1, 5),
            'Salario'=> $this-> faker-> numberbetween(6000, 12000),
            'Genero'=> $this-> faker-> title()
        ];
    }
}
