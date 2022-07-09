<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresmaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presma_users', function (Blueprint $table) {
            $table->foreignId('presma_id')->constrained('presma')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            // $table->timestamps();
            // $table->primary('presma_id', 'user_id');
            // $table->primary(['presma_id', 'user_id']);
            // $table->timestamps();


            // $table->foreign('presma_id')->references('id')->on('presma')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presma_users');
    }
}
