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

class TColumnDesc
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'columnName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'typeDesc',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TTypeDesc',
        ),
        3 => array(
            'var' => 'position',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'comment',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $columnName = null;
    /**
     * @var \ThriftGenerated\TTypeDesc
     */
    public $typeDesc = null;
    /**
     * @var int
     */
    public $position = null;
    /**
     * @var string
     */
    public $comment = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['columnName'])) {
                $this->columnName = $vals['columnName'];
            }
            if (isset($vals['typeDesc'])) {
                $this->typeDesc = $vals['typeDesc'];
            }
            if (isset($vals['position'])) {
                $this->position = $vals['position'];
            }
            if (isset($vals['comment'])) {
                $this->comment = $vals['comment'];
            }
        }
    }

    public function getName()
    {
        return 'TColumnDesc';
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
                        $xfer += $input->readString($this->columnName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->typeDesc = new \ThriftGenerated\TTypeDesc();
                        $xfer += $this->typeDesc->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->position);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->comment);
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
        $xfer += $output->writeStructBegin('TColumnDesc');
        if ($this->columnName !== null) {
            $xfer += $output->writeFieldBegin('columnName', TType::STRING, 1);
            $xfer += $output->writeString($this->columnName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->typeDesc !== null) {
            if (!is_object($this->typeDesc)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('typeDesc', TType::STRUCT, 2);
            $xfer += $this->typeDesc->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->position !== null) {
            $xfer += $output->writeFieldBegin('position', TType::I32, 3);
            $xfer += $output->writeI32($this->position);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->comment !== null) {
            $xfer += $output->writeFieldBegin('comment', TType::STRING, 4);
            $xfer += $output->writeString($this->comment);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
