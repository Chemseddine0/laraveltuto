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
        //Relationships

        // -one to one 1-1
        // -one to Many 1-N
        // -one to Many inversed /belongs to
        //  -Many to Many  N-N

        Schema::table('publications', function (Blueprint $table) {
         $table->unsignedBigInteger('profile_id');
         $table->foreign('profile_id')->references('id')->on('profiles')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('profile_id');
        });
    }
};
