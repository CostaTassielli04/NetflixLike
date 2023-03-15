<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<20;$i++){

            DB::table('actors')->insert([
                'name' => Str::random(10),
                'surname' => Str::random(10),
                'role' => Str::random(20),
                'birth_place' => Str::random(20),
                'birthday' =>'1989-11-10',
                'oscar'=>0,
                'img'=>'img/actor_default.jpg',
            ]);
        }
    }
}
