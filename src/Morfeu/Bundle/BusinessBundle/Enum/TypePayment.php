<?php

namespace Morfeu\Bundle\BusinessBundle\Enum;

use Morfeu\Bundle\BusinessBundle\Enum\BaseEnum;

abstract class TypePayment extends BaseEnum
{
    const ACCOMPLISHED = 1;
    const RECEIVED = 2;
}
