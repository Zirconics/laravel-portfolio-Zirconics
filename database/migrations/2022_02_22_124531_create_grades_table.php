<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('test_name');
            $table->decimal('lowest_passing_grade')
                ->default(5.5)
                ->comment('Lowest grade to pass so average calculations can be applied');
            $table->decimal('best_grade')
                ->nullable();
            $table->timestamp('passed_at')
                ->nullable()
                ->comment('Date that the grade was larger than or equal to the lowest passing grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
