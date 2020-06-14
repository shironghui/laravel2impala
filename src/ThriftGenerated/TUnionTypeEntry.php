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

class TUnionTypeEntry
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'nameToTypePtr',
            'isRequired' => true,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::I32,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::I32,
                ),
        ),
    );

    /**
     * @var array
     */
    public $nameToTypePtr = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['nameToTypePtr'])) {
                $this->nameToTypePtr = $vals['nameToTypePtr'];
            }
        }
    }

    public function getName()
    {
        return 'TUnionTypeEntry';
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
                    if ($ftype == TType::MAP) {
                        $this->nameToTypePtr = array();
                        $_size18 = 0;
                        $_ktype19 = 0;
                        $_vtype20 = 0;
                        $xfer += $input->readMapBegin($_ktype19, $_vtype20, $_size18);
                        for ($_i22 = 0; $_i22 < $_size18; ++$_i22) {
                            $key23 = '';
                            $val24 = 0;
                            $xfer += $input->readString($key23);
                            $xfer += $input->readI32($val24);
                            $this->nameToTypePtr[$key23] = $val24;
                        }
                        $xfer += $input->readMapEnd();
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
        $xfer += $output->writeStructBegin('TUnionTypeEntry');
        if ($this->nameToTypePtr !== null) {
            if (!is_array($this->nameToTypePtr)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('nameToTypePtr', TType::MAP, 1);
            $output->writeMapBegin(TType::STRING, TType::I32, count($this->nameToTypePtr));
            foreach ($this->nameToTypePtr as $kiter25 => $viter26) {
                $xfer += $output->writeString($kiter25);
                $xfer += $output->writeI32($viter26);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
