<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id('id')->unique();
            // $table->primary('id');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_number');
            $table->string('address')->nullable();
            $table->string('ref_code')->nullable();
            // $table->timestamp('updated_at')->nullable();;
            // $table->timestamp('created_at')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
