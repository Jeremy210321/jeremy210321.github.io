<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_admin = Role::where('name', 'admin')->first();;
        //5 usuarios que le pertenecel al rl admin 
        User::factory()->for($rol_admin)->count(5)->create();
        $rol_director = Role::where('name', 'director')->first();;
        //5 usuarios que le pertenecel al rl admin 
        User::factory()->for($rol_director)->count(5)->create();
        $rol_guard = Role::where('name', 'guard')->first();;
        //5 usuarios que le pertenecel al rl admin 
        User::factory()->for($rol_guard)->count(5)->create();
        $rol_prisioner = Role::where('name', 'prisioner')->first();;
        //5 usuarios que le pertenecel al rl admin 
        User::factory()->for($rol_prisioner)->count(5)->create();
    }
}
