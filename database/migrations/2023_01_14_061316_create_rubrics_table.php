<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics', function (Blueprint $table) {
            $table->Integer("rubricID");
            $table->String("competency");
            $table->String("excellentDesc");
            $table->String("goodDesc");
            $table->String("modDesc");
            $table->String("weakDesc");
            $table->String("veryweakDesc");
            $table->String("failDesc");
            $table->String("weight");
            $table->String("rubricType");
            $table->String("psmType");
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
        Schema::dropIfExists('rubrics');
    }
};
