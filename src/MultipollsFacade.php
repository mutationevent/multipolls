<?php


namespace Mutationevent\Multipolls;

use Illuminate\Support\Facades\Facade;
use Mutationevent\Multipolls\Helpers\MultiPoll;

class MultipollsFacade extends  Facade
{
    protected static function getFacadeAccessor()
    {
        return MultiPoll::class;
    }
}