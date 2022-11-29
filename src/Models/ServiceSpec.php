<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class ServiceSpec extends Model
{
    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $template;

    /**
     * @var mixed[]
     */
    public $templateVariables;

    /**
     * @var int
     */
    public $templateVersion;
    protected $_name = [
        'environment'       => 'environment',
        'roleArn'           => 'roleArn',
        'template'          => 'template',
        'templateVariables' => 'templateVariables',
        'templateVersion'   => 'templateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['environment'] = $this->environment;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->templateVariables) {
            $res['templateVariables'] = $this->templateVariables;
        }
        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environment'])) {
            $model->environment = $map['environment'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['templateVariables'])) {
            $model->templateVariables = $map['templateVariables'];
        }
        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        return $model;
    }
}
