<?php

namespace FINDOLOGIC\Export\Helpers;

class EmptyValueNotAllowedException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Empty values are not allowed!');
    }
}

class DataHelper
{
    /**
     * Checks if the provided value is empty.
     *
     * @param string $value The value to check.
     * @throws EmptyValueNotAllowedException If the value is empty.
     * @return string Returns the value if not empty.
     */
    public static function emptyValueCheck($value)
    {
        if (empty($value = trim($value))) throw new EmptyValueNotAllowedException();

        return $value;
    }
}