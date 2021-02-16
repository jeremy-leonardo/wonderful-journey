<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Admin",
                'email' => "admin@mail.com",
                'phone' => "08123123",
                'role' => "admin",
                'password' => bcrypt("admin12345"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => "Anto",
                'email' => "anto@mail.com",
                'phone' => "08421421",
                'role' => "user",
                'password' => bcrypt("anto12345"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => "Budi",
                'email' => "budi@mail.com",
                'phone' => "084221421",
                'role' => "user",
                'password' => bcrypt("budi12345"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => "Jeremy",
                'email' => "jeremy@mail.com",
                'phone' => "08211421",
                'role' => "user",
                'password' => bcrypt("jeremy12345"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);

        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'phone' => $faker->phoneNumber,
                'role' => 'user',
                'password' => bcrypt("password12345"),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
