<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNiveauIdStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Students', function (Blueprint $table) {
            $table->UnsignedInteger('niveau_id')->nullable();
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');
            $table->string('niveau_name');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Students', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('niveau_id');
            $table->dropColumn('niveau_id');
        });
    }
}
