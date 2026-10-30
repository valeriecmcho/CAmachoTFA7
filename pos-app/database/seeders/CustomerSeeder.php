<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'full_name'  => 'Alice Reyes',
                'email'      => 'alice.reyes@example.com',
                'phone'      => '09171234567',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Bob Santos',
                'email'      => 'bob.santos@example.com',
                'phone'      => '09189876543',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Carol Dela Cruz',
                'email'      => 'carol.dc@example.com',
                'phone'      => '09205554321',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'David Lim',
                'email'      => 'david.lim@example.com',
                'phone'      => '09351112233',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Eva Garcia',
                'email'      => 'eva.garcia@example.com',
                'phone'      => '09278889900',
                'created_at' => now(),
            ],
            [
                'full_name'  => 'Frank Ocampo',
                'email'      => 'frank.ocampo@example.com',
                'phone'      => '09194445566',
                'created_at' => now(),
            ],
        ];

        foreach ($customers as $data) {
            Customer::create($data);
        }
    }
}
