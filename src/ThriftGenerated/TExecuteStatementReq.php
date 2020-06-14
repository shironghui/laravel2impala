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

class TExecuteStatementReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'sessionHandle',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\TSessionHandle',
        ),
        2 => array(
            'var' => 'statement',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'confOverlay',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'runAsync',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var \ThriftGenerated\TSessionHandle
     */
    public $sessionHandle = null;
    /**
     * @var string
     */
    public $statement = null;
    /**
     * @var array
     */
    public $confOverlay = null;
    /**
     * @var bool
     */
    public $runAsync = false;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['sessionHandle'])) {
                $this->sessionHandle = $vals['sessionHandle'];
            }
            if (isset($vals['statement'])) {
                $this->statement = $vals['statement'];
            }
            if (isset($vals['confOverlay'])) {
                $this->confOverlay = $vals['confOverlay'];
            }
            if (isset($vals['runAsync'])) {
                $this->runAsync = $vals['runAsync'];
            }
        }
    }

    public function getName()
    {
        return 'TExecuteStatementReq';
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
                        $this->sessionHandle = new \ThriftGenerated\TSessionHandle();
                        $xfer += $this->sessionHandle->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->statement);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::MAP) {
                        $this->confOverlay = array();
                        $_size143 = 0;
                        $_ktype144 = 0;
                        $_vtype145 = 0;
                        $xfer += $input->readMapBegin($_ktype144, $_vtype145, $_size143);
                        for ($_i147 = 0; $_i147 < $_size143; ++$_i147) {
                            $key148 = '';
                            $val149 = '';
                            $xfer += $input->readString($key148);
                            $xfer += $input->readString($val149);
                            $this->confOverlay[$key148] = $val149;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->runAsync);
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
        $xfer += $output->writeStructBegin('TExecuteStatementReq');
        if ($this->sessionHandle !== null) {
            if (!is_object($this->sessionHandle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('sessionHandle', TType::STRUCT, 1);
            $xfer += $this->sessionHandle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statement !== null) {
            $xfer += $output->writeFieldBegin('statement', TType::STRING, 2);
            $xfer += $output->writeString($this->statement);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->confOverlay !== null) {
            if (!is_array($this->confOverlay)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('confOverlay', TType::MAP, 3);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->confOverlay));
            foreach ($this->confOverlay as $kiter150 => $viter151) {
                $xfer += $output->writeString($kiter150);
                $xfer += $output->writeString($viter151);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->runAsync !== null) {
            $xfer += $output->writeFieldBegin('runAsync', TType::BOOL, 4);
            $xfer += $output->writeBool($this->runAsync);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
