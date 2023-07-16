<?php

namespace Yormy\Repository\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }
}
