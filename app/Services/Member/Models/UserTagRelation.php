<?php

/*
 * This file is part of the MeEdu.
 *
 * (c) 杭州白书科技有限公司
 */

namespace App\Services\Member\Models;

use App\Constant\TableConstant;
use Illuminate\Database\Eloquent\Model;

class UserTagRelation extends Model
{
    protected $table = TableConstant::TABLE_USER_TAG;
}
