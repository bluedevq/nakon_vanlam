<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\UserAuthenticate;
use App\Model\Base\Traits\CustomBuilder;

/**
 * Class User
 * @package App\Model\Entities
 */
class User extends UserAuthenticate
{
    use CustomBuilder;

    protected $table = 'users';

    protected $fillable = [];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
