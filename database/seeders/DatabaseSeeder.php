<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Creamos un rol base para que las llaves foráneas no fallen
        Role::create([
            'department_name' => 'Ventas',
            'description' => 'Departamento de ventas y atención a clientes'
        ]);

        // 2. Creamos los 3 usuarios 
        User::factory(3)->create();

        // 3. Creamos 10 clientes al azar para que puedan comprar
        Customer::factory(10)->create();

        // 4. Creamos los 50 pedidos 
        Order::factory(50)->create();
    }
}