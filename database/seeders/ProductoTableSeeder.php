<?php

namespace Database\Seeders;

use App\Models\producto as ModelsProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Producto;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        for ($i=0; $i < 6; $i++) {
     Producto::create([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'address' => str_random(25)
        ]);
     }
            }
    }

