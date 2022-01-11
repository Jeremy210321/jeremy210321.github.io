<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_guards = User::where('role_id', 3)->get();
        //Por cada guardia se asignan 2 reportes
        $users_guards->each(function ($user) {
            Report::factory()->count(2)->for($user)->create();
        });
    }
}
