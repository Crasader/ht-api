<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1).
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name', 50)->nullable(); //小组名
            $table->string('qrcode', 191)->nullable(); //组长微信二维码
            $table->string('qq')->nullable(); //组长QQ
            $table->string('wechat')->nullable(); //组长微信
            $table->text('description')->nullable(); //小组描述
            $table->tinyInteger('status')->nullable()->default(1); //小组状态 1正常 0禁用
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
        Schema::dropIfExists('groups');
    }
}
