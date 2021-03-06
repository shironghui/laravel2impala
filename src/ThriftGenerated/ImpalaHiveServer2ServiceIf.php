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

interface ImpalaHiveServer2ServiceIf extends \ThriftGenerated\TCLIServiceIf
{
    /**
     * @param \ThriftGenerated\TGetExecSummaryReq $req
     * @return \ThriftGenerated\TGetExecSummaryResp
     */
    public function GetExecSummary(\ThriftGenerated\TGetExecSummaryReq $req);
    /**
     * @param \ThriftGenerated\TGetRuntimeProfileReq $req
     * @return \ThriftGenerated\TGetRuntimeProfileResp
     */
    public function GetRuntimeProfile(\ThriftGenerated\TGetRuntimeProfileReq $req);
}
