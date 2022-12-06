<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/v1/explanations.proto

namespace Google\Cloud\PolicyTroubleshooter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about how a binding in a policy affects a member's ability to use a
 * permission.
 *
 * Generated from protobuf message <code>google.cloud.policytroubleshooter.v1.BindingExplanation</code>
 */
class BindingExplanation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Indicates whether _this binding_ provides the specified permission to the
     * specified member for the specified resource.
     * This field does _not_ indicate whether the member actually has the
     * permission for the resource. There might be another binding that overrides
     * this binding. To determine whether the member actually has the permission,
     * use the `access` field in the
     * [TroubleshootIamPolicyResponse][IamChecker.TroubleshootIamPolicyResponse].
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.AccessState access = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $access = 0;
    /**
     * The role that this binding grants. For example,
     * `roles/compute.serviceAgent`.
     * For a complete list of predefined IAM roles, as well as the permissions in
     * each role, see https://cloud.google.com/iam/help/roles/reference.
     *
     * Generated from protobuf field <code>string role = 2;</code>
     */
    protected $role = '';
    /**
     * Indicates whether the role granted by this binding contains the specified
     * permission.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.BindingExplanation.RolePermission role_permission = 3;</code>
     */
    protected $role_permission = 0;
    /**
     * The relevance of the permission's existence, or nonexistence, in the role
     * to the overall determination for the entire policy.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.HeuristicRelevance role_permission_relevance = 4;</code>
     */
    protected $role_permission_relevance = 0;
    /**
     * Indicates whether each member in the binding includes the member specified
     * in the request, either directly or indirectly. Each key identifies a member
     * in the binding, and each value indicates whether the member in the binding
     * includes the member in the request.
     * For example, suppose that a binding includes the following members:
     * * `user:alice&#64;example.com`
     * * `group:product-eng&#64;example.com`
     * You want to troubleshoot access for `user:bob&#64;example.com`. This user is a
     * member of the group `group:product-eng&#64;example.com`.
     * For the first member in the binding, the key is `user:alice&#64;example.com`,
     * and the `membership` field in the value is set to
     * `MEMBERSHIP_NOT_INCLUDED`.
     * For the second member in the binding, the key is
     * `group:product-eng&#64;example.com`, and the `membership` field in the value is
     * set to `MEMBERSHIP_INCLUDED`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.policytroubleshooter.v1.BindingExplanation.AnnotatedMembership> memberships = 5;</code>
     */
    private $memberships;
    /**
     * The relevance of this binding to the overall determination for the entire
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.HeuristicRelevance relevance = 6;</code>
     */
    protected $relevance = 0;
    /**
     * A condition expression that prevents access unless the expression evaluates
     * to `true`.
     * To learn about IAM Conditions, see
     * http://cloud.google.com/iam/help/conditions/overview.
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 7;</code>
     */
    protected $condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $access
     *           Required. Indicates whether _this binding_ provides the specified permission to the
     *           specified member for the specified resource.
     *           This field does _not_ indicate whether the member actually has the
     *           permission for the resource. There might be another binding that overrides
     *           this binding. To determine whether the member actually has the permission,
     *           use the `access` field in the
     *           [TroubleshootIamPolicyResponse][IamChecker.TroubleshootIamPolicyResponse].
     *     @type string $role
     *           The role that this binding grants. For example,
     *           `roles/compute.serviceAgent`.
     *           For a complete list of predefined IAM roles, as well as the permissions in
     *           each role, see https://cloud.google.com/iam/help/roles/reference.
     *     @type int $role_permission
     *           Indicates whether the role granted by this binding contains the specified
     *           permission.
     *     @type int $role_permission_relevance
     *           The relevance of the permission's existence, or nonexistence, in the role
     *           to the overall determination for the entire policy.
     *     @type array|\Google\Protobuf\Internal\MapField $memberships
     *           Indicates whether each member in the binding includes the member specified
     *           in the request, either directly or indirectly. Each key identifies a member
     *           in the binding, and each value indicates whether the member in the binding
     *           includes the member in the request.
     *           For example, suppose that a binding includes the following members:
     *           * `user:alice&#64;example.com`
     *           * `group:product-eng&#64;example.com`
     *           You want to troubleshoot access for `user:bob&#64;example.com`. This user is a
     *           member of the group `group:product-eng&#64;example.com`.
     *           For the first member in the binding, the key is `user:alice&#64;example.com`,
     *           and the `membership` field in the value is set to
     *           `MEMBERSHIP_NOT_INCLUDED`.
     *           For the second member in the binding, the key is
     *           `group:product-eng&#64;example.com`, and the `membership` field in the value is
     *           set to `MEMBERSHIP_INCLUDED`.
     *     @type int $relevance
     *           The relevance of this binding to the overall determination for the entire
     *           policy.
     *     @type \Google\Type\Expr $condition
     *           A condition expression that prevents access unless the expression evaluates
     *           to `true`.
     *           To learn about IAM Conditions, see
     *           http://cloud.google.com/iam/help/conditions/overview.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policytroubleshooter\V1\Explanations::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Indicates whether _this binding_ provides the specified permission to the
     * specified member for the specified resource.
     * This field does _not_ indicate whether the member actually has the
     * permission for the resource. There might be another binding that overrides
     * this binding. To determine whether the member actually has the permission,
     * use the `access` field in the
     * [TroubleshootIamPolicyResponse][IamChecker.TroubleshootIamPolicyResponse].
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.AccessState access = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Required. Indicates whether _this binding_ provides the specified permission to the
     * specified member for the specified resource.
     * This field does _not_ indicate whether the member actually has the
     * permission for the resource. There might be another binding that overrides
     * this binding. To determine whether the member actually has the permission,
     * use the `access` field in the
     * [TroubleshootIamPolicyResponse][IamChecker.TroubleshootIamPolicyResponse].
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.AccessState access = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAccess($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicyTroubleshooter\V1\AccessState::class);
        $this->access = $var;

        return $this;
    }

    /**
     * The role that this binding grants. For example,
     * `roles/compute.serviceAgent`.
     * For a complete list of predefined IAM roles, as well as the permissions in
     * each role, see https://cloud.google.com/iam/help/roles/reference.
     *
     * Generated from protobuf field <code>string role = 2;</code>
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * The role that this binding grants. For example,
     * `roles/compute.serviceAgent`.
     * For a complete list of predefined IAM roles, as well as the permissions in
     * each role, see https://cloud.google.com/iam/help/roles/reference.
     *
     * Generated from protobuf field <code>string role = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

    /**
     * Indicates whether the role granted by this binding contains the specified
     * permission.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.BindingExplanation.RolePermission role_permission = 3;</code>
     * @return int
     */
    public function getRolePermission()
    {
        return $this->role_permission;
    }

    /**
     * Indicates whether the role granted by this binding contains the specified
     * permission.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.BindingExplanation.RolePermission role_permission = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRolePermission($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicyTroubleshooter\V1\BindingExplanation\RolePermission::class);
        $this->role_permission = $var;

        return $this;
    }

    /**
     * The relevance of the permission's existence, or nonexistence, in the role
     * to the overall determination for the entire policy.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.HeuristicRelevance role_permission_relevance = 4;</code>
     * @return int
     */
    public function getRolePermissionRelevance()
    {
        return $this->role_permission_relevance;
    }

    /**
     * The relevance of the permission's existence, or nonexistence, in the role
     * to the overall determination for the entire policy.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.HeuristicRelevance role_permission_relevance = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRolePermissionRelevance($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicyTroubleshooter\V1\HeuristicRelevance::class);
        $this->role_permission_relevance = $var;

        return $this;
    }

    /**
     * Indicates whether each member in the binding includes the member specified
     * in the request, either directly or indirectly. Each key identifies a member
     * in the binding, and each value indicates whether the member in the binding
     * includes the member in the request.
     * For example, suppose that a binding includes the following members:
     * * `user:alice&#64;example.com`
     * * `group:product-eng&#64;example.com`
     * You want to troubleshoot access for `user:bob&#64;example.com`. This user is a
     * member of the group `group:product-eng&#64;example.com`.
     * For the first member in the binding, the key is `user:alice&#64;example.com`,
     * and the `membership` field in the value is set to
     * `MEMBERSHIP_NOT_INCLUDED`.
     * For the second member in the binding, the key is
     * `group:product-eng&#64;example.com`, and the `membership` field in the value is
     * set to `MEMBERSHIP_INCLUDED`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.policytroubleshooter.v1.BindingExplanation.AnnotatedMembership> memberships = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

    /**
     * Indicates whether each member in the binding includes the member specified
     * in the request, either directly or indirectly. Each key identifies a member
     * in the binding, and each value indicates whether the member in the binding
     * includes the member in the request.
     * For example, suppose that a binding includes the following members:
     * * `user:alice&#64;example.com`
     * * `group:product-eng&#64;example.com`
     * You want to troubleshoot access for `user:bob&#64;example.com`. This user is a
     * member of the group `group:product-eng&#64;example.com`.
     * For the first member in the binding, the key is `user:alice&#64;example.com`,
     * and the `membership` field in the value is set to
     * `MEMBERSHIP_NOT_INCLUDED`.
     * For the second member in the binding, the key is
     * `group:product-eng&#64;example.com`, and the `membership` field in the value is
     * set to `MEMBERSHIP_INCLUDED`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.policytroubleshooter.v1.BindingExplanation.AnnotatedMembership> memberships = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMemberships($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PolicyTroubleshooter\V1\BindingExplanation\AnnotatedMembership::class);
        $this->memberships = $arr;

        return $this;
    }

    /**
     * The relevance of this binding to the overall determination for the entire
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.HeuristicRelevance relevance = 6;</code>
     * @return int
     */
    public function getRelevance()
    {
        return $this->relevance;
    }

    /**
     * The relevance of this binding to the overall determination for the entire
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.HeuristicRelevance relevance = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRelevance($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PolicyTroubleshooter\V1\HeuristicRelevance::class);
        $this->relevance = $var;

        return $this;
    }

    /**
     * A condition expression that prevents access unless the expression evaluates
     * to `true`.
     * To learn about IAM Conditions, see
     * http://cloud.google.com/iam/help/conditions/overview.
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 7;</code>
     * @return \Google\Type\Expr|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * A condition expression that prevents access unless the expression evaluates
     * to `true`.
     * To learn about IAM Conditions, see
     * http://cloud.google.com/iam/help/conditions/overview.
     *
     * Generated from protobuf field <code>.google.type.Expr condition = 7;</code>
     * @param \Google\Type\Expr $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Expr::class);
        $this->condition = $var;

        return $this;
    }

}

