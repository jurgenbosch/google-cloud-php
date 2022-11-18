<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session_entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [SessionEntityTypes.UpdateSessionEntityType][google.cloud.dialogflow.v2.SessionEntityTypes.UpdateSessionEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateSessionEntityTypeRequest</code>
 */
class UpdateSessionEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session entity type to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType session_entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $session_entity_type = null;
    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\SessionEntityType $session_entity_type
     *           Required. The session entity type to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\SessionEntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The session entity type to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType session_entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\SessionEntityType|null
     */
    public function getSessionEntityType()
    {
        return $this->session_entity_type;
    }

    public function hasSessionEntityType()
    {
        return isset($this->session_entity_type);
    }

    public function clearSessionEntityType()
    {
        unset($this->session_entity_type);
    }

    /**
     * Required. The session entity type to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType session_entity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\SessionEntityType $var
     * @return $this
     */
    public function setSessionEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SessionEntityType::class);
        $this->session_entity_type = $var;

        return $this;
    }

    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

