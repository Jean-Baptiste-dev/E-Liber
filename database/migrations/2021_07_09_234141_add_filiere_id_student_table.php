<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiliereIdStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Students', function (Blueprint $table) {
            $table->UnsignedInteger('filiere_id')->nullable();
            $table->foreign('filiere_id')->references('id')->on('filieres')->onDelete('cascade');
            $table->string('filiere_name');

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
            $table->dropForeign('filiere_id');
            $table->dropColumn('filiere_id');
        });
    }
}
