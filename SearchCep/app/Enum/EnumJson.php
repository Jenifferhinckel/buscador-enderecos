<?php

namespace App\Enum;

abstract class EnumJson extends Enum
{
    /**
     * Define result error
     */
    const STATUS_ERROR = 'error';

    /**
     * Define response success
     */
    const STATUS_SUCCESS = 'success';

    /**
     * Define field status in result
     */
    const FIELD_STATUS = 'status';

    /**
     * Define field message in result
     */
    const FIELD_MESSAGE = 'message';

    /**
     * Define field data in result
     */
    const FIELD_DATA = 'data';
}
