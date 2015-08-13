<?php

namespace Morfeu\Business\Enum;

use Morfeu\Business\Enum\BaseEnum;

abstract class Status extends BaseEnum {
    const __default = self::ACTIVE;

    const ACTIVE = 1;
    const INACTIVE = 0;
}
