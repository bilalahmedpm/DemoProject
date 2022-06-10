<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class gitypeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gitypes')->insert([    

            'relationdesc' => 'Retirement'
         ]); 
         DB::table('gitypes')->insert([    

            'relationdesc' => 'Death'
         ]);
         DB::table('gitypes')->insert([    

            'relationdesc' => 'Death After Retirement'
         ]);
    }
}
