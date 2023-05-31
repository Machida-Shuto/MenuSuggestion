<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        DB::table('ingredients')->insert([
                'id' => '1,2,3,4,5,6,7,8,9,10'
                'name' => 'ジャガイモ',
                'amount' => '1個',
                'menu_id' =>'1'
         ]);
         
         DB::table('ingredients')->insert([
                'name' => '唐揚げ',
                'overview' => 'overview',
                'vote_average'=>'5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('ingredients')->insert([
                'name' => '生姜焼き',
                'overview' => 'overview',
                'vote_average'=>'5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
}

  
}

