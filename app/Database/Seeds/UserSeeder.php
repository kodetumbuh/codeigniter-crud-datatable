<?php
 
namespace App\Database\Seeds;
 
use CodeIgniter\Database\Seeder;
use \Faker\Factory;
 
class UserSeeder extends Seeder
{
    public function run()
    {
		for($i = 0; $i < 500; $i++){
			$this->db->table("user")->insert($this->generateTestProducts());
		}
    }
 
    public function generateTestProducts()
    {
        $faker = Factory::create();
 
		return [
			"username" => $faker->name,
			"email" => $faker->email,
			"level_user" =>  $faker->randomElement(['admin' ,'user']),
			"password" => password_hash('123456', PASSWORD_DEFAULT),
			"created_at" => date("Y-m-d H:i:s"),
		];
    }
}