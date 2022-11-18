<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `UpdateExclusion`.
 *
 * Generated from protobuf message <code>google.logging.v2.UpdateExclusionRequest</code>
 */
class UpdateExclusionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the exclusion to update:
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     * For example:
     *   `"projects/my-project/exclusions/my-exclusion"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. New values for the existing exclusion. Only the fields specified in
     * `update_mask` are relevant.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogExclusion exclusion = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $exclusion = null;
    /**
     * Required. A non-empty list of fields to change in the existing exclusion. New values
     * for the fields are taken from the corresponding fields in the
     * [LogExclusion][google.logging.v2.LogExclusion] included in this request. Fields not mentioned in
     * `update_mask` are not changed and are ignored in the request.
     * For example, to change the filter and description of an exclusion,
     * specify an `update_mask` of `"filter,description"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the exclusion to update:
     *               "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *               "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *               "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     *           For example:
     *             `"projects/my-project/exclusions/my-exclusion"`
     *     @type \Google\Cloud\Logging\V2\LogExclusion $exclusion
     *           Required. New values for the existing exclusion. Only the fields specified in
     *           `update_mask` are relevant.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A non-empty list of fields to change in the existing exclusion. New values
     *           for the fields are taken from the corresponding fields in the
     *           [LogExclusion][google.logging.v2.LogExclusion] included in this request. Fields not mentioned in
     *           `update_mask` are not changed and are ignored in the request.
     *           For example, to change the filter and description of an exclusion,
     *           specify an `update_mask` of `"filter,description"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the exclusion to update:
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     * For example:
     *   `"projects/my-project/exclusions/my-exclusion"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the exclusion to update:
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     * For example:
     *   `"projects/my-project/exclusions/my-exclusion"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. New values for the existing exclusion. Only the fields specified in
     * `update_mask` are relevant.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogExclusion exclusion = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Logging\V2\LogExclusion|null
     */
    public function getExclusion()
    {
        return $this->exclusion;
    }

    public function hasExclusion()
    {
        return isset($this->exclusion);
    }

    public function clearExclusion()
    {
        unset($this->exclusion);
    }

    /**
     * Required. New values for the existing exclusion. Only the fields specified in
     * `update_mask` are relevant.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogExclusion exclusion = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Logging\V2\LogExclusion $var
     * @return $this
     */
    public function setExclusion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogExclusion::class);
        $this->exclusion = $var;

        return $this;
    }

    /**
     * Required. A non-empty list of fields to change in the existing exclusion. New values
     * for the fields are taken from the corresponding fields in the
     * [LogExclusion][google.logging.v2.LogExclusion] included in this request. Fields not mentioned in
     * `update_mask` are not changed and are ignored in the request.
     * For example, to change the filter and description of an exclusion,
     * specify an `update_mask` of `"filter,description"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. A non-empty list of fields to change in the existing exclusion. New values
     * for the fields are taken from the corresponding fields in the
     * [LogExclusion][google.logging.v2.LogExclusion] included in this request. Fields not mentioned in
     * `update_mask` are not changed and are ignored in the request.
     * For example, to change the filter and description of an exclusion,
     * specify an `update_mask` of `"filter,description"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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

