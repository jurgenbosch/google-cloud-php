<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The phrase matcher resource.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.PhraseMatcher</code>
 */
class PhraseMatcher extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the phrase matcher.
     * Format:
     * projects/{project}/locations/{location}/phraseMatchers/{phrase_matcher}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. Immutable. The revision ID of the phrase matcher.
     * A new revision is committed whenever the matcher is changed, except when it
     * is activated or deactivated. A server generated random ID will be used.
     * Example: locations/global/phraseMatchers/my-first-matcher&#64;1234567
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $revision_id = '';
    /**
     * The customized version tag to use for the phrase matcher. If not specified,
     * it will default to `revision_id`.
     *
     * Generated from protobuf field <code>string version_tag = 3;</code>
     */
    protected $version_tag = '';
    /**
     * Output only. The timestamp of when the revision was created. It is also the
     * create time when a new matcher is added.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $revision_create_time = null;
    /**
     * The human-readable name of the phrase matcher.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     */
    protected $display_name = '';
    /**
     * Required. The type of this phrase matcher.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatcher.PhraseMatcherType type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Applies the phrase matcher only when it is active.
     *
     * Generated from protobuf field <code>bool active = 7;</code>
     */
    protected $active = false;
    /**
     * A list of phase match rule groups that are included in this matcher.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup phrase_match_rule_groups = 8;</code>
     */
    private $phrase_match_rule_groups;
    /**
     * Output only. The most recent time at which the activation status was
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $activation_update_time = null;
    /**
     * The role whose utterances the phrase matcher should be matched
     * against. If the role is ROLE_UNSPECIFIED it will be matched against any
     * utterances in the transcript.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationParticipant.Role role_match = 10;</code>
     */
    protected $role_match = 0;
    /**
     * Output only. The most recent time at which the phrase matcher was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the phrase matcher.
     *           Format:
     *           projects/{project}/locations/{location}/phraseMatchers/{phrase_matcher}
     *     @type string $revision_id
     *           Output only. Immutable. The revision ID of the phrase matcher.
     *           A new revision is committed whenever the matcher is changed, except when it
     *           is activated or deactivated. A server generated random ID will be used.
     *           Example: locations/global/phraseMatchers/my-first-matcher&#64;1234567
     *     @type string $version_tag
     *           The customized version tag to use for the phrase matcher. If not specified,
     *           it will default to `revision_id`.
     *     @type \Google\Protobuf\Timestamp $revision_create_time
     *           Output only. The timestamp of when the revision was created. It is also the
     *           create time when a new matcher is added.
     *     @type string $display_name
     *           The human-readable name of the phrase matcher.
     *     @type int $type
     *           Required. The type of this phrase matcher.
     *     @type bool $active
     *           Applies the phrase matcher only when it is active.
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\PhraseMatchRuleGroup>|\Google\Protobuf\Internal\RepeatedField $phrase_match_rule_groups
     *           A list of phase match rule groups that are included in this matcher.
     *     @type \Google\Protobuf\Timestamp $activation_update_time
     *           Output only. The most recent time at which the activation status was
     *           updated.
     *     @type int $role_match
     *           The role whose utterances the phrase matcher should be matched
     *           against. If the role is ROLE_UNSPECIFIED it will be matched against any
     *           utterances in the transcript.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The most recent time at which the phrase matcher was updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the phrase matcher.
     * Format:
     * projects/{project}/locations/{location}/phraseMatchers/{phrase_matcher}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the phrase matcher.
     * Format:
     * projects/{project}/locations/{location}/phraseMatchers/{phrase_matcher}
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. Immutable. The revision ID of the phrase matcher.
     * A new revision is committed whenever the matcher is changed, except when it
     * is activated or deactivated. A server generated random ID will be used.
     * Example: locations/global/phraseMatchers/my-first-matcher&#64;1234567
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * Output only. Immutable. The revision ID of the phrase matcher.
     * A new revision is committed whenever the matcher is changed, except when it
     * is activated or deactivated. A server generated random ID will be used.
     * Example: locations/global/phraseMatchers/my-first-matcher&#64;1234567
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;

        return $this;
    }

    /**
     * The customized version tag to use for the phrase matcher. If not specified,
     * it will default to `revision_id`.
     *
     * Generated from protobuf field <code>string version_tag = 3;</code>
     * @return string
     */
    public function getVersionTag()
    {
        return $this->version_tag;
    }

    /**
     * The customized version tag to use for the phrase matcher. If not specified,
     * it will default to `revision_id`.
     *
     * Generated from protobuf field <code>string version_tag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_tag = $var;

        return $this;
    }

    /**
     * Output only. The timestamp of when the revision was created. It is also the
     * create time when a new matcher is added.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRevisionCreateTime()
    {
        return $this->revision_create_time;
    }

    public function hasRevisionCreateTime()
    {
        return isset($this->revision_create_time);
    }

    public function clearRevisionCreateTime()
    {
        unset($this->revision_create_time);
    }

    /**
     * Output only. The timestamp of when the revision was created. It is also the
     * create time when a new matcher is added.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp revision_create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRevisionCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->revision_create_time = $var;

        return $this;
    }

    /**
     * The human-readable name of the phrase matcher.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The human-readable name of the phrase matcher.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
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
     * Required. The type of this phrase matcher.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatcher.PhraseMatcherType type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of this phrase matcher.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatcher.PhraseMatcherType type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\PhraseMatcher\PhraseMatcherType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Applies the phrase matcher only when it is active.
     *
     * Generated from protobuf field <code>bool active = 7;</code>
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Applies the phrase matcher only when it is active.
     *
     * Generated from protobuf field <code>bool active = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setActive($var)
    {
        GPBUtil::checkBool($var);
        $this->active = $var;

        return $this;
    }

    /**
     * A list of phase match rule groups that are included in this matcher.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup phrase_match_rule_groups = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhraseMatchRuleGroups()
    {
        return $this->phrase_match_rule_groups;
    }

    /**
     * A list of phase match rule groups that are included in this matcher.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup phrase_match_rule_groups = 8;</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\PhraseMatchRuleGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhraseMatchRuleGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\PhraseMatchRuleGroup::class);
        $this->phrase_match_rule_groups = $arr;

        return $this;
    }

    /**
     * Output only. The most recent time at which the activation status was
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getActivationUpdateTime()
    {
        return $this->activation_update_time;
    }

    public function hasActivationUpdateTime()
    {
        return isset($this->activation_update_time);
    }

    public function clearActivationUpdateTime()
    {
        unset($this->activation_update_time);
    }

    /**
     * Output only. The most recent time at which the activation status was
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setActivationUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->activation_update_time = $var;

        return $this;
    }

    /**
     * The role whose utterances the phrase matcher should be matched
     * against. If the role is ROLE_UNSPECIFIED it will be matched against any
     * utterances in the transcript.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationParticipant.Role role_match = 10;</code>
     * @return int
     */
    public function getRoleMatch()
    {
        return $this->role_match;
    }

    /**
     * The role whose utterances the phrase matcher should be matched
     * against. If the role is ROLE_UNSPECIFIED it will be matched against any
     * utterances in the transcript.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationParticipant.Role role_match = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRoleMatch($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\ConversationParticipant\Role::class);
        $this->role_match = $var;

        return $this;
    }

    /**
     * Output only. The most recent time at which the phrase matcher was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The most recent time at which the phrase matcher was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

