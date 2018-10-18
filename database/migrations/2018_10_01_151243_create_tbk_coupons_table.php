<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1).
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateTbkCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbk_coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 190)->nullable();  //标题
            $table->integer('cat')->nullable();  //本地分类ID
            $table->tinyInteger('shop_type')->nullable();  //类型 1淘宝  2天猫  ,京东拼多多默认为1
            $table->string('pic_url', 190)->nullable(); //主题地址
            $table->string('item_id', 30)->nullable(); //产品ID
            $table->string('item_url', 191)->nullable();  //产品地址
            $table->integer('volume')->nullable();  //销量
            $table->decimal('price', 9, 2)->nullable(); //原价
            $table->decimal('final_price', 9, 2)->nullable(); //最终价
            $table->decimal('coupon_price', 9, 2)->nullable();  //优惠券金额
            $table->string('coupon_link', 191)->nullable(); //领券地址（淘宝不需要)
            $table->string('activity_id', 190)->nullable(); //优惠券ID
            $table->string('commission_rate', 11)->nullable(); //佣金比例
            $table->string('introduce', 190)->nullable(); //介绍
            $table->integer('total_num')->nullable();  // 优惠券总数
            $table->integer('receive_num')->nullable();  // 领取数量
            $table->string('tag', 50)->nullable(); //标识(主要淘宝用，total、top100等)
            $table->tinyInteger('is_recommend')->default(0); //是否首页推荐显示
            $table->integer('sort')->default(0); //排序
            $table->string('videoid',191)->default(0); //商品视频ID（id大于0的为有视频单，视频拼接地址  http://cloud.video.taobao.com/play/u/1/p/1/e/6/t/1/+videoid+.mp4）
            $table->tinyInteger('activity_type')->nullable();// 活动类型：1普通活动 2聚划算 3淘抢购
            $table->tinyInteger('type')->nullable(); // 1淘宝 2京东 3拼多多
            $table->tinyInteger('status')->nullable(); // 1 显示 0不显示(爬取存到数据库的为0)
            $table->timestamp('start_time')->nullable(); //优惠开始时间
            $table->timestamp('end_time')->nullable(); //优惠结束时间
            $table->timestamp('starttime')->nullable(); //活动开始时间
            $table->timestamp('endtime')->nullable(); //活动结束时间
            $table->nullableTimestamps();

            $table->index('item_id');
            $table->index('type');
            $table->index('title');
            $table->index('cat');
            $table->index('introduce');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbk_coupons');
    }
}
