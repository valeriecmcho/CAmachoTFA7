<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username'   => 'admin_one',
                'full_name'  => 'Admin One',
                'created_at' => now(),
            ],
            [
                'username'   => 'cashier_anna',
                'full_name'  => 'Cashier Anna',
                'created_at' => now(),
            ],
            [
                'username'   => 'manager_ben',
                'full_name'  => 'Manager Ben',
                'created_at' => now(),
            ],
            [
                'username'   => 'cashier_cathy',
                'full_name'  => 'Cashier Cathy',
                'created_at' => now(),
            ],
            [
                'username'   => 'inv_dan',
                'full_name'  => 'Inventory Dan',
                'created_at' => now(),
            ],
            [
                'username'   => 'reports_elsa',
                'full_name'  => 'Reports Elsa',
                'created_at' => now(),
            ],
        ];

        foreach ($users as $data) {
            User::create($data);
        }
    }
}
