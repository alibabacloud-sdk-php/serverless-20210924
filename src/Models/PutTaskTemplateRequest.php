<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class PutTaskTemplateRequest extends Model
{
    /**
     * @var TaskTemplate
     */
    public $body;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'body'  => 'body',
        'force' => 'force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutTaskTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = TaskTemplate::fromMap($map['body']);
        }
        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
