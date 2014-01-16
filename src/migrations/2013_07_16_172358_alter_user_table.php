<?php

use Illuminate\Database\Migrations\Migration;

class AlterUserTable extends Migration 
{

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('username')->nullable()->after('email');
            $table->string('family_key', 5)->after('email');
            $table->unique('username', 'family_key');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        //
    }

}