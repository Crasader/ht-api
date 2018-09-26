<?php

namespace App\Repositories\Member;

use App\Criteria\RequestCriteria;
use App\Models\Member\Withdraw;
use App\Validators\Member\WithdrawValidator;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Member\WithdrawRepository;

/**
 * Class WithdrawRepositoryEloquent.
 */
class WithdrawRepositoryEloquent extends BaseRepository implements WithdrawRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'out_trade_no' => 'like',
        'member_id',
        'status',
        'created_at',
    ];

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return Withdraw::class;
    }

    /**
     * Specify Validator class name.
     *
     * @return mixed
     */
    public function validator()
    {
        return WithdrawValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria.
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @return string
     */
    public function presenter()
    {
        return 'Prettus\\Repository\\Presenter\\ModelFractalPresenter';
    }
}