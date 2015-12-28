<?php

namespace Morfeu\Bundle\BusinessBundle\Enum;

use Morfeu\Bundle\BusinessBundle\Enum\BaseEnum;

abstract class Attachment extends BaseEnum
{
    const MAX_FILE_SIZE = 2097152;
    const STATUS_ACTIVE = 1;

    static public function getFileExtension(){
        return array('png', 'jpg');
    }
}
