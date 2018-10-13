<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1).
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('inviter_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('oldgroup_id')->nullable();
            $table->string('wx_unionid', 191)->nullable();
            $table->string('wx_openid1', 191)->nullable();
            $table->string('wx_openid2', 191)->nullable();
            $table->string('ali_unionid', 191)->nullable();
            $table->string('ali_openid1', 191)->nullable();
            $table->string('ali_openid2', 191)->nullable();
            $table->string('nickname', 191)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('headimgurl', 191)->nullable();
            $table->tinyInteger('isagent')->nullable()->default(0);
            $table->decimal('credit1', 8, 2)->nullable()->default(0.00);
            $table->decimal('credit2', 8, 2)->nullable()->default(0.00);
            $table->decimal('credit3', 8, 2)->nullable()->default(0.00);
            $table->integer('level_id')->nullable();
            $table->string('realname', 191)->nullable();
            $table->string('alipay', 191)->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamp('agent_time')->nullable();
            $table->nullableTimestamps();
            $table->softDeletes();

            $table->unique('wx_unionid', 'members_wx_unionid_unique');
            $table->unique('wx_openid1', 'members_wx_openid1_unique');
            $table->unique('wx_openid2', 'members_wx_openid2_unique');
            $table->unique('ali_unionid', 'members_ali_unionid_unique');
            $table->unique('ali_openid1', 'members_ali_openid1_unique');
            $table->unique('ali_openid2', 'members_ali_openid2_unique');
            $table->unique('phone', 'members_phone_unique');
            $table->index('user_id', 'members_user_id_index');
            $table->index('inviter_id', 'members_inviter_id_index');
            $table->index('group_id', 'members_group_id_index');
            $table->index('oldgroup_id', 'members_oldgroup_id_index');
            $table->index('wx_unionid', 'members_wx_unionid_index');
            $table->index('wx_openid1', 'members_wx_openid1_index');
            $table->index('wx_openid2', 'members_wx_openid2_index');
            $table->index('ali_unionid', 'members_ali_unionid_index');
            $table->index('ali_openid1', 'members_ali_openid1_index');
            $table->index('ali_openid2', 'members_ali_openid2_index');
            $table->index('nickname', 'members_nickname_index');
            $table->index('level_id', 'members_level_id_index');
            $table->index('phone', 'members_phone_index');
            $table->index('status', 'members_status_index');
            $table->index('created_at', 'members_created_at_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
