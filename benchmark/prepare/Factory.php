<?php

namespace Benchmark\Prepare;

use Benchmark\Config;

class Factory {

    /**
     * Construct requested class
     *
     * @param \mysqli $db
     * @return \Benchmark\class
     * @throws \Exception
     */
    public static function build(\mysqli $db)
    {
        $schema = Config::${Config::$engine}['schema'];
        $table  = Config::${Config::$engine}['table'];
        $rows   = Config::$iterations;

        return new \Benchmark\Prepare\Prepare($db, $schema, $table, $rows, Config::$engine);
    }

}
