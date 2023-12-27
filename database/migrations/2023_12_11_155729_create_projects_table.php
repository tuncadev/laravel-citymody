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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
						$table->string('project_title');
						$table->longText('project_desc');
						$table->string('project_skills');
						$table->string('project_category');
						$table->string('project_company')->nullable();;
						$table->string('project_location');
						$table->string('project_galery')->nullable();;
						$table->string('project_start')->nullable();;
						$table->string('project_end')->nullable();;
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
        Schema::dropIfExists('projects');
    }
};