<?php

declare(strict_types=1);

namespace Yormy\Repository;

use Illuminate\Support\Facades\Facade;

class RepositoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Repository::class;
    }
}
