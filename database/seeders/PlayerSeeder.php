<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("players")->insert([
            'name'=>'Matt Fish',
            'age'=>'27',
            'height'=>'210.82',
            'team'=>'MIA',
        ]);

        DB::table("players")->insert([
            'name'=>'Walter McCarty',
            'age'=>'27',
            'height'=>'208.28',
            'team'=>'BOS',
        ]);
        DB::table("players")->insert([
            'name'=>'James Posey',
            'age'=>'31',
            'height'=>'203.2',
            'team'=>'BOS',
        ]);
        DB::table("players")->insert([
            'name'=>'James Michael McAdoo',
            'age'=>'22',
            'height'=>'205.74',
            'team'=>'GSW',
        ]);
        DB::table("players")->insert([
            'name'=>'Ricky Davis',
            'age'=>'26',
            'height'=>'200',
            'team'=>'MIN',
        ]);
        
    
    }
}
