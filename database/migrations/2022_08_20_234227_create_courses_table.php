<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->smallInteger('course_id')->primary()->comment('経路ID');
            $table->smallInteger('place_id')->comment('出発地ID');
            $table->foreign('place_id')->references('place_id')->on('places')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('name')->comment('経路名');
            $table->string('url')->comment('遷移先URL');
            $table->text('gmap_url')->comment('GoogleMapURL');
            $table->boolean('outside_flg')->comment('屋外フラグ');
            $table->boolean('car_flg')->comment('車使用フラグ');
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
        Schema::dropIfExists('courses');
    }
}
