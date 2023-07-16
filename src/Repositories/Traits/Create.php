<?php declare(strict_types=1);

namespace Yormy\Repository\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

trait Create
{
    public function create(array $attributes): Model
    {
        $this->model = $this->model->create($attributes);
        return $this->model;
    }

    public function firstOrCreate(array $attributes): Model
    {
        $this->model = $this->model->firstOrCreate($attributes);
        return $this->model;
    }

    public function fill(array $attributes)
    {
        return $this->model->fill($attributes);
    }
}
