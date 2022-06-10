<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;

class gradeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $grades = [
          
         '01',
         '02',
         '03',
         '04',
         '05',
         '06',
         '07',
         '08',
         '09',
         '10',
         '11',
         '12',
         '13',
         '14',
         '15',
         '16',
         '17',
         '18',
         '19',
         '20',
         '21',
         '22',
         'Special'
       ];
    
       foreach ($grades as $grade) {
            DB::table('grades')->insert(['grade' => $grade]);
       }
      }
}
