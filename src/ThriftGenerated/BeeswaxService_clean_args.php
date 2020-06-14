<?php
namespace Semir\Laravel2impala\ThriftGenerated;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Semir\Laravel2impala\Thrift\Base\TBase;
use Semir\Laravel2impala\Thrift\Type\TType;
use Semir\Laravel2impala\Thrift\Type\TMessageType;
use Semir\Laravel2impala\Thrift\Exception\TException;
use Semir\Laravel2impala\Thrift\Exception\TProtocolException;
use Semir\Laravel2impala\Thrift\Protocol\TProtocol;
use Semir\Laravel2impala\Thrift\Protocol\TBinaryProtocolAccelerated;
use Semir\Laravel2impala\Thrift\Exception\TApplicationException;

class BeeswaxService_clean_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'log_context',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $log_context = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['log_context'])) {
                $this->log_context = $vals['log_context'];
            }
        }
    }

    public function getName()
    {
        return 'BeeswaxService_clean_args';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->log_context);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('BeeswaxService_clean_args');
        if ($this->log_context !== null) {
            $xfer += $output->writeFieldBegin('log_context', TType::STRING, 1);
            $xfer += $output->writeString($this->log_context);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
