<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>etcdserverpb.WatchCreateRequest</code>
 */
class WatchCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * key is the key to register for watching.
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     */
    private $key = '';
    /**
     * range_end is the end of the range [key, range_end) to watch. If range_end is not given,
     * only the key argument is watched. If range_end is equal to '\0', all keys greater than
     * or equal to the key argument are watched.
     * If the range_end is one bit larger than the given key,
     * then all keys with the prefix (the given key) will be watched.
     *
     * Generated from protobuf field <code>bytes range_end = 2;</code>
     */
    private $range_end = '';
    /**
     * start_revision is an optional revision to watch from (inclusive). No start_revision is "now".
     *
     * Generated from protobuf field <code>int64 start_revision = 3;</code>
     */
    private $start_revision = 0;
    /**
     * progress_notify is set so that the etcd server will periodically send a WatchResponse with
     * no events to the new watcher if there are no recent events. It is useful when clients
     * wish to recover a disconnected watcher starting from a recent known revision.
     * The etcd server may decide how often it will send notifications based on current load.
     *
     * Generated from protobuf field <code>bool progress_notify = 4;</code>
     */
    private $progress_notify = false;
    /**
     * filters filter the events at server side before it sends back to the watcher.
     *
     * Generated from protobuf field <code>repeated .etcdserverpb.WatchCreateRequest.FilterType filters = 5;</code>
     */
    private $filters;
    /**
     * If prev_kv is set, created watcher gets the previous KV before the event happens.
     * If the previous KV is already compacted, nothing will be returned.
     *
     * Generated from protobuf field <code>bool prev_kv = 6;</code>
     */
    private $prev_kv = false;
    /**
     * If watch_id is provided and non-zero, it will be assigned to this watcher.
     * Since creating a watcher in etcd is not a synchronous operation,
     * this can be used ensure that ordering is correct when creating multiple
     * watchers on the same stream. Creating a watcher with an ID already in
     * use on the stream will cause an error to be returned.
     *
     * Generated from protobuf field <code>int64 watch_id = 7;</code>
     */
    private $watch_id = 0;
    /**
     * fragment enables splitting large revisions into multiple watch responses.
     *
     * Generated from protobuf field <code>bool fragment = 8;</code>
     */
    private $fragment = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           key is the key to register for watching.
     *     @type string $range_end
     *           range_end is the end of the range [key, range_end) to watch. If range_end is not given,
     *           only the key argument is watched. If range_end is equal to '\0', all keys greater than
     *           or equal to the key argument are watched.
     *           If the range_end is one bit larger than the given key,
     *           then all keys with the prefix (the given key) will be watched.
     *     @type int|string $start_revision
     *           start_revision is an optional revision to watch from (inclusive). No start_revision is "now".
     *     @type bool $progress_notify
     *           progress_notify is set so that the etcd server will periodically send a WatchResponse with
     *           no events to the new watcher if there are no recent events. It is useful when clients
     *           wish to recover a disconnected watcher starting from a recent known revision.
     *           The etcd server may decide how often it will send notifications based on current load.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $filters
     *           filters filter the events at server side before it sends back to the watcher.
     *     @type bool $prev_kv
     *           If prev_kv is set, created watcher gets the previous KV before the event happens.
     *           If the previous KV is already compacted, nothing will be returned.
     *     @type int|string $watch_id
     *           If watch_id is provided and non-zero, it will be assigned to this watcher.
     *           Since creating a watcher in etcd is not a synchronous operation,
     *           this can be used ensure that ordering is correct when creating multiple
     *           watchers on the same stream. Creating a watcher with an ID already in
     *           use on the stream will cause an error to be returned.
     *     @type bool $fragment
     *           fragment enables splitting large revisions into multiple watch responses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * key is the key to register for watching.
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * key is the key to register for watching.
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
     * range_end is the end of the range [key, range_end) to watch. If range_end is not given,
     * only the key argument is watched. If range_end is equal to '\0', all keys greater than
     * or equal to the key argument are watched.
     * If the range_end is one bit larger than the given key,
     * then all keys with the prefix (the given key) will be watched.
     *
     * Generated from protobuf field <code>bytes range_end = 2;</code>
     * @return string
     */
    public function getRangeEnd()
    {
        return $this->range_end;
    }

    /**
     * range_end is the end of the range [key, range_end) to watch. If range_end is not given,
     * only the key argument is watched. If range_end is equal to '\0', all keys greater than
     * or equal to the key argument are watched.
     * If the range_end is one bit larger than the given key,
     * then all keys with the prefix (the given key) will be watched.
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
     * start_revision is an optional revision to watch from (inclusive). No start_revision is "now".
     *
     * Generated from protobuf field <code>int64 start_revision = 3;</code>
     * @return int|string
     */
    public function getStartRevision()
    {
        return $this->start_revision;
    }

    /**
     * start_revision is an optional revision to watch from (inclusive). No start_revision is "now".
     *
     * Generated from protobuf field <code>int64 start_revision = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartRevision($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_revision = $var;

        return $this;
    }

    /**
     * progress_notify is set so that the etcd server will periodically send a WatchResponse with
     * no events to the new watcher if there are no recent events. It is useful when clients
     * wish to recover a disconnected watcher starting from a recent known revision.
     * The etcd server may decide how often it will send notifications based on current load.
     *
     * Generated from protobuf field <code>bool progress_notify = 4;</code>
     * @return bool
     */
    public function getProgressNotify()
    {
        return $this->progress_notify;
    }

    /**
     * progress_notify is set so that the etcd server will periodically send a WatchResponse with
     * no events to the new watcher if there are no recent events. It is useful when clients
     * wish to recover a disconnected watcher starting from a recent known revision.
     * The etcd server may decide how often it will send notifications based on current load.
     *
     * Generated from protobuf field <code>bool progress_notify = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setProgressNotify($var)
    {
        GPBUtil::checkBool($var);
        $this->progress_notify = $var;

        return $this;
    }

    /**
     * filters filter the events at server side before it sends back to the watcher.
     *
     * Generated from protobuf field <code>repeated .etcdserverpb.WatchCreateRequest.FilterType filters = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * filters filter the events at server side before it sends back to the watcher.
     *
     * Generated from protobuf field <code>repeated .etcdserverpb.WatchCreateRequest.FilterType filters = 5;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Etcdserverpb\WatchCreateRequest\FilterType::class);
        $this->filters = $arr;

        return $this;
    }

    /**
     * If prev_kv is set, created watcher gets the previous KV before the event happens.
     * If the previous KV is already compacted, nothing will be returned.
     *
     * Generated from protobuf field <code>bool prev_kv = 6;</code>
     * @return bool
     */
    public function getPrevKv()
    {
        return $this->prev_kv;
    }

    /**
     * If prev_kv is set, created watcher gets the previous KV before the event happens.
     * If the previous KV is already compacted, nothing will be returned.
     *
     * Generated from protobuf field <code>bool prev_kv = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrevKv($var)
    {
        GPBUtil::checkBool($var);
        $this->prev_kv = $var;

        return $this;
    }

    /**
     * If watch_id is provided and non-zero, it will be assigned to this watcher.
     * Since creating a watcher in etcd is not a synchronous operation,
     * this can be used ensure that ordering is correct when creating multiple
     * watchers on the same stream. Creating a watcher with an ID already in
     * use on the stream will cause an error to be returned.
     *
     * Generated from protobuf field <code>int64 watch_id = 7;</code>
     * @return int|string
     */
    public function getWatchId()
    {
        return $this->watch_id;
    }

    /**
     * If watch_id is provided and non-zero, it will be assigned to this watcher.
     * Since creating a watcher in etcd is not a synchronous operation,
     * this can be used ensure that ordering is correct when creating multiple
     * watchers on the same stream. Creating a watcher with an ID already in
     * use on the stream will cause an error to be returned.
     *
     * Generated from protobuf field <code>int64 watch_id = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWatchId($var)
    {
        GPBUtil::checkInt64($var);
        $this->watch_id = $var;

        return $this;
    }

    /**
     * fragment enables splitting large revisions into multiple watch responses.
     *
     * Generated from protobuf field <code>bool fragment = 8;</code>
     * @return bool
     */
    public function getFragment()
    {
        return $this->fragment;
    }

    /**
     * fragment enables splitting large revisions into multiple watch responses.
     *
     * Generated from protobuf field <code>bool fragment = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setFragment($var)
    {
        GPBUtil::checkBool($var);
        $this->fragment = $var;

        return $this;
    }

}
