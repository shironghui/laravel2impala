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

class Query
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'query',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'configuration',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        4 => array(
            'var' => 'hadoop_user',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $query = null;
    /**
     * @var string[]
     */
    public $configuration = null;
    /**
     * @var string
     */
    public $hadoop_user = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['query'])) {
                $this->query = $vals['query'];
            }
            if (isset($vals['configuration'])) {
                $this->configuration = $vals['configuration'];
            }
            if (isset($vals['hadoop_user'])) {
                $this->hadoop_user = $vals['hadoop_user'];
            }
        }
    }

    public function getName()
    {
        return 'Query';
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
                        $xfer += $input->readString($this->query);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->configuration = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $xfer += $input->readString($elem5);
                            $this->configuration []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->hadoop_user);
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
        $xfer += $output->writeStructBegin('Query');
        if ($this->query !== null) {
            $xfer += $output->writeFieldBegin('query', TType::STRING, 1);
            $xfer += $output->writeString($this->query);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->configuration !== null) {
            if (!is_array($this->configuration)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('configuration', TType::LST, 3);
            $output->writeListBegin(TType::STRING, count($this->configuration));
            foreach ($this->configuration as $iter6) {
                $xfer += $output->writeString($iter6);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->hadoop_user !== null) {
            $xfer += $output->writeFieldBegin('hadoop_user', TType::STRING, 4);
            $xfer += $output->writeString($this->hadoop_user);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
