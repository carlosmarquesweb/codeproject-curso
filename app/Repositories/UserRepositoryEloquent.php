<?php

namespace CodeProject\Repositories;

use CodeProject\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserInterface
{

    public function model()
    {
        return User::class;
    }

}