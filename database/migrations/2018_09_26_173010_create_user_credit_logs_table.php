<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1).
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateUserCreditLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_credit_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('operater_id')->nullable();
            $table->decimal('credit', 8, 2)->nullable()->default(0.00);
            $table->string('column')->nullable();
            $table->tinyInteger('type')->comment('11订单返余额 12提现 13手动增加余额 14手动减少余额 15积分兑换余额增加 21订单返积分 22消耗积分增加余额 23签到赠送 16续费 17推荐收益');
            $table->string('remark', 191)->nullable();
            $table->nullableTimestamps();

            $table->index('type', 'user_credit_logs_type_index');
            $table->index('user_id', 'user_credit_logs_user_id_index');
            $table->index('operater_id', 'user_credit_logs_operater_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_credit_logs');
    }
}
