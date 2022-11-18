<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/target.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information needed for generating an
 * [OpenID Connect
 * token](https://developers.google.com/identity/protocols/OpenIDConnect).
 * This type of authorization can be used for many scenarios, including
 * calling Cloud Run, or endpoints where you intend to validate the token
 * yourself.
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.OidcToken</code>
 */
class OidcToken extends \Google\Protobuf\Internal\Message
{
    /**
     * [Service account email](https://cloud.google.com/iam/docs/service-accounts)
     * to be used for generating OIDC token.
     * The service account must be within the same project as the queue. The
     * caller must have iam.serviceAccounts.actAs permission for the service
     * account.
     *
     * Generated from protobuf field <code>string service_account_email = 1;</code>
     */
    protected $service_account_email = '';
    /**
     * Audience to be used when generating OIDC token. If not specified, the URI
     * specified in target will be used.
     *
     * Generated from protobuf field <code>string audience = 2;</code>
     */
    protected $audience = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_account_email
     *           [Service account email](https://cloud.google.com/iam/docs/service-accounts)
     *           to be used for generating OIDC token.
     *           The service account must be within the same project as the queue. The
     *           caller must have iam.serviceAccounts.actAs permission for the service
     *           account.
     *     @type string $audience
     *           Audience to be used when generating OIDC token. If not specified, the URI
     *           specified in target will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * [Service account email](https://cloud.google.com/iam/docs/service-accounts)
     * to be used for generating OIDC token.
     * The service account must be within the same project as the queue. The
     * caller must have iam.serviceAccounts.actAs permission for the service
     * account.
     *
     * Generated from protobuf field <code>string service_account_email = 1;</code>
     * @return string
     */
    public function getServiceAccountEmail()
    {
        return $this->service_account_email;
    }

    /**
     * [Service account email](https://cloud.google.com/iam/docs/service-accounts)
     * to be used for generating OIDC token.
     * The service account must be within the same project as the queue. The
     * caller must have iam.serviceAccounts.actAs permission for the service
     * account.
     *
     * Generated from protobuf field <code>string service_account_email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_email = $var;

        return $this;
    }

    /**
     * Audience to be used when generating OIDC token. If not specified, the URI
     * specified in target will be used.
     *
     * Generated from protobuf field <code>string audience = 2;</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Audience to be used when generating OIDC token. If not specified, the URI
     * specified in target will be used.
     *
     * Generated from protobuf field <code>string audience = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

}

