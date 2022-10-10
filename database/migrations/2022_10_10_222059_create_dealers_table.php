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
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');

            // first_name + last_name OR/AND company
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();

            $table->string('email');
            $table->string('password');

            $table
                ->enum('subscription_type', [
                    'none',
                    'basic',
                    'extended',
                    'pro',
                ])
                ->default('none');
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
        Schema::dropIfExists('dealers');
    }
};
