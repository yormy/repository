<?php

declare(strict_types=1);

namespace Yormy\Repository\Repositories\Traits;

trait Update
{
    public function update(array $attributes, int $id): bool
    {
        return $this->find($id)->update($attributes);
    }
}
