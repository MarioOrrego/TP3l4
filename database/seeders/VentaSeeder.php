<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venta;
class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        venta::Factory(1000)-> create();
    }
}
