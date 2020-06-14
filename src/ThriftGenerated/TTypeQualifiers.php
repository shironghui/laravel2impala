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

class TTypeQualifiers
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'qualifiers',
            'isRequired' => true,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRUCT,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRUCT,
                'class' => '\ThriftGenerated\TTypeQualifierValue',
                ),
        ),
    );

    /**
     * @var array
     */
    public $qualifiers = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['qualifiers'])) {
                $this->qualifiers = $vals['qualifiers'];
            }
        }
    }

    public function getName()
    {
        return 'TTypeQualifiers';
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
                        $this->qualifiers = array();
                        $_size0 = 0;
                        $_ktype1 = 0;
                        $_vtype2 = 0;
                        $xfer += $input->readMapBegin($_ktype1, $_vtype2, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $key5 = '';
                            $val6 = new \ThriftGenerated\TTypeQualifierValue();
                            $xfer += $input->readString($key5);
                            $val6 = new \ThriftGenerated\TTypeQualifierValue();
                            $xfer += $val6->read($input);
                            $this->qualifiers[$key5] = $val6;
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
        $xfer += $output->writeStructBegin('TTypeQualifiers');
        if ($this->qualifiers !== null) {
            if (!is_array($this->qualifiers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('qualifiers', TType::MAP, 1);
            $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->qualifiers));
            foreach ($this->qualifiers as $kiter7 => $viter8) {
                $xfer += $output->writeString($kiter7);
                $xfer += $viter8->write($output);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}