<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("teams")->insert([
            'team'=>'BOS',
            'full_name'=>'Boston Celtics',
        ]);
        DB::table("teams")->insert([
            'team'=>'GSW',
            'full_name'=>'Golden State Warriors',
        ]);
        DB::table("teams")->insert([
            'team'=>'MIN',
            'full_name'=>'Minnesota Timberwolves',
        ]);
        DB::table("teams")->insert([
            'team'=>'MIA',
            'full_name'=>'Miami Heat',
        ]);
    }
}
