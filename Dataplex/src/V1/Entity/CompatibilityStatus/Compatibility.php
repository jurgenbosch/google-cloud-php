<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides compatibility information for a specific metadata store.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility</code>
 */
class Compatibility extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether the entity is compatible and can be represented in
     * the metadata store.
     *
     * Generated from protobuf field <code>bool compatible = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $compatible = false;
    /**
     * Output only. Provides additional detail if the entity is incompatible
     * with the metadata store.
     *
     * Generated from protobuf field <code>string reason = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $compatible
     *           Output only. Whether the entity is compatible and can be represented in
     *           the metadata store.
     *     @type string $reason
     *           Output only. Provides additional detail if the entity is incompatible
     *           with the metadata store.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Whether the entity is compatible and can be represented in
     * the metadata store.
     *
     * Generated from protobuf field <code>bool compatible = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCompatible()
    {
        return $this->compatible;
    }

    /**
     * Output only. Whether the entity is compatible and can be represented in
     * the metadata store.
     *
     * Generated from protobuf field <code>bool compatible = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCompatible($var)
    {
        GPBUtil::checkBool($var);
        $this->compatible = $var;

        return $this;
    }

    /**
     * Output only. Provides additional detail if the entity is incompatible
     * with the metadata store.
     *
     * Generated from protobuf field <code>string reason = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Output only. Provides additional detail if the entity is incompatible
     * with the metadata store.
     *
     * Generated from protobuf field <code>string reason = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}


