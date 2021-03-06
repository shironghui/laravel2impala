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

class BeeswaxServiceClient implements BeeswaxServiceIf
{
    protected $input_ = null;
    protected $output_ = null;

    protected $seqid_ = 0;

    public function __construct($input, $output = null)
    {
        $this->input_ = $input;
        $this->output_ = $output ? $output : $input;
    }


    public function query(Query $query)
    {
        $this->send_query($query);
        return $this->recv_query();
    }

    public function send_query(Query $query)
    {
        $args = new BeeswaxService_query_args();
        $args->query = $query;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'query',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('query', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_query()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_query_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_query_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        throw new \Exception("query failed: unknown result");
    }

    public function executeAndWait(Query $query, $clientCtx)
    {
        $this->send_executeAndWait($query, $clientCtx);
        return $this->recv_executeAndWait();
    }

    public function send_executeAndWait(Query $query, $clientCtx)
    {
        $args = new BeeswaxService_executeAndWait_args();
        $args->query = $query;
        $args->clientCtx = $clientCtx;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'executeAndWait',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('executeAndWait', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_executeAndWait()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\ThriftGenerated\BeeswaxService_executeAndWait_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_executeAndWait_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        throw new \Exception("executeAndWait failed: unknown result");
    }

    public function explain(Query $query)
    {
        $this->send_explain($query);
        return $this->recv_explain();
    }

    public function send_explain(Query $query)
    {
        $args = new BeeswaxService_explain_args();
        $args->query = $query;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'explain',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('explain', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_explain()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_explain_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_explain_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        throw new \Exception("explain failed: unknown result");
    }

    public function fetch(QueryHandle $query_id, $start_over, $fetch_size)
    {
        $this->send_fetch($query_id, $start_over, $fetch_size);
        return $this->recv_fetch();
    }

    public function send_fetch(QueryHandle $query_id, $start_over, $fetch_size)
    {
        $args = new BeeswaxService_fetch_args();
        $args->query_id = $query_id;
        $args->start_over = $start_over;
        $args->fetch_size = $fetch_size;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'fetch',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('fetch', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_fetch()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_fetch_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_fetch_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        if ($result->error2 !== null) {
            throw $result->error2;
        }
        throw new \Exception("fetch failed: unknown result");
    }

    public function get_state(QueryHandle $handle)
    {
        $this->send_get_state($handle);
        return $this->recv_get_state();
    }

    public function send_get_state(QueryHandle $handle)
    {
        $args = new BeeswaxService_get_state_args();
        $args->handle = $handle;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'get_state',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('get_state', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_get_state()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_get_state_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_get_state_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        throw new \Exception("get_state failed: unknown result");
    }

    public function get_results_metadata(QueryHandle $handle)
    {
        $this->send_get_results_metadata($handle);
        return $this->recv_get_results_metadata();
    }

    public function send_get_results_metadata(QueryHandle $handle)
    {
        $args = new BeeswaxService_get_results_metadata_args();
        $args->handle = $handle;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'get_results_metadata',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('get_results_metadata', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_get_results_metadata()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_get_results_metadata_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_get_results_metadata_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        throw new \Exception("get_results_metadata failed: unknown result");
    }

    public function echo($s)
    {
        $this->send_echo($s);
        return $this->recv_echo();
    }

    public function send_echo($s)
    {
        $args = new BeeswaxService_echo_args();
        $args->s = $s;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'echo',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('echo', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_echo()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_echo_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_echo_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("echo failed: unknown result");
    }

    public function dump_config()
    {
        $this->send_dump_config();
        return $this->recv_dump_config();
    }

    public function send_dump_config()
    {
        $args = new BeeswaxService_dump_config_args();
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'dump_config',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('dump_config', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_dump_config()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_dump_config_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_dump_config_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("dump_config failed: unknown result");
    }

    public function get_log($context)
    {
        $this->send_get_log($context);
        return $this->recv_get_log();
    }

    public function send_get_log($context)
    {
        $args = new BeeswaxService_get_log_args();
        $args->context = $context;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'get_log',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('get_log', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_get_log()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_get_log_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_get_log_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        throw new \Exception("get_log failed: unknown result");
    }

    public function get_default_configuration($include_hadoop)
    {
        $this->send_get_default_configuration($include_hadoop);
        return $this->recv_get_default_configuration();
    }

    public function send_get_default_configuration($include_hadoop)
    {
        $args = new BeeswaxService_get_default_configuration_args();
        $args->include_hadoop = $include_hadoop;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'get_default_configuration',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('get_default_configuration', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_get_default_configuration()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_get_default_configuration_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_get_default_configuration_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("get_default_configuration failed: unknown result");
    }

    public function close(QueryHandle $handle)
    {
        $this->send_close($handle);
        $this->recv_close();
    }

    public function send_close(QueryHandle $handle)
    {
        $args = new BeeswaxService_close_args();
        $args->handle = $handle;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'close',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('close', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_close()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_close_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_close_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->error !== null) {
            throw $result->error;
        }
        if ($result->error2 !== null) {
            throw $result->error2;
        }
        return;
    }

    public function clean($log_context)
    {
        $this->send_clean($log_context);
        $this->recv_clean();
    }

    public function send_clean($log_context)
    {
        $args = new BeeswaxService_clean_args();
        $args->log_context = $log_context;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'clean',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('clean', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_clean()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Semir\Laravel2impala\ThriftGenerated\BeeswaxService_clean_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new BeeswaxService_clean_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        return;
    }
}
