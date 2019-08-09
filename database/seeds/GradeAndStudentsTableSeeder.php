<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GradeAndStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 3; $i++){
            $faker = Faker::create('App\Grade');
            $gradeInsert = new \App\Grade();
            $gradeInsert->school_level = $faker->sentence();
            $gradeInsert->classroom_number = $i;
            $gradeInsert->save();
            for($b = 1; $b<=30; $b++) {
                DB::table('Students')->insert([
                    'name' => $faker->name(),
                    'age' =>$faker->numberBetween(18,60),
                    'chair' =>$b,
                    'email' =>$faker->email(),
                    'class_id' =>$gradeInsert->id,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]);
            }
        }

    }
}
