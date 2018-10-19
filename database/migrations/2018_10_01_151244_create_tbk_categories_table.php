<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1).
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateTbkCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbk_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name', 191)->nullable();
            $table->string('logo', 191)->nullable();
            $table->string('taobao', 100)->nullable();
            $table->string('jingdong', 100)->nullable();
            $table->string('pinduoduo', 100)->nullable();
            $table->integer('sort')->nullable()->default(100);
            $table->tinyInteger('type')->nullable(); // 1淘宝 2京东 3拼多多
            $table->tinyInteger('status')->nullable()->default(1);
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbk_categories');
    }
}
