<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ak_banners', function (Blueprint $table) {
            $table->id();
            
            $table->string('name', 255);
            $table->string('slug', 255);

            $table->json('items')->nullable();

            $table->boolean('is_active')->default(1);
            
            // $table->text('desc', 255)->nullable();
            // $table->string('short_desc', 255)->nullable();
            // $table->string('link', 255)->nullable();
            
            // $table->integer('parent_id')->default(0)->nullable();
            // $table->integer('lft')->default(0)->nullable();
            // $table->integer('rgt')->default(0)->nullable();
            // $table->integer('depth')->default(0)->nullable();

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
        Schema::dropIfExists('ak_banners');
    }
}
