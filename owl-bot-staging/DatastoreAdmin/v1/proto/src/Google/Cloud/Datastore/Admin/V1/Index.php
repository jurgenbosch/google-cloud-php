<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/index.proto

namespace Google\Cloud\Datastore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Datastore composite index definition.
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.Index</code>
 */
class Index extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Project ID.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $project_id = '';
    /**
     * Output only. The resource ID of the index.
     *
     * Generated from protobuf field <code>string index_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $index_id = '';
    /**
     * Required. The entity kind to which this index applies.
     *
     * Generated from protobuf field <code>string kind = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $kind = '';
    /**
     * Required. The index's ancestor mode.  Must not be ANCESTOR_MODE_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Index.AncestorMode ancestor = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ancestor = 0;
    /**
     * Required. An ordered sequence of property names and their index attributes.
     *
     * Generated from protobuf field <code>repeated .google.datastore.admin.v1.Index.IndexedProperty properties = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $properties;
    /**
     * Output only. The state of the index.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Index.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Output only. Project ID.
     *     @type string $index_id
     *           Output only. The resource ID of the index.
     *     @type string $kind
     *           Required. The entity kind to which this index applies.
     *     @type int $ancestor
     *           Required. The index's ancestor mode.  Must not be ANCESTOR_MODE_UNSPECIFIED.
     *     @type array<\Google\Cloud\Datastore\Admin\V1\Index\IndexedProperty>|\Google\Protobuf\Internal\RepeatedField $properties
     *           Required. An ordered sequence of property names and their index attributes.
     *     @type int $state
     *           Output only. The state of the index.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\Index::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Project ID.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Output only. Project ID.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Output only. The resource ID of the index.
     *
     * Generated from protobuf field <code>string index_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIndexId()
    {
        return $this->index_id;
    }

    /**
     * Output only. The resource ID of the index.
     *
     * Generated from protobuf field <code>string index_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIndexId($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_id = $var;

        return $this;
    }

    /**
     * Required. The entity kind to which this index applies.
     *
     * Generated from protobuf field <code>string kind = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Required. The entity kind to which this index applies.
     *
     * Generated from protobuf field <code>string kind = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Required. The index's ancestor mode.  Must not be ANCESTOR_MODE_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Index.AncestorMode ancestor = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAncestor()
    {
        return $this->ancestor;
    }

    /**
     * Required. The index's ancestor mode.  Must not be ANCESTOR_MODE_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Index.AncestorMode ancestor = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAncestor($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\Index\AncestorMode::class);
        $this->ancestor = $var;

        return $this;
    }

    /**
     * Required. An ordered sequence of property names and their index attributes.
     *
     * Generated from protobuf field <code>repeated .google.datastore.admin.v1.Index.IndexedProperty properties = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Required. An ordered sequence of property names and their index attributes.
     *
     * Generated from protobuf field <code>repeated .google.datastore.admin.v1.Index.IndexedProperty properties = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Datastore\Admin\V1\Index\IndexedProperty>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\Admin\V1\Index\IndexedProperty::class);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Output only. The state of the index.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Index.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the index.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.Index.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\Index\State::class);
        $this->state = $var;

        return $this;
    }

}

