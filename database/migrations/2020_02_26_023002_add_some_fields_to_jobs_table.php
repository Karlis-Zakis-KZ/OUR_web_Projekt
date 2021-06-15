<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
            $table->integer('vacancy');
            $table->date('deadline');
            $table->string('gender');
            $table->string('age')->nullable();
            $table->string('employment_type');
            $table->text('responsibilites')->nullable();
            $table->text('experience')->nullable();
            $table->text('education')->nullable();
            $table->text('benifits')->nullable();
            $table->text('apply_instruction')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
        });
    }
}
