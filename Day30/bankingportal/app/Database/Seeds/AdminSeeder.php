<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class AdminSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            $this->db->table('admin')->insert($this->createAdmin());
        }
    }
    private function createAdmin()
    {
        $faker = Factory::create();
        return [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => $faker->password(),
        ];
    }
}
