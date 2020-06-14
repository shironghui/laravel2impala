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

class TI16Column
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'values',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::I16,
            'elem' => array(
                'type' => TType::I16,
                ),
        ),
        2 => array(
            'var' => 'nulls',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int[]
     */
    public $values = null;
    /**
     * @var string
     */
    public $nulls = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['values'])) {
                $this->values = $vals['values'];
            }
            if (isset($vals['nulls'])) {
                $this->nulls = $vals['nulls'];
            }
        }
    }

    public function getName()
    {
        return 'TI16Column';
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
                    if ($ftype == TType::LST) {
                        $this->values = array();
                        $_size62 = 0;
                        $_etype65 = 0;
                        $xfer += $input->readListBegin($_etype65, $_size62);
                        for ($_i66 = 0; $_i66 < $_size62; ++$_i66) {
                            $elem67 = null;
                            $xfer += $input->readI16($elem67);
                            $this->values []= $elem67;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->nulls);
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
        $xfer += $output->writeStructBegin('TI16Column');
        if ($this->values !== null) {
            if (!is_array($this->values)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('values', TType::LST, 1);
            $output->writeListBegin(TType::I16, count($this->values));
            foreach ($this->values as $iter68) {
                $xfer += $output->writeI16($iter68);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->nulls !== null) {
            $xfer += $output->writeFieldBegin('nulls', TType::STRING, 2);
            $xfer += $output->writeString($this->nulls);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
