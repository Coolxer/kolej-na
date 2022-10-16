<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->increments('id');
            $table->id();

            // first_name + last_name OR/AND company
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('company', 50)->nullable();

            $table->string('email', 50);
            $table->string('password');

            $table
                ->enum('subscription_type', ['basic', 'extended', 'pro'])
                ->nullable();
            $table->timestamp('subscription_expiring')->nullable();

            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            // created_at and updated_at columns
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
        Schema::dropIfExists('users');
    }
};
