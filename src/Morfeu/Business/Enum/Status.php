<?php

namespace MorfeuApi\Business\Enum;

use MorfeuApi\Business\Enum\BaseEnum;

abstract class Status extends BaseEnum {
    const __default = self::ACTIVE;

    const ACTIVE = 1;
    const INACTIVE = 0;
}
