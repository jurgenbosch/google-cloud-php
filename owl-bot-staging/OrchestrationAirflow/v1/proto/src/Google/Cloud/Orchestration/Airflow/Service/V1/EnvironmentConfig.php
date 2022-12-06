<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration information for an environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.EnvironmentConfig</code>
 */
class EnvironmentConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Kubernetes Engine cluster used to run this environment.
     *
     * Generated from protobuf field <code>string gke_cluster = 1;</code>
     */
    protected $gke_cluster = '';
    /**
     * Output only. The Cloud Storage prefix of the DAGs for this environment. Although Cloud
     * Storage objects reside in a flat namespace, a hierarchical file tree
     * can be simulated using "/"-delimited object name prefixes. DAG objects for
     * this environment reside in a simulated directory with the given prefix.
     *
     * Generated from protobuf field <code>string dag_gcs_prefix = 2;</code>
     */
    protected $dag_gcs_prefix = '';
    /**
     * The number of nodes in the Kubernetes Engine cluster that will be
     * used to run this environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>int32 node_count = 3;</code>
     */
    protected $node_count = 0;
    /**
     * The configuration settings for software inside the environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.SoftwareConfig software_config = 4;</code>
     */
    protected $software_config = null;
    /**
     * The configuration used for the Kubernetes Engine cluster.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.NodeConfig node_config = 5;</code>
     */
    protected $node_config = null;
    /**
     * The configuration used for the Private IP Cloud Composer environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.PrivateEnvironmentConfig private_environment_config = 7;</code>
     */
    protected $private_environment_config = null;
    /**
     * Optional. The network-level access control policy for the Airflow web server. If
     * unspecified, no network-level access restrictions will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WebServerNetworkAccessControl web_server_network_access_control = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $web_server_network_access_control = null;
    /**
     * Optional. The configuration settings for Cloud SQL instance used internally by Apache
     * Airflow software.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.DatabaseConfig database_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $database_config = null;
    /**
     * Optional. The configuration settings for the Airflow web server App Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WebServerConfig web_server_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $web_server_config = null;
    /**
     * Optional. The encryption options for the Cloud Composer environment
     * and its dependencies. Cannot be updated.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EncryptionConfig encryption_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encryption_config = null;
    /**
     * Optional. The maintenance window is the period when Cloud Composer components may
     * undergo maintenance. It is defined so that maintenance is not executed
     * during peak hours or critical time periods.
     * The system will not be under maintenance for every occurrence of this
     * window, but when maintenance is planned, it will be scheduled
     * during the window.
     * The maintenance window period must encompass at least 12 hours per week.
     * This may be split into multiple chunks, each with a size of
     * at least 4 hours.
     * If this value is omitted, the default value for maintenance window will be
     * applied. The default value is Saturday and Sunday 00-06 GMT.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.MaintenanceWindow maintenance_window = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $maintenance_window = null;
    /**
     * Optional. The workloads configuration settings for the GKE cluster associated with
     * the Cloud Composer environment. The GKE cluster runs Airflow scheduler, web
     * server and workers workloads.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig workloads_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $workloads_config = null;
    /**
     * Optional. The size of the Cloud Composer environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig.EnvironmentSize environment_size = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $environment_size = 0;
    /**
     * Output only. The URI of the Apache Airflow Web UI hosted within this environment (see
     * [Airflow web
     * interface](/composer/docs/how-to/accessing/airflow-web-interface)).
     *
     * Generated from protobuf field <code>string airflow_uri = 6;</code>
     */
    protected $airflow_uri = '';
    /**
     * Optional. The configuration options for GKE cluster master authorized networks.
     * By default master authorized networks feature is:
     * - in case of private environment: enabled with no external networks
     * allowlisted.
     * - in case of public environment: disabled.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.MasterAuthorizedNetworksConfig master_authorized_networks_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $master_authorized_networks_config = null;
    /**
     * Optional. The Recovery settings configuration of an environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.RecoveryConfig recovery_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $recovery_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gke_cluster
     *           Output only. The Kubernetes Engine cluster used to run this environment.
     *     @type string $dag_gcs_prefix
     *           Output only. The Cloud Storage prefix of the DAGs for this environment. Although Cloud
     *           Storage objects reside in a flat namespace, a hierarchical file tree
     *           can be simulated using "/"-delimited object name prefixes. DAG objects for
     *           this environment reside in a simulated directory with the given prefix.
     *     @type int $node_count
     *           The number of nodes in the Kubernetes Engine cluster that will be
     *           used to run this environment.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-1.*.*-airflow-*.*.*.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\SoftwareConfig $software_config
     *           The configuration settings for software inside the environment.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\NodeConfig $node_config
     *           The configuration used for the Kubernetes Engine cluster.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\PrivateEnvironmentConfig $private_environment_config
     *           The configuration used for the Private IP Cloud Composer environment.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerNetworkAccessControl $web_server_network_access_control
     *           Optional. The network-level access control policy for the Airflow web server. If
     *           unspecified, no network-level access restrictions will be applied.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\DatabaseConfig $database_config
     *           Optional. The configuration settings for Cloud SQL instance used internally by Apache
     *           Airflow software.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerConfig $web_server_config
     *           Optional. The configuration settings for the Airflow web server App Engine instance.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\EncryptionConfig $encryption_config
     *           Optional. The encryption options for the Cloud Composer environment
     *           and its dependencies. Cannot be updated.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\MaintenanceWindow $maintenance_window
     *           Optional. The maintenance window is the period when Cloud Composer components may
     *           undergo maintenance. It is defined so that maintenance is not executed
     *           during peak hours or critical time periods.
     *           The system will not be under maintenance for every occurrence of this
     *           window, but when maintenance is planned, it will be scheduled
     *           during the window.
     *           The maintenance window period must encompass at least 12 hours per week.
     *           This may be split into multiple chunks, each with a size of
     *           at least 4 hours.
     *           If this value is omitted, the default value for maintenance window will be
     *           applied. The default value is Saturday and Sunday 00-06 GMT.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig $workloads_config
     *           Optional. The workloads configuration settings for the GKE cluster associated with
     *           the Cloud Composer environment. The GKE cluster runs Airflow scheduler, web
     *           server and workers workloads.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-2.*.*-airflow-*.*.* and newer.
     *     @type int $environment_size
     *           Optional. The size of the Cloud Composer environment.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-2.*.*-airflow-*.*.* and newer.
     *     @type string $airflow_uri
     *           Output only. The URI of the Apache Airflow Web UI hosted within this environment (see
     *           [Airflow web
     *           interface](/composer/docs/how-to/accessing/airflow-web-interface)).
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\MasterAuthorizedNetworksConfig $master_authorized_networks_config
     *           Optional. The configuration options for GKE cluster master authorized networks.
     *           By default master authorized networks feature is:
     *           - in case of private environment: enabled with no external networks
     *           allowlisted.
     *           - in case of public environment: disabled.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\RecoveryConfig $recovery_config
     *           Optional. The Recovery settings configuration of an environment.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-2.*.*-airflow-*.*.* and newer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Kubernetes Engine cluster used to run this environment.
     *
     * Generated from protobuf field <code>string gke_cluster = 1;</code>
     * @return string
     */
    public function getGkeCluster()
    {
        return $this->gke_cluster;
    }

    /**
     * Output only. The Kubernetes Engine cluster used to run this environment.
     *
     * Generated from protobuf field <code>string gke_cluster = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGkeCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->gke_cluster = $var;

        return $this;
    }

    /**
     * Output only. The Cloud Storage prefix of the DAGs for this environment. Although Cloud
     * Storage objects reside in a flat namespace, a hierarchical file tree
     * can be simulated using "/"-delimited object name prefixes. DAG objects for
     * this environment reside in a simulated directory with the given prefix.
     *
     * Generated from protobuf field <code>string dag_gcs_prefix = 2;</code>
     * @return string
     */
    public function getDagGcsPrefix()
    {
        return $this->dag_gcs_prefix;
    }

    /**
     * Output only. The Cloud Storage prefix of the DAGs for this environment. Although Cloud
     * Storage objects reside in a flat namespace, a hierarchical file tree
     * can be simulated using "/"-delimited object name prefixes. DAG objects for
     * this environment reside in a simulated directory with the given prefix.
     *
     * Generated from protobuf field <code>string dag_gcs_prefix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDagGcsPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->dag_gcs_prefix = $var;

        return $this;
    }

    /**
     * The number of nodes in the Kubernetes Engine cluster that will be
     * used to run this environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>int32 node_count = 3;</code>
     * @return int
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * The number of nodes in the Kubernetes Engine cluster that will be
     * used to run this environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>int32 node_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->node_count = $var;

        return $this;
    }

    /**
     * The configuration settings for software inside the environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.SoftwareConfig software_config = 4;</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\SoftwareConfig|null
     */
    public function getSoftwareConfig()
    {
        return $this->software_config;
    }

    public function hasSoftwareConfig()
    {
        return isset($this->software_config);
    }

    public function clearSoftwareConfig()
    {
        unset($this->software_config);
    }

    /**
     * The configuration settings for software inside the environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.SoftwareConfig software_config = 4;</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\SoftwareConfig $var
     * @return $this
     */
    public function setSoftwareConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\SoftwareConfig::class);
        $this->software_config = $var;

        return $this;
    }

    /**
     * The configuration used for the Kubernetes Engine cluster.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.NodeConfig node_config = 5;</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\NodeConfig|null
     */
    public function getNodeConfig()
    {
        return $this->node_config;
    }

    public function hasNodeConfig()
    {
        return isset($this->node_config);
    }

    public function clearNodeConfig()
    {
        unset($this->node_config);
    }

    /**
     * The configuration used for the Kubernetes Engine cluster.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.NodeConfig node_config = 5;</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\NodeConfig $var
     * @return $this
     */
    public function setNodeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\NodeConfig::class);
        $this->node_config = $var;

        return $this;
    }

    /**
     * The configuration used for the Private IP Cloud Composer environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.PrivateEnvironmentConfig private_environment_config = 7;</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\PrivateEnvironmentConfig|null
     */
    public function getPrivateEnvironmentConfig()
    {
        return $this->private_environment_config;
    }

    public function hasPrivateEnvironmentConfig()
    {
        return isset($this->private_environment_config);
    }

    public function clearPrivateEnvironmentConfig()
    {
        unset($this->private_environment_config);
    }

    /**
     * The configuration used for the Private IP Cloud Composer environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.PrivateEnvironmentConfig private_environment_config = 7;</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\PrivateEnvironmentConfig $var
     * @return $this
     */
    public function setPrivateEnvironmentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\PrivateEnvironmentConfig::class);
        $this->private_environment_config = $var;

        return $this;
    }

    /**
     * Optional. The network-level access control policy for the Airflow web server. If
     * unspecified, no network-level access restrictions will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WebServerNetworkAccessControl web_server_network_access_control = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerNetworkAccessControl|null
     */
    public function getWebServerNetworkAccessControl()
    {
        return $this->web_server_network_access_control;
    }

    public function hasWebServerNetworkAccessControl()
    {
        return isset($this->web_server_network_access_control);
    }

    public function clearWebServerNetworkAccessControl()
    {
        unset($this->web_server_network_access_control);
    }

    /**
     * Optional. The network-level access control policy for the Airflow web server. If
     * unspecified, no network-level access restrictions will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WebServerNetworkAccessControl web_server_network_access_control = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerNetworkAccessControl $var
     * @return $this
     */
    public function setWebServerNetworkAccessControl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerNetworkAccessControl::class);
        $this->web_server_network_access_control = $var;

        return $this;
    }

    /**
     * Optional. The configuration settings for Cloud SQL instance used internally by Apache
     * Airflow software.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.DatabaseConfig database_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\DatabaseConfig|null
     */
    public function getDatabaseConfig()
    {
        return $this->database_config;
    }

    public function hasDatabaseConfig()
    {
        return isset($this->database_config);
    }

    public function clearDatabaseConfig()
    {
        unset($this->database_config);
    }

    /**
     * Optional. The configuration settings for Cloud SQL instance used internally by Apache
     * Airflow software.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.DatabaseConfig database_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\DatabaseConfig $var
     * @return $this
     */
    public function setDatabaseConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\DatabaseConfig::class);
        $this->database_config = $var;

        return $this;
    }

    /**
     * Optional. The configuration settings for the Airflow web server App Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WebServerConfig web_server_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerConfig|null
     */
    public function getWebServerConfig()
    {
        return $this->web_server_config;
    }

    public function hasWebServerConfig()
    {
        return isset($this->web_server_config);
    }

    public function clearWebServerConfig()
    {
        unset($this->web_server_config);
    }

    /**
     * Optional. The configuration settings for the Airflow web server App Engine instance.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WebServerConfig web_server_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerConfig $var
     * @return $this
     */
    public function setWebServerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WebServerConfig::class);
        $this->web_server_config = $var;

        return $this;
    }

    /**
     * Optional. The encryption options for the Cloud Composer environment
     * and its dependencies. Cannot be updated.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EncryptionConfig encryption_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\EncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return $this->encryption_config;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Optional. The encryption options for the Cloud Composer environment
     * and its dependencies. Cannot be updated.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EncryptionConfig encryption_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\EncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\EncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

    /**
     * Optional. The maintenance window is the period when Cloud Composer components may
     * undergo maintenance. It is defined so that maintenance is not executed
     * during peak hours or critical time periods.
     * The system will not be under maintenance for every occurrence of this
     * window, but when maintenance is planned, it will be scheduled
     * during the window.
     * The maintenance window period must encompass at least 12 hours per week.
     * This may be split into multiple chunks, each with a size of
     * at least 4 hours.
     * If this value is omitted, the default value for maintenance window will be
     * applied. The default value is Saturday and Sunday 00-06 GMT.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.MaintenanceWindow maintenance_window = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\MaintenanceWindow|null
     */
    public function getMaintenanceWindow()
    {
        return $this->maintenance_window;
    }

    public function hasMaintenanceWindow()
    {
        return isset($this->maintenance_window);
    }

    public function clearMaintenanceWindow()
    {
        unset($this->maintenance_window);
    }

    /**
     * Optional. The maintenance window is the period when Cloud Composer components may
     * undergo maintenance. It is defined so that maintenance is not executed
     * during peak hours or critical time periods.
     * The system will not be under maintenance for every occurrence of this
     * window, but when maintenance is planned, it will be scheduled
     * during the window.
     * The maintenance window period must encompass at least 12 hours per week.
     * This may be split into multiple chunks, each with a size of
     * at least 4 hours.
     * If this value is omitted, the default value for maintenance window will be
     * applied. The default value is Saturday and Sunday 00-06 GMT.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.MaintenanceWindow maintenance_window = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\MaintenanceWindow $var
     * @return $this
     */
    public function setMaintenanceWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\MaintenanceWindow::class);
        $this->maintenance_window = $var;

        return $this;
    }

    /**
     * Optional. The workloads configuration settings for the GKE cluster associated with
     * the Cloud Composer environment. The GKE cluster runs Airflow scheduler, web
     * server and workers workloads.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig workloads_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig|null
     */
    public function getWorkloadsConfig()
    {
        return $this->workloads_config;
    }

    public function hasWorkloadsConfig()
    {
        return isset($this->workloads_config);
    }

    public function clearWorkloadsConfig()
    {
        unset($this->workloads_config);
    }

    /**
     * Optional. The workloads configuration settings for the GKE cluster associated with
     * the Cloud Composer environment. The GKE cluster runs Airflow scheduler, web
     * server and workers workloads.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.WorkloadsConfig workloads_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig $var
     * @return $this
     */
    public function setWorkloadsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig::class);
        $this->workloads_config = $var;

        return $this;
    }

    /**
     * Optional. The size of the Cloud Composer environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig.EnvironmentSize environment_size = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getEnvironmentSize()
    {
        return $this->environment_size;
    }

    /**
     * Optional. The size of the Cloud Composer environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig.EnvironmentSize environment_size = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setEnvironmentSize($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Orchestration\Airflow\Service\V1\EnvironmentConfig\EnvironmentSize::class);
        $this->environment_size = $var;

        return $this;
    }

    /**
     * Output only. The URI of the Apache Airflow Web UI hosted within this environment (see
     * [Airflow web
     * interface](/composer/docs/how-to/accessing/airflow-web-interface)).
     *
     * Generated from protobuf field <code>string airflow_uri = 6;</code>
     * @return string
     */
    public function getAirflowUri()
    {
        return $this->airflow_uri;
    }

    /**
     * Output only. The URI of the Apache Airflow Web UI hosted within this environment (see
     * [Airflow web
     * interface](/composer/docs/how-to/accessing/airflow-web-interface)).
     *
     * Generated from protobuf field <code>string airflow_uri = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAirflowUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->airflow_uri = $var;

        return $this;
    }

    /**
     * Optional. The configuration options for GKE cluster master authorized networks.
     * By default master authorized networks feature is:
     * - in case of private environment: enabled with no external networks
     * allowlisted.
     * - in case of public environment: disabled.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.MasterAuthorizedNetworksConfig master_authorized_networks_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\MasterAuthorizedNetworksConfig|null
     */
    public function getMasterAuthorizedNetworksConfig()
    {
        return $this->master_authorized_networks_config;
    }

    public function hasMasterAuthorizedNetworksConfig()
    {
        return isset($this->master_authorized_networks_config);
    }

    public function clearMasterAuthorizedNetworksConfig()
    {
        unset($this->master_authorized_networks_config);
    }

    /**
     * Optional. The configuration options for GKE cluster master authorized networks.
     * By default master authorized networks feature is:
     * - in case of private environment: enabled with no external networks
     * allowlisted.
     * - in case of public environment: disabled.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.MasterAuthorizedNetworksConfig master_authorized_networks_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\MasterAuthorizedNetworksConfig $var
     * @return $this
     */
    public function setMasterAuthorizedNetworksConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\MasterAuthorizedNetworksConfig::class);
        $this->master_authorized_networks_config = $var;

        return $this;
    }

    /**
     * Optional. The Recovery settings configuration of an environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.RecoveryConfig recovery_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\RecoveryConfig|null
     */
    public function getRecoveryConfig()
    {
        return $this->recovery_config;
    }

    public function hasRecoveryConfig()
    {
        return isset($this->recovery_config);
    }

    public function clearRecoveryConfig()
    {
        unset($this->recovery_config);
    }

    /**
     * Optional. The Recovery settings configuration of an environment.
     * This field is supported for Cloud Composer environments in versions
     * composer-2.*.*-airflow-*.*.* and newer.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.RecoveryConfig recovery_config = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\RecoveryConfig $var
     * @return $this
     */
    public function setRecoveryConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\RecoveryConfig::class);
        $this->recovery_config = $var;

        return $this;
    }

}

