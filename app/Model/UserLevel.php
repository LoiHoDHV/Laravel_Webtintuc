<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_level';

    protected $primaryKey = 'id';
    
}
