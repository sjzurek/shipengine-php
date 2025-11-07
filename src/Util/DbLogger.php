<?php declare(strict_types=1);

namespace ShipEngine\Util;

final class DbLogger
{
    public static function log(array $values): bool
    {
        return true;
        return (bool) \pg_insert(
            \pg_connect($_ENV['PG_LOGS']            ),
            'psr7s_logs',
            $values
        );
    }
}
