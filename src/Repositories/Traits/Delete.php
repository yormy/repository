<?php declare(strict_types=1);

namespace Yormy\Repository\Repositories\Traits;

trait Delete
{
    public function delete(int $id): bool
    {
        $model = $this->model->find($id);
        return (bool)$model->delete();
    }

    public function deleteByXid(string $xid): bool
    {
        // first GET the model, then call delete, otherwise the delete event is never fired
        // and cache is not invalidated
        $model = $this->model->where('xid', $xid)->first();
        return (bool)$model->delete();
    }
}
