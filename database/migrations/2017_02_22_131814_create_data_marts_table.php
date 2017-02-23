<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_marts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subjNum');
            $table->string('city');
            $table->string('doctor');
            $table->string('product');
            $table->string('specialty');
            $table->string('sep_territory');
            $table->string('disease');
            $table->string('q1_product_dc_lw')->nullable();
            $table->string('q4_1_main_point_of_m_1pt')->nullable();
            $table->string('q4_1_main_point_of_m_2pt')->nullable();
            $table->string('q4_1_main_point_of_m_3pt')->nullable();
            $table->string('q4_1_main_point_of_m_4pt')->nullable();
            $table->string('q5_1_msg_relevancy')->nullable();
            $table->string('q6_1_msg_credibility')->nullable();
            $table->string('q7_1_msg_motivation')->nullable();
            $table->string('q8_1_material_used_1st')->nullable();
            $table->string('q8_1_material_used_2st')->nullable();
            $table->string('q8_1_material_used_3st')->nullable();
            $table->string('q9_1_lengh_of_disc')->nullable();
            $table->string('q10_1_frequency_prom_prod')->nullable();
            $table->string('q11_1_prescribing_change')->nullable();    
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
        Schema::dropIfExists('data_marts');
    }
}
