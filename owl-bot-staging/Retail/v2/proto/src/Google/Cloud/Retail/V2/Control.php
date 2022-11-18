<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/control.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configures dynamic metadata that can be linked to a
 * [ServingConfig][google.cloud.retail.v2.ServingConfig] and affect search or
 * recommendation results at serving time.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Control</code>
 */
class Control extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Fully qualified name
     * `projects/&#42;&#47;locations/global/catalogs/&#42;&#47;controls/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Required. The human readable control display name. Used in Retail UI.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Output only. List of [serving
     * configuration][google.cloud.retail.v2.ServingConfig] ids that are
     * associated with this control in the same
     * [Catalog][google.cloud.retail.v2.Catalog].
     * Note the association is managed via the
     * [ServingConfig][google.cloud.retail.v2.ServingConfig], this is an output
     * only denormalized view.
     *
     * Generated from protobuf field <code>repeated string associated_serving_config_ids = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $associated_serving_config_ids;
    /**
     * Required. Immutable. The solution types that the control is used for.
     * Currently we support setting only one type of solution at creation time.
     * Only `SOLUTION_TYPE_SEARCH` value is supported at the moment.
     * If no solution type is provided at creation time, will default to
     * [SOLUTION_TYPE_SEARCH][google.cloud.retail.v2.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SolutionType solution_types = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $solution_types;
    /**
     * Specifies the use case for the control.
     * Affects what condition fields can be set.
     * Only settable by search controls.
     * Will default to
     * [SEARCH_SOLUTION_USE_CASE_SEARCH][google.cloud.retail.v2.SearchSolutionUseCase.SEARCH_SOLUTION_USE_CASE_SEARCH]
     * if not specified. Currently only allow one search_solution_use_case per
     * control.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchSolutionUseCase search_solution_use_case = 7;</code>
     */
    private $search_solution_use_case;
    protected $control;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\Rule $rule
     *           A rule control - a condition-action pair.
     *           Enacts a set action when the condition is triggered.
     *           For example: Boost "gShoe" when query full matches "Running Shoes".
     *     @type string $name
     *           Immutable. Fully qualified name
     *           `projects/&#42;&#47;locations/global/catalogs/&#42;&#47;controls/&#42;`
     *     @type string $display_name
     *           Required. The human readable control display name. Used in Retail UI.
     *           This field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an INVALID_ARGUMENT error is thrown.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $associated_serving_config_ids
     *           Output only. List of [serving
     *           configuration][google.cloud.retail.v2.ServingConfig] ids that are
     *           associated with this control in the same
     *           [Catalog][google.cloud.retail.v2.Catalog].
     *           Note the association is managed via the
     *           [ServingConfig][google.cloud.retail.v2.ServingConfig], this is an output
     *           only denormalized view.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $solution_types
     *           Required. Immutable. The solution types that the control is used for.
     *           Currently we support setting only one type of solution at creation time.
     *           Only `SOLUTION_TYPE_SEARCH` value is supported at the moment.
     *           If no solution type is provided at creation time, will default to
     *           [SOLUTION_TYPE_SEARCH][google.cloud.retail.v2.SolutionType.SOLUTION_TYPE_SEARCH].
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $search_solution_use_case
     *           Specifies the use case for the control.
     *           Affects what condition fields can be set.
     *           Only settable by search controls.
     *           Will default to
     *           [SEARCH_SOLUTION_USE_CASE_SEARCH][google.cloud.retail.v2.SearchSolutionUseCase.SEARCH_SOLUTION_USE_CASE_SEARCH]
     *           if not specified. Currently only allow one search_solution_use_case per
     *           control.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * A rule control - a condition-action pair.
     * Enacts a set action when the condition is triggered.
     * For example: Boost "gShoe" when query full matches "Running Shoes".
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule rule = 4;</code>
     * @return \Google\Cloud\Retail\V2\Rule|null
     */
    public function getRule()
    {
        return $this->readOneof(4);
    }

    public function hasRule()
    {
        return $this->hasOneof(4);
    }

    /**
     * A rule control - a condition-action pair.
     * Enacts a set action when the condition is triggered.
     * For example: Boost "gShoe" when query full matches "Running Shoes".
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule rule = 4;</code>
     * @param \Google\Cloud\Retail\V2\Rule $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Immutable. Fully qualified name
     * `projects/&#42;&#47;locations/global/catalogs/&#42;&#47;controls/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Fully qualified name
     * `projects/&#42;&#47;locations/global/catalogs/&#42;&#47;controls/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Required. The human readable control display name. Used in Retail UI.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The human readable control display name. Used in Retail UI.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. List of [serving
     * configuration][google.cloud.retail.v2.ServingConfig] ids that are
     * associated with this control in the same
     * [Catalog][google.cloud.retail.v2.Catalog].
     * Note the association is managed via the
     * [ServingConfig][google.cloud.retail.v2.ServingConfig], this is an output
     * only denormalized view.
     *
     * Generated from protobuf field <code>repeated string associated_serving_config_ids = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedServingConfigIds()
    {
        return $this->associated_serving_config_ids;
    }

    /**
     * Output only. List of [serving
     * configuration][google.cloud.retail.v2.ServingConfig] ids that are
     * associated with this control in the same
     * [Catalog][google.cloud.retail.v2.Catalog].
     * Note the association is managed via the
     * [ServingConfig][google.cloud.retail.v2.ServingConfig], this is an output
     * only denormalized view.
     *
     * Generated from protobuf field <code>repeated string associated_serving_config_ids = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociatedServingConfigIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->associated_serving_config_ids = $arr;

        return $this;
    }

    /**
     * Required. Immutable. The solution types that the control is used for.
     * Currently we support setting only one type of solution at creation time.
     * Only `SOLUTION_TYPE_SEARCH` value is supported at the moment.
     * If no solution type is provided at creation time, will default to
     * [SOLUTION_TYPE_SEARCH][google.cloud.retail.v2.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SolutionType solution_types = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSolutionTypes()
    {
        return $this->solution_types;
    }

    /**
     * Required. Immutable. The solution types that the control is used for.
     * Currently we support setting only one type of solution at creation time.
     * Only `SOLUTION_TYPE_SEARCH` value is supported at the moment.
     * If no solution type is provided at creation time, will default to
     * [SOLUTION_TYPE_SEARCH][google.cloud.retail.v2.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SolutionType solution_types = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSolutionTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Retail\V2\SolutionType::class);
        $this->solution_types = $arr;

        return $this;
    }

    /**
     * Specifies the use case for the control.
     * Affects what condition fields can be set.
     * Only settable by search controls.
     * Will default to
     * [SEARCH_SOLUTION_USE_CASE_SEARCH][google.cloud.retail.v2.SearchSolutionUseCase.SEARCH_SOLUTION_USE_CASE_SEARCH]
     * if not specified. Currently only allow one search_solution_use_case per
     * control.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchSolutionUseCase search_solution_use_case = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearchSolutionUseCase()
    {
        return $this->search_solution_use_case;
    }

    /**
     * Specifies the use case for the control.
     * Affects what condition fields can be set.
     * Only settable by search controls.
     * Will default to
     * [SEARCH_SOLUTION_USE_CASE_SEARCH][google.cloud.retail.v2.SearchSolutionUseCase.SEARCH_SOLUTION_USE_CASE_SEARCH]
     * if not specified. Currently only allow one search_solution_use_case per
     * control.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.SearchSolutionUseCase search_solution_use_case = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearchSolutionUseCase($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Retail\V2\SearchSolutionUseCase::class);
        $this->search_solution_use_case = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getControl()
    {
        return $this->whichOneof("control");
    }

}

