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
        Schema::create('post', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            //$table->charset = 'utf8mb4';
            //$table->collation = 'utf8mb4_unicode_ci';
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->date('created_at')->useCurrent();
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
};
