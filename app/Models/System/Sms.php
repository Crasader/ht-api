<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Sms.
 */
class Sms extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'sms';

    /**
     * @var array
     */
    protected $guarded = [];

    protected $hidden = [
        'user_id',
    ];

    /**
     * 字段映射.
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }

    /**
     * 后台用户.
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User\User', 'user_id')->withDefault(null);
    }

    /**
     * 后台用户.
     * @return mixed
     */
    public function member()
    {
        return $this->belongsTo('App\Models\Member\Member', 'member_id')->withDefault(null);
    }
}
