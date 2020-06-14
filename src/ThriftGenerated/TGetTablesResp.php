<?php
namespace Semir\Laravel2impala\ThriftGenerated;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class TGetTablesResp
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'status',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TStatus',
        ),
        2 => array(
            'var' => 'operationHandle',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TOperationHandle',
        ),
    );

    /**
     * @var \ThriftGenerated\TStatus
     */
    public $status = null;
    /**
     * @var \ThriftGenerated\TOperationHandle
     */
    public $operationHandle = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['status'])) {
                $this->status = $vals['status'];
            }
            if (isset($vals['operationHandle'])) {
                $this->operationHandle = $vals['operationHandle'];
            }
        }
    }

    public function getName()
    {
        return 'TGetTablesResp';
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
                        $this->status = new \ThriftGenerated\TStatus();
                        $xfer += $this->status->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->operationHandle = new \ThriftGenerated\TOperationHandle();
                        $xfer += $this->operationHandle->read($input);
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
        $xfer += $output->writeStructBegin('TGetTablesResp');
        if ($this->status !== null) {
            if (!is_object($this->status)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('status', TType::STRUCT, 1);
            $xfer += $this->status->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->operationHandle !== null) {
            if (!is_object($this->operationHandle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 2);
            $xfer += $this->operationHandle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
