<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Queue;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //$table->increments('id');
            $table->id();
            $table->foreignIdFor(Queue::class);

            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone', 9);

            $table->string('identify', 6)->unique();
            $table
                ->enum('status', ['waiting', 'in progress', 'done'])
                ->default('waiting');

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
        Schema::dropIfExists('customers');
    }
};
