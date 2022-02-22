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
                'course_name' => 'Program and Career Orientation',
                'test_name' => 'Assessment',
                'ec' => 2.5,
                'best_grade' => 9.8
            ],
            [
                'course_name' => 'Computer Science Basics',
                'test_name' => 'Case Study',
                'ec' => 5,
                'best_grade' => 7.7
            ],
            [
                'course_name' => 'Programming Basics',
                'test_name' => 'Case Study',
                'ec' => 5,
                'best_grade' => 9
            ],
            [
                'course_name' => 'Object Oriented Programming',
                'test_name' => 'Case Study',
                'ec' => 10,
                'best_grade' => 9.5
            ],
            [
                'course_name' => 'Object Oriented Programming',
                'test_name' => 'Project',
                'ec' => 10,
                'best_grade' => 8.5
            ],
            [
                'course_name' => 'Framework Development 1',
                'test_name' => 'Case Study',
                'ec' => 5
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Project',
                'ec' => 7.5
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Assessment',
                'ec' => 7.5
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Report',
                'ec' => 7.5
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Portfolio',
                'ec' => 10
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Project',
                'ec' => 10
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Assessment',
                'ec' => 10
            ],
            [
                'course_name' => 'Personality 1',
                'test_name' => 'Portfolio',
                'ec' => 1.25
            ],
            [
                'course_name' => 'Personality 2',
                'test_name' => 'Portfolio',
                'ec' => 1.25
            ],
            [
                'course_name' => 'Personal Professional Development',
                'test_name' => 'Portfolio',
                'ec' => 12.5
            ],
        ]);
    }
}
