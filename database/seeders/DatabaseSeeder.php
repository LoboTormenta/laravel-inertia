<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     User::factory()->create([
         "name"=>"gculebron69",
         "email"=>"gculebron69@gmail.com",
         "password"=>bcrypt("password"),
     ]);



     User::factory()->create([
         "name"=>"isc_itma",
         "email"=>"isc_itma@milpaalta.tecnm.mx",
         "password"=>bcrypt("password"),
     ]);


     Project::factory(200)->create([]);
    }
}
