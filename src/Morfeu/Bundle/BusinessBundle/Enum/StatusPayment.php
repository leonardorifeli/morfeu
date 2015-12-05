<?php

namespace Morfeu\Bundle\BusinessBundle\Enum;

use Morfeu\Bundle\BusinessBundle\Enum\BaseEnum;

abstract class StatusPayment extends BaseEnum
{

    const FINISHED = 1;
    const DELETED = 0;
    const PENDING = 2;
    const PAID = 1;
    const NOT_PAID = 2;

}
