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

final class TImpalaQueryOptions
{
    const ABORT_ON_ERROR = 0;

    const MAX_ERRORS = 1;

    const DISABLE_CODEGEN = 2;

    const BATCH_SIZE = 3;

    const MEM_LIMIT = 4;

    const NUM_NODES = 5;

    const MAX_SCAN_RANGE_LENGTH = 6;

    const MAX_IO_BUFFERS = 7;

    const NUM_SCANNER_THREADS = 8;

    const ALLOW_UNSUPPORTED_FORMATS = 9;

    const DEFAULT_ORDER_BY_LIMIT = 10;

    const DEBUG_ACTION = 11;

    const ABORT_ON_DEFAULT_LIMIT_EXCEEDED = 12;

    const COMPRESSION_CODEC = 13;

    const SEQ_COMPRESSION_MODE = 14;

    const HBASE_CACHING = 15;

    const HBASE_CACHE_BLOCKS = 16;

    const PARQUET_FILE_SIZE = 17;

    const EXPLAIN_LEVEL = 18;

    const SYNC_DDL = 19;

    const REQUEST_POOL = 20;

    const V_CPU_CORES = 21;

    const RESERVATION_REQUEST_TIMEOUT = 22;

    const DISABLE_CACHED_READS = 23;

    const DISABLE_OUTERMOST_TOPN = 24;

    const RM_INITIAL_MEM = 25;

    const QUERY_TIMEOUT_S = 26;

    const BUFFER_POOL_LIMIT = 27;

    const APPX_COUNT_DISTINCT = 28;

    const DISABLE_UNSAFE_SPILLS = 29;

    const EXEC_SINGLE_NODE_ROWS_THRESHOLD = 30;

    const OPTIMIZE_PARTITION_KEY_SCANS = 31;

    const REPLICA_PREFERENCE = 32;

    const SCHEDULE_RANDOM_REPLICA = 33;

    const SCAN_NODE_CODEGEN_THRESHOLD = 34;

    const DISABLE_STREAMING_PREAGGREGATIONS = 35;

    const RUNTIME_FILTER_MODE = 36;

    const RUNTIME_BLOOM_FILTER_SIZE = 37;

    const RUNTIME_FILTER_WAIT_TIME_MS = 38;

    const DISABLE_ROW_RUNTIME_FILTERING = 39;

    const MAX_NUM_RUNTIME_FILTERS = 40;

    const PARQUET_ANNOTATE_STRINGS_UTF8 = 41;

    const PARQUET_FALLBACK_SCHEMA_RESOLUTION = 42;

    const MT_DOP = 43;

    const S3_SKIP_INSERT_STAGING = 44;

    const RUNTIME_FILTER_MAX_SIZE = 45;

    const RUNTIME_FILTER_MIN_SIZE = 46;

    const PREFETCH_MODE = 47;

    const STRICT_MODE = 48;

    const SCRATCH_LIMIT = 49;

    const ENABLE_EXPR_REWRITES = 50;

    const DECIMAL_V2 = 51;

    const PARQUET_DICTIONARY_FILTERING = 52;

    const PARQUET_ARRAY_RESOLUTION = 53;

    const PARQUET_READ_STATISTICS = 54;

    const DEFAULT_JOIN_DISTRIBUTION_MODE = 55;

    const DISABLE_CODEGEN_ROWS_THRESHOLD = 56;

    const DEFAULT_SPILLABLE_BUFFER_SIZE = 57;

    const MIN_SPILLABLE_BUFFER_SIZE = 58;

    const MAX_ROW_SIZE = 59;

    const IDLE_SESSION_TIMEOUT = 60;

    const COMPUTE_STATS_MIN_SAMPLE_SIZE = 61;

    const EXEC_TIME_LIMIT_S = 62;

    const SHUFFLE_DISTINCT_EXPRS = 63;

    static public $__names = array(
        0 => 'ABORT_ON_ERROR',
        1 => 'MAX_ERRORS',
        2 => 'DISABLE_CODEGEN',
        3 => 'BATCH_SIZE',
        4 => 'MEM_LIMIT',
        5 => 'NUM_NODES',
        6 => 'MAX_SCAN_RANGE_LENGTH',
        7 => 'MAX_IO_BUFFERS',
        8 => 'NUM_SCANNER_THREADS',
        9 => 'ALLOW_UNSUPPORTED_FORMATS',
        10 => 'DEFAULT_ORDER_BY_LIMIT',
        11 => 'DEBUG_ACTION',
        12 => 'ABORT_ON_DEFAULT_LIMIT_EXCEEDED',
        13 => 'COMPRESSION_CODEC',
        14 => 'SEQ_COMPRESSION_MODE',
        15 => 'HBASE_CACHING',
        16 => 'HBASE_CACHE_BLOCKS',
        17 => 'PARQUET_FILE_SIZE',
        18 => 'EXPLAIN_LEVEL',
        19 => 'SYNC_DDL',
        20 => 'REQUEST_POOL',
        21 => 'V_CPU_CORES',
        22 => 'RESERVATION_REQUEST_TIMEOUT',
        23 => 'DISABLE_CACHED_READS',
        24 => 'DISABLE_OUTERMOST_TOPN',
        25 => 'RM_INITIAL_MEM',
        26 => 'QUERY_TIMEOUT_S',
        27 => 'BUFFER_POOL_LIMIT',
        28 => 'APPX_COUNT_DISTINCT',
        29 => 'DISABLE_UNSAFE_SPILLS',
        30 => 'EXEC_SINGLE_NODE_ROWS_THRESHOLD',
        31 => 'OPTIMIZE_PARTITION_KEY_SCANS',
        32 => 'REPLICA_PREFERENCE',
        33 => 'SCHEDULE_RANDOM_REPLICA',
        34 => 'SCAN_NODE_CODEGEN_THRESHOLD',
        35 => 'DISABLE_STREAMING_PREAGGREGATIONS',
        36 => 'RUNTIME_FILTER_MODE',
        37 => 'RUNTIME_BLOOM_FILTER_SIZE',
        38 => 'RUNTIME_FILTER_WAIT_TIME_MS',
        39 => 'DISABLE_ROW_RUNTIME_FILTERING',
        40 => 'MAX_NUM_RUNTIME_FILTERS',
        41 => 'PARQUET_ANNOTATE_STRINGS_UTF8',
        42 => 'PARQUET_FALLBACK_SCHEMA_RESOLUTION',
        43 => 'MT_DOP',
        44 => 'S3_SKIP_INSERT_STAGING',
        45 => 'RUNTIME_FILTER_MAX_SIZE',
        46 => 'RUNTIME_FILTER_MIN_SIZE',
        47 => 'PREFETCH_MODE',
        48 => 'STRICT_MODE',
        49 => 'SCRATCH_LIMIT',
        50 => 'ENABLE_EXPR_REWRITES',
        51 => 'DECIMAL_V2',
        52 => 'PARQUET_DICTIONARY_FILTERING',
        53 => 'PARQUET_ARRAY_RESOLUTION',
        54 => 'PARQUET_READ_STATISTICS',
        55 => 'DEFAULT_JOIN_DISTRIBUTION_MODE',
        56 => 'DISABLE_CODEGEN_ROWS_THRESHOLD',
        57 => 'DEFAULT_SPILLABLE_BUFFER_SIZE',
        58 => 'MIN_SPILLABLE_BUFFER_SIZE',
        59 => 'MAX_ROW_SIZE',
        60 => 'IDLE_SESSION_TIMEOUT',
        61 => 'COMPUTE_STATS_MIN_SAMPLE_SIZE',
        62 => 'EXEC_TIME_LIMIT_S',
        63 => 'SHUFFLE_DISTINCT_EXPRS',
    );
}

