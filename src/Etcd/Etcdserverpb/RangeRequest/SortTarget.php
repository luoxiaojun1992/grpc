<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb\RangeRequest;

/**
 * Protobuf type <code>etcdserverpb.RangeRequest.SortTarget</code>
 */
class SortTarget
{
    /**
     * Generated from protobuf enum <code>KEY = 0;</code>
     */
    const KEY = 0;
    /**
     * Generated from protobuf enum <code>VERSION = 1;</code>
     */
    const VERSION = 1;
    /**
     * Generated from protobuf enum <code>CREATE = 2;</code>
     */
    const CREATE = 2;
    /**
     * Generated from protobuf enum <code>MOD = 3;</code>
     */
    const MOD = 3;
    /**
     * Generated from protobuf enum <code>VALUE = 4;</code>
     */
    const VALUE = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SortTarget::class, \Etcdserverpb\RangeRequest_SortTarget::class);
