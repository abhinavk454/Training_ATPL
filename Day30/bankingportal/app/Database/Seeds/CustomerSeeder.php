<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            $this->db->table('customer')->insert($this->createCustomer());
        }
    }
    private function createCustomer()
    {
        $faker = Factory::create();
        return [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => $faker->password(),
            'account_number' => $faker->bankAccountNumber(),
            'balance' => random_int(100000, 100000000),
        ];
    }
}
