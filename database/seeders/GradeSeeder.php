<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')-> insert([
            [
                'course_id' => '1',
                'test_name' => 'Assessment',
                'best_grade' => 9.8,
            ],
            [
                'course_id' => '2',
                'test_name' => 'Case Study',
                'best_grade' => 7.7,
            ],
            [
                'course_id' => '3',
                'test_name' => 'Case Study',
                'best_grade' => 9,
            ],
            [
                'course_id' => '4',
                'test_name' => 'Case Study',
                'best_grade' => 9.5,
            ],
            [
                'course_id' => '5',
                'test_name' => 'Project',
                'best_grade' => 8.5,
            ],
            [
                'course_id' => '6',
                'test_name' => 'Case Study',
                'best_grade' => 0
            ],
            [
                'course_id' => '7',
                'test_name' => 'Project',
                'best_grade' => 0
            ],
            [
                'course_id' => '8',
                'test_name' => 'Assessment',
                'best_grade' => 0
            ],
            [
                'course_id' => '9',
                'test_name' => 'Report',
                'best_grade' => 0
            ],
            [
                'course_id' => '10',
                'test_name' => 'Portfolio',
                'best_grade' => 0
            ],
            [
                'course_id' => '11',
                'test_name' => 'Project',
                'best_grade' => 0
            ],
            [
                'course_id' => '12',
                'test_name' => 'Assessment',
                'best_grade' => 0
            ],
            [
                'course_id' => '13',
                'test_name' => 'Portfolio',
                'best_grade' => 0
            ],
            [
                'course_id' => '14',
                'test_name' => 'Portfolio',
                'best_grade' => 0,
            ],
            [
                'course_id' => '15',
                'test_name' => 'Portfolio',
                'best_grade' => 0,
            ]
        ]);
    }
}
