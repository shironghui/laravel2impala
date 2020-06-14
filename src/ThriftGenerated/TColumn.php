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

class TColumn
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'boolVal',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TBoolColumn',
        ),
        2 => array(
            'var' => 'byteVal',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TByteColumn',
        ),
        3 => array(
            'var' => 'i16Val',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TI16Column',
        ),
        4 => array(
            'var' => 'i32Val',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TI32Column',
        ),
        5 => array(
            'var' => 'i64Val',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TI64Column',
        ),
        6 => array(
            'var' => 'doubleVal',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TDoubleColumn',
        ),
        7 => array(
            'var' => 'stringVal',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TStringColumn',
        ),
        8 => array(
            'var' => 'binaryVal',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TBinaryColumn',
        ),
    );

    /**
     * @var \ThriftGenerated\TBoolColumn
     */
    public $boolVal = null;
    /**
     * @var \ThriftGenerated\TByteColumn
     */
    public $byteVal = null;
    /**
     * @var \ThriftGenerated\TI16Column
     */
    public $i16Val = null;
    /**
     * @var \ThriftGenerated\TI32Column
     */
    public $i32Val = null;
    /**
     * @var \ThriftGenerated\TI64Column
     */
    public $i64Val = null;
    /**
     * @var \ThriftGenerated\TDoubleColumn
     */
    public $doubleVal = null;
    /**
     * @var \ThriftGenerated\TStringColumn
     */
    public $stringVal = null;
    /**
     * @var \ThriftGenerated\TBinaryColumn
     */
    public $binaryVal = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['boolVal'])) {
                $this->boolVal = $vals['boolVal'];
            }
            if (isset($vals['byteVal'])) {
                $this->byteVal = $vals['byteVal'];
            }
            if (isset($vals['i16Val'])) {
                $this->i16Val = $vals['i16Val'];
            }
            if (isset($vals['i32Val'])) {
                $this->i32Val = $vals['i32Val'];
            }
            if (isset($vals['i64Val'])) {
                $this->i64Val = $vals['i64Val'];
            }
            if (isset($vals['doubleVal'])) {
                $this->doubleVal = $vals['doubleVal'];
            }
            if (isset($vals['stringVal'])) {
                $this->stringVal = $vals['stringVal'];
            }
            if (isset($vals['binaryVal'])) {
                $this->binaryVal = $vals['binaryVal'];
            }
        }
    }

    public function getName()
    {
        return 'TColumn';
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
                        $this->boolVal = new \ThriftGenerated\TBoolColumn();
                        $xfer += $this->boolVal->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->byteVal = new \ThriftGenerated\TByteColumn();
                        $xfer += $this->byteVal->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->i16Val = new \ThriftGenerated\TI16Column();
                        $xfer += $this->i16Val->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->i32Val = new \ThriftGenerated\TI32Column();
                        $xfer += $this->i32Val->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->i64Val = new \ThriftGenerated\TI64Column();
                        $xfer += $this->i64Val->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRUCT) {
                        $this->doubleVal = new \ThriftGenerated\TDoubleColumn();
                        $xfer += $this->doubleVal->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRUCT) {
                        $this->stringVal = new \ThriftGenerated\TStringColumn();
                        $xfer += $this->stringVal->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRUCT) {
                        $this->binaryVal = new \ThriftGenerated\TBinaryColumn();
                        $xfer += $this->binaryVal->read($input);
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
        $xfer += $output->writeStructBegin('TColumn');
        if ($this->boolVal !== null) {
            if (!is_object($this->boolVal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('boolVal', TType::STRUCT, 1);
            $xfer += $this->boolVal->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->byteVal !== null) {
            if (!is_object($this->byteVal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('byteVal', TType::STRUCT, 2);
            $xfer += $this->byteVal->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->i16Val !== null) {
            if (!is_object($this->i16Val)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('i16Val', TType::STRUCT, 3);
            $xfer += $this->i16Val->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->i32Val !== null) {
            if (!is_object($this->i32Val)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('i32Val', TType::STRUCT, 4);
            $xfer += $this->i32Val->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->i64Val !== null) {
            if (!is_object($this->i64Val)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('i64Val', TType::STRUCT, 5);
            $xfer += $this->i64Val->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->doubleVal !== null) {
            if (!is_object($this->doubleVal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('doubleVal', TType::STRUCT, 6);
            $xfer += $this->doubleVal->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->stringVal !== null) {
            if (!is_object($this->stringVal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('stringVal', TType::STRUCT, 7);
            $xfer += $this->stringVal->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->binaryVal !== null) {
            if (!is_object($this->binaryVal)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('binaryVal', TType::STRUCT, 8);
            $xfer += $this->binaryVal->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
