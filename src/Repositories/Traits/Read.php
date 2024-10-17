<?php

declare(strict_types=1);

namespace Yormy\Repository\Repositories\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait Read
{
    public function all(array $columns = ['*'], ?string $orderBy = null, string $sortBy = 'asc'): Collection
    {
        if (! $orderBy) {
            $orderBy = $this->model->getTable().'.id';
        }

        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function findByEmail(string $email): ?Model
    {
        return $this->model->whereEncrypted('email', $email)->first();
    }

    public function findOneByXid(string $xid): ?Model
    {
        return $this->model->where('xid', $xid)->first();
    }

    public function findOneByXidOrFail(string $xid): Model
    {
        return $this->model->where('xid', $xid)->firstOrFail();
    }

    public function findOneOrFail(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function findBy(array $data): Collection
    {
        return $this->model->where($data)->get();
    }

    public function findEncrypted($columnName, $value): ?Model
    {
        return $this->model->whereEncrypted($columnName, $value)->get();
    }

    public function findAllEncrypted($columnName, $value): ?Collection
    {
        return $this->model->whereEncrypted($columnName, $value)->get();
    }

    public function findOneBy(array $data): ?Model
    {
        return $this->model->where($data)->first();
    }

    public function findOneByOrFail(array $data): ?Model
    {
        return $this->model->where($data)->firstOrFail();
    }

    public function findWhereIn(string $column, array $values): ?Model
    {
        return $this->model->whereIn($column, $values)->get();
    }

    public function getActive(): Collection
    {
        return $this->model->where('is_active', 1)->get();
    }

    public function count(): int
    {
        return $this->model->count();
    }
}
