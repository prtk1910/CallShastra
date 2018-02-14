<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/document.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An array value.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.ArrayValue</code>
 */
class ArrayValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Values in the array.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.Value values = 1;</code>
     */
    private $values;

    public function __construct() {
        \GPBMetadata\Google\Firestore\V1Beta1\Document::initOnce();
        parent::__construct();
    }

    /**
     * Values in the array.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.Value values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Values in the array.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.Value values = 1;</code>
     * @param \Google\Cloud\Firestore\V1beta1\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1beta1\Value::class);
        $this->values = $arr;

        return $this;
    }

}

