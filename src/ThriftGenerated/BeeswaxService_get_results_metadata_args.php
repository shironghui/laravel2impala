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

class BeeswaxService_get_results_metadata_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'handle',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\QueryHandle',
        ),
    );

    /**
     * @var \ThriftGenerated\QueryHandle
     */
    public $handle = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['handle'])) {
                $this->handle = $vals['handle'];
            }
        }
    }

    public function getName()
    {
        return 'BeeswaxService_get_results_metadata_args';
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
                    if ($ftype == TType::STRUCT) {
                        $this->handle = new \ThriftGenerated\QueryHandle();
                        $xfer += $this->handle->read($input);
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
        $xfer += $output->writeStructBegin('BeeswaxService_get_results_metadata_args');
        if ($this->handle !== null) {
            if (!is_object($this->handle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('handle', TType::STRUCT, 1);
            $xfer += $this->handle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
