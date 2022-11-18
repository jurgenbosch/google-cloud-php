<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Zypper patching is performed by running `zypper patch`.
 * See also https://en.opensuse.org/SDB:Zypper_manual.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ZypperSettings</code>
 */
class ZypperSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Adds the `--with-optional` flag to `zypper patch`.
     *
     * Generated from protobuf field <code>bool with_optional = 1;</code>
     */
    protected $with_optional = false;
    /**
     * Adds the `--with-update` flag, to `zypper patch`.
     *
     * Generated from protobuf field <code>bool with_update = 2;</code>
     */
    protected $with_update = false;
    /**
     * Install only patches with these categories.
     * Common categories include security, recommended, and feature.
     *
     * Generated from protobuf field <code>repeated string categories = 3;</code>
     */
    private $categories;
    /**
     * Install only patches with these severities.
     * Common severities include critical, important, moderate, and low.
     *
     * Generated from protobuf field <code>repeated string severities = 4;</code>
     */
    private $severities;
    /**
     * List of patches to exclude from update.
     *
     * Generated from protobuf field <code>repeated string excludes = 5;</code>
     */
    private $excludes;
    /**
     * An exclusive list of patches to be updated. These are the only patches
     * that will be installed using 'zypper patch patch:<patch_name>' command.
     * This field must not be used with any other patch configuration fields.
     *
     * Generated from protobuf field <code>repeated string exclusive_patches = 6;</code>
     */
    private $exclusive_patches;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $with_optional
     *           Adds the `--with-optional` flag to `zypper patch`.
     *     @type bool $with_update
     *           Adds the `--with-update` flag, to `zypper patch`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $categories
     *           Install only patches with these categories.
     *           Common categories include security, recommended, and feature.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $severities
     *           Install only patches with these severities.
     *           Common severities include critical, important, moderate, and low.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $excludes
     *           List of patches to exclude from update.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclusive_patches
     *           An exclusive list of patches to be updated. These are the only patches
     *           that will be installed using 'zypper patch patch:<patch_name>' command.
     *           This field must not be used with any other patch configuration fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Adds the `--with-optional` flag to `zypper patch`.
     *
     * Generated from protobuf field <code>bool with_optional = 1;</code>
     * @return bool
     */
    public function getWithOptional()
    {
        return $this->with_optional;
    }

    /**
     * Adds the `--with-optional` flag to `zypper patch`.
     *
     * Generated from protobuf field <code>bool with_optional = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithOptional($var)
    {
        GPBUtil::checkBool($var);
        $this->with_optional = $var;

        return $this;
    }

    /**
     * Adds the `--with-update` flag, to `zypper patch`.
     *
     * Generated from protobuf field <code>bool with_update = 2;</code>
     * @return bool
     */
    public function getWithUpdate()
    {
        return $this->with_update;
    }

    /**
     * Adds the `--with-update` flag, to `zypper patch`.
     *
     * Generated from protobuf field <code>bool with_update = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithUpdate($var)
    {
        GPBUtil::checkBool($var);
        $this->with_update = $var;

        return $this;
    }

    /**
     * Install only patches with these categories.
     * Common categories include security, recommended, and feature.
     *
     * Generated from protobuf field <code>repeated string categories = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Install only patches with these categories.
     * Common categories include security, recommended, and feature.
     *
     * Generated from protobuf field <code>repeated string categories = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->categories = $arr;

        return $this;
    }

    /**
     * Install only patches with these severities.
     * Common severities include critical, important, moderate, and low.
     *
     * Generated from protobuf field <code>repeated string severities = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeverities()
    {
        return $this->severities;
    }

    /**
     * Install only patches with these severities.
     * Common severities include critical, important, moderate, and low.
     *
     * Generated from protobuf field <code>repeated string severities = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSeverities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->severities = $arr;

        return $this;
    }

    /**
     * List of patches to exclude from update.
     *
     * Generated from protobuf field <code>repeated string excludes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludes()
    {
        return $this->excludes;
    }

    /**
     * List of patches to exclude from update.
     *
     * Generated from protobuf field <code>repeated string excludes = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excludes = $arr;

        return $this;
    }

    /**
     * An exclusive list of patches to be updated. These are the only patches
     * that will be installed using 'zypper patch patch:<patch_name>' command.
     * This field must not be used with any other patch configuration fields.
     *
     * Generated from protobuf field <code>repeated string exclusive_patches = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusivePatches()
    {
        return $this->exclusive_patches;
    }

    /**
     * An exclusive list of patches to be updated. These are the only patches
     * that will be installed using 'zypper patch patch:<patch_name>' command.
     * This field must not be used with any other patch configuration fields.
     *
     * Generated from protobuf field <code>repeated string exclusive_patches = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusivePatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclusive_patches = $arr;

        return $this;
    }

}

