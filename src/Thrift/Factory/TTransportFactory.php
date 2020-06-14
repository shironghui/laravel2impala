<?php

namespace Semir\Laravel2impala\Thrift\Factory;

use Semir\Laravel2impala\Thrift\Transport\TTransport;

class TTransportFactory
{
    /**
     * @static
     * @param TTransport $transport
     * @return TTransport
     */
    public static function getTransport(TTransport $transport)
    {
        return $transport;
    }
}
