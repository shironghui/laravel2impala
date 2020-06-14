<?php
namespace Semir\Laravel2impala\ThriftGenerated;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Semir\Laravel2impala\Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Semir\Laravel2impala\Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class Results
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'ready',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        2 => array(
            'var' => 'columns',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        3 => array(
            'var' => 'data',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'start_row',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'has_more',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var bool
     */
    public $ready = null;
    /**
     * @var string[]
     */
    public $columns = null;
    /**
     * @var string[]
     */
    public $data = null;
    /**
     * @var int
     */
    public $start_row = null;
    /**
     * @var bool
     */
    public $has_more = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ready'])) {
                $this->ready = $vals['ready'];
            }
            if (isset($vals['columns'])) {
                $this->columns = $vals['columns'];
            }
            if (isset($vals['data'])) {
                $this->data = $vals['data'];
            }
            if (isset($vals['start_row'])) {
                $this->start_row = $vals['start_row'];
            }
            if (isset($vals['has_more'])) {
                $this->has_more = $vals['has_more'];
            }
        }
    }

    public function getName()
    {
        return 'Results';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->ready);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->columns = array();
                        $_size7 = 0;
                        $_etype10 = 0;
                        $xfer += $input->readListBegin($_etype10, $_size7);
                        for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
                            $elem12 = null;
                            $xfer += $input->readString($elem12);
                            $this->columns []= $elem12;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->data = array();
                        $_size13 = 0;
                        $_etype16 = 0;
                        $xfer += $input->readListBegin($_etype16, $_size13);
                        for ($_i17 = 0; $_i17 < $_size13; ++$_i17) {
                            $elem18 = null;
                            $xfer += $input->readString($elem18);
                            $this->data []= $elem18;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->start_row);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->has_more);
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
        $xfer += $output->writeStructBegin('Results');
        if ($this->ready !== null) {
            $xfer += $output->writeFieldBegin('ready', TType::BOOL, 1);
            $xfer += $output->writeBool($this->ready);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->columns !== null) {
            if (!is_array($this->columns)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('columns', TType::LST, 2);
            $output->writeListBegin(TType::STRING, count($this->columns));
            foreach ($this->columns as $iter19) {
                $xfer += $output->writeString($iter19);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->data !== null) {
            if (!is_array($this->data)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('data', TType::LST, 3);
            $output->writeListBegin(TType::STRING, count($this->data));
            foreach ($this->data as $iter20) {
                $xfer += $output->writeString($iter20);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->start_row !== null) {
            $xfer += $output->writeFieldBegin('start_row', TType::I64, 4);
            $xfer += $output->writeI64($this->start_row);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->has_more !== null) {
            $xfer += $output->writeFieldBegin('has_more', TType::BOOL, 5);
            $xfer += $output->writeBool($this->has_more);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
