<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.DeleteRangeRequest</code>
 */
class DeleteRangeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * key is the first key to delete in the range.
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     */
    private $key = '';
    /**
     * range_end is the key following the last key to delete for the range [key, range_end).
     * If range_end is not given, the range is defined to contain only the key argument.
     * If range_end is one bit larger than the given key, then the range is all the keys
     * with the prefix (the given key).
     * If range_end is '\0', the range is all keys greater than or equal to the key argument.
     *
     * Generated from protobuf field <code>bytes range_end = 2;</code>
     */
    private $range_end = '';
    /**
     * If prev_kv is set, etcd gets the previous key-value pairs before deleting it.
     * The previous key-value pairs will be returned in the delete response.
     *
     * Generated from protobuf field <code>bool prev_kv = 3;</code>
     */
    private $prev_kv = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           key is the first key to delete in the range.
     *     @type string $range_end
     *           range_end is the key following the last key to delete for the range [key, range_end).
     *           If range_end is not given, the range is defined to contain only the key argument.
     *           If range_end is one bit larger than the given key, then the range is all the keys
     *           with the prefix (the given key).
     *           If range_end is '\0', the range is all keys greater than or equal to the key argument.
     *     @type bool $prev_kv
     *           If prev_kv is set, etcd gets the previous key-value pairs before deleting it.
     *           The previous key-value pairs will be returned in the delete response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * key is the first key to delete in the range.
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * key is the first key to delete in the range.
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * range_end is the key following the last key to delete for the range [key, range_end).
     * If range_end is not given, the range is defined to contain only the key argument.
     * If range_end is one bit larger than the given key, then the range is all the keys
     * with the prefix (the given key).
     * If range_end is '\0', the range is all keys greater than or equal to the key argument.
     *
     * Generated from protobuf field <code>bytes range_end = 2;</code>
     * @return string
     */
    public function getRangeEnd()
    {
        return $this->range_end;
    }

    /**
     * range_end is the key following the last key to delete for the range [key, range_end).
     * If range_end is not given, the range is defined to contain only the key argument.
     * If range_end is one bit larger than the given key, then the range is all the keys
     * with the prefix (the given key).
     * If range_end is '\0', the range is all keys greater than or equal to the key argument.
     *
     * Generated from protobuf field <code>bytes range_end = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRangeEnd($var)
    {
        GPBUtil::checkString($var, False);
        $this->range_end = $var;

        return $this;
    }

    /**
     * If prev_kv is set, etcd gets the previous key-value pairs before deleting it.
     * The previous key-value pairs will be returned in the delete response.
     *
     * Generated from protobuf field <code>bool prev_kv = 3;</code>
     * @return bool
     */
    public function getPrevKv()
    {
        return $this->prev_kv;
    }

    /**
     * If prev_kv is set, etcd gets the previous key-value pairs before deleting it.
     * The previous key-value pairs will be returned in the delete response.
     *
     * Generated from protobuf field <code>bool prev_kv = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrevKv($var)
    {
        GPBUtil::checkBool($var);
        $this->prev_kv = $var;

        return $this;
    }

}

