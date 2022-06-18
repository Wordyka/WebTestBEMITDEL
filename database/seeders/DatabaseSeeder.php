<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\bem;
use App\Models\departemen;
use App\Models\divisi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();
        bem::factory(1)->create();
        departemen::factory(9)->create();
        divisi::factory(40)->create();
    }
}
